<?php

return [
    'name'    => $_ENV['APP_NAME']   ?? 'ShapePro IA',
    'env'     => $_ENV['APP_ENV']    ?? 'production',
    'url'     => $_ENV['APP_URL']    ?? 'http://localhost',
    'secret'  => $_ENV['APP_SECRET'] ?? 'changeme_32chars_random_string__',
    'version' => '1.0.0',
    'timezone'=> 'America/Sao_Paulo',
    'upload_path' => ROOT . '/public/uploads',
    'upload_max_size' => 10 * 1024 * 1024, // 10MB
];
