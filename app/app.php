<?php

/**
 * Your main app file. 
 */

$app = require_once __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app) {
    return 'Hello, world!';
});

foreach ($app['controller_providers'] as $route => $provider) {
    $app->mount($route, $provider);
}

return $app;
