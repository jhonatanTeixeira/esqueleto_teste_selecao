<?php

require 'vendor/autoload.php';

$app = new Slim\App([
    'settings' => [
        'debug' => true,
        'displayErrorDetails' => true
    ]
]);

$app->getContainer()->register(new \App\ServiceProvider\DoctrineServiceProvider());
$app->getContainer()->register(new \App\ServiceProvider\TwigProvider());
$app->getContainer()->register(new \App\ServiceProvider\ActionServiceProvider());

$app->add(new Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware());

return $app;