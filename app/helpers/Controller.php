<?php

abstract class Controller {
    protected function view(string $view, array $data = [], string $layout = 'main'): void {
        View::render($view, $data, $layout);
    }

    protected function json(mixed $data, int $code = 200): void {
        http_response_code($code);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }

    protected function redirect(string $url): void {
        redirect($url);
    }

    protected function requireAuth(): void {
        Auth::require();
    }

    protected function requireRole(string ...$roles): void {
        Auth::requireRole(...$roles);
    }

    protected function trainerId(): int {
        $id = Auth::trainerId();
        if (!$id) { http_response_code(403); die('Sem acesso.'); }
        return $id;
    }

    protected function input(string $key, mixed $default = null): mixed {
        return $_POST[$key] ?? $_GET[$key] ?? $default;
    }

    protected function post(string $key, mixed $default = null): mixed {
        return $_POST[$key] ?? $default;
    }

    protected function get(string $key, mixed $default = null): mixed {
        return $_GET[$key] ?? $default;
    }

    protected function isPost(): bool {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    protected function sanitize(array $data, array $fields): array {
        $clean = [];
        foreach ($fields as $field) {
            $clean[$field] = isset($data[$field]) ? trim(strip_tags($data[$field])) : null;
        }
        return $clean;
    }

    protected function flash(string $type, string $msg): void {
        flash($type, $msg);
    }
}
