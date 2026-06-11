<?php

class LandingLeadModel {

    public static function create(array $data): int {
        return DB::insert('landing_leads', [
            'name'              => $data['name'],
            'whatsapp'          => $data['whatsapp'],
            'email'             => $data['email'],
            'professional_type' => $data['professional_type'],
            'student_range'     => $data['student_range'],
            'interest'          => $data['interest'],
            'source_page'       => $data['source_page'] ?? '/landing',
            'ip_address'        => $data['ip_address']  ?? null,
            'user_agent'        => $data['user_agent']  ?? null,
            'status'            => 'novo',
        ]);
    }

    public static function all(string $status = ''): array {
        if ($status) {
            return DB::select(
                'SELECT * FROM landing_leads WHERE status = ? ORDER BY created_at DESC',
                [$status]
            );
        }
        return DB::select('SELECT * FROM landing_leads ORDER BY created_at DESC');
    }

    public static function find(int $id): ?array {
        return DB::first('SELECT * FROM landing_leads WHERE id = ?', [$id]);
    }

    public static function updateStatus(int $id, string $status): void {
        DB::update('landing_leads', ['status' => $status], 'id = ?', [$id]);
    }

    public static function countByStatus(): array {
        $rows = DB::select(
            'SELECT status, COUNT(*) as total FROM landing_leads GROUP BY status'
        );
        $result = [];
        foreach ($rows as $row) {
            $result[$row['status']] = (int) $row['total'];
        }
        return $result;
    }

    public static function emailExists(string $email): bool {
        return DB::count('landing_leads', 'email = ?', [$email]) > 0;
    }
}
