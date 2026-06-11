<?php

class View {
    public static function render(string $view, array $data = [], string $layout = 'main'): void {
        extract($data);
        $content = self::capture(ROOT . '/app/views/' . str_replace('.', '/', $view) . '.php', $data);
        if ($layout) {
            require ROOT . '/app/views/layouts/' . $layout . '.php';
        } else {
            echo $content;
        }
    }

    public static function capture(string $file, array $data = []): string {
        extract($data);
        ob_start();
        require $file;
        return ob_get_clean();
    }

    public static function partial(string $partial, array $data = []): void {
        extract($data);
        require ROOT . '/app/views/partials/' . $partial . '.php';
    }
}
