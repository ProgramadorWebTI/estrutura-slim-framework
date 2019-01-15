<?php

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ],
]);

$container = $app->getContainer();

$container['paginacao'] = function ($container) {
    return new \App\Pagination();
};

$container['blade'] = function ($container) {
    return new Jenssegers\Blade\Blade(__DIR__ . '/../resources/views', __DIR__ . '/../resources/cache');
};

require __DIR__ . '/../routes/web.php';
