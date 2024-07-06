<?php

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

//TODO: Created Container using PHP-DI
$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions
([
    Logger::class => function() {
        $logger = new Logger('app');
        $logger->pushHandler(new StreamHandler
        (__DIR__ . '/../logs/app.log',
            Logger::DEBUG));
        return $logger;
    },
    PDO::class => function() {
        $dsn = 'sqlite:' . __DIR__ .
            '/../database.sqlite';
        return new PDO($dsn);
    },
    Twig::class => function() {
        return Twig::create
        (
            __DIR__ . '/../src/View',
            ['cache' => false]);
    },
]);

$container = $containerBuilder->build();

//TODO: Created App
AppFactory::setContainer($container);
$app = AppFactory::create();

//TODO: Added Twig Middleware
$app->add(TwigMiddleware::createFromContainer($app, Twig::class));

//TODO: Added Error Middleware
$app->addErrorMiddleware
(
    true,
    true,
    true
);

require __DIR__ . '/../src/routes/web.php';

try {
    $app->run();
} catch (Exception $e) {
    // Log exception
    $logger = $container->get(Logger::class);
    $logger->error($e->getMessage());
    echo 'An unexpected error occurred. Please check the logs.';
}
