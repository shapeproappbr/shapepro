<?php

function e(mixed $v): string {
    return htmlspecialchars((string)($v ?? ''), ENT_QUOTES, 'UTF-8');
}

function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_field(): string {
    return '<input type="hidden" name="csrf_token" value="' . csrf_token() . '">';
}

function csrf_check(): void {
    $token = $_POST['csrf_token'] ?? $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
    if (!hash_equals(csrf_token(), $token)) {
        http_response_code(419);
        die(json_encode(['error' => 'CSRF token inválido']));
    }
}

function _base_path(): string {
    // Normaliza separadores (Windows pode retornar \ em dirname)
    $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    return ($dir === '/' || $dir === '') ? '' : rtrim($dir, '/');
}

function redirect(string $url): void {
    if (strpos($url, 'http') !== 0) {
        $base = _base_path();
        if ($base && strpos($url, $base) !== 0) {
            $url = $base . '/' . ltrim($url, '/');
        } elseif (!str_starts_with($url, '/')) {
            $url = '/' . $url;
        }
    }
    header('Location: ' . $url);
    exit;
}

function back(): void {
    redirect($_SERVER['HTTP_REFERER'] ?? '/');
}

function base_url(string $path = ''): string {
    return _base_path() . '/' . ltrim($path, '/');
}

function asset(string $path): string {
    return base_url($path);
}

function flash(string $key, mixed $value = null): mixed {
    if ($value !== null) {
        $_SESSION['flash'][$key] = $value;
        return null;
    }
    $v = $_SESSION['flash'][$key] ?? null;
    unset($_SESSION['flash'][$key]);
    return $v;
}

function old(string $key, mixed $default = ''): mixed {
    return $_SESSION['old'][$key] ?? $default;
}

function store_old(array $data): void {
    $_SESSION['old'] = $data;
}

function format_date(string $date, string $format = 'd/m/Y'): string {
    if (!$date) return '—';
    return date($format, strtotime($date));
}

function format_money(float $value): string {
    return 'R$ ' . number_format($value, 2, ',', '.');
}

function bmi(float $weight, float $height): float {
    if ($height <= 0) return 0;
    return round($weight / ($height * $height), 1);
}

function bmi_label(float $bmi): string {
    if ($bmi < 18.5) return 'Abaixo do peso';
    if ($bmi < 25)   return 'Peso normal';
    if ($bmi < 30)   return 'Sobrepeso';
    if ($bmi < 35)   return 'Obesidade grau I';
    if ($bmi < 40)   return 'Obesidade grau II';
    return 'Obesidade grau III';
}

function days_since(string $date): int {
    if (!$date) return 999;
    return (int)floor((time() - strtotime($date)) / 86400);
}

function risk_label(int $score): string {
    if ($score < 20) return 'Baixo';
    if ($score < 50) return 'Médio';
    if ($score < 75) return 'Alto';
    return 'Crítico';
}

function risk_color(int $score): string {
    if ($score < 20) return 'green';
    if ($score < 50) return 'yellow';
    if ($score < 75) return 'orange';
    return 'red';
}

function paginate(int $total, int $perPage, int $page, string $url): array {
    $pages = (int)ceil($total / $perPage);
    return [
        'total'    => $total,
        'per_page' => $perPage,
        'page'     => $page,
        'pages'    => $pages,
        'offset'   => ($page - 1) * $perPage,
        'url'      => $url,
        'has_prev' => $page > 1,
        'has_next' => $page < $pages,
    ];
}
