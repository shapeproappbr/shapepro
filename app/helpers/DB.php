<?php

class DB {
    private static ?PDO $pdo = null;

    public static function connection(): PDO {
        if (self::$pdo === null) {
            $cfg = require ROOT . '/app/config/database.php';
            $dsn = "mysql:host={$cfg['host']};port={$cfg['port']};dbname={$cfg['database']};charset={$cfg['charset']}";
            self::$pdo = new PDO($dsn, $cfg['username'], $cfg['password'], $cfg['options']);
        }
        return self::$pdo;
    }

    public static function query(string $sql, array $bindings = []): PDOStatement {
        $stmt = self::connection()->prepare($sql);
        $stmt->execute($bindings);
        return $stmt;
    }

    public static function select(string $sql, array $bindings = []): array {
        return self::query($sql, $bindings)->fetchAll();
    }

    public static function first(string $sql, array $bindings = []): ?array {
        $r = self::query($sql, $bindings)->fetch();
        return $r ?: null;
    }

    public static function insert(string $table, array $data): int {
        $cols = implode(',', array_map(fn($k) => "`$k`", array_keys($data)));
        $ph   = implode(',', array_fill(0, count($data), '?'));
        self::query("INSERT INTO `$table` ($cols) VALUES ($ph)", array_values($data));
        return (int)self::connection()->lastInsertId();
    }

    public static function update(string $table, array $data, string $where, array $whereBindings = []): int {
        $set = implode(',', array_map(fn($k) => "`$k`=?", array_keys($data)));
        $stmt = self::query("UPDATE `$table` SET $set WHERE $where", [...array_values($data), ...$whereBindings]);
        return $stmt->rowCount();
    }

    public static function delete(string $table, string $where, array $bindings = []): int {
        return self::query("DELETE FROM `$table` WHERE $where", $bindings)->rowCount();
    }

    public static function count(string $table, string $where = '1=1', array $bindings = []): int {
        $r = self::first("SELECT COUNT(*) as cnt FROM `$table` WHERE $where", $bindings);
        return (int)($r['cnt'] ?? 0);
    }

    public static function transaction(callable $fn): mixed {
        self::connection()->beginTransaction();
        try {
            $result = $fn();
            self::connection()->commit();
            return $result;
        } catch (\Throwable $e) {
            self::connection()->rollBack();
            throw $e;
        }
    }
}
