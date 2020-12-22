<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new DI\ContainerBuilder();
$containerBuilder->addDefinitions([
    'settings' => [
        'displayErrorDetails' => true
    ],
]);
$containerBuilder->useAnnotations(false);
$container = $containerBuilder->build();

// Instantiate the app
AppFactory::setContainer($container);
$app = AppFactory::create();

// Register routes
$routes = require __DIR__ . '/../src/routes.php';
$routes($app);

/** @var bool $displayErrorDetails */
$displayErrorDetails = $container->get('settings')['displayErrorDetails'];

$app->run();