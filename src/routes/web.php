<?php

use App\Controller\ArticleController;
use Slim\App;

/** @var App $app */

$app->map(['GET', 'POST'], '/articles/create', ArticleController::class . ':create');
$app->map(['GET', 'POST'], '/articles/edit/{id}', ArticleController::class . ':edit');
$app->delete('/articles/{id}', ArticleController::class . ':delete');
$app->get('/articles', ArticleController::class . ':index');
$app->get('/articles/{id}', ArticleController::class . ':show');
$app->get('/', function ($request, $response) {
    return $response->withHeader('Location', '/articles')->withStatus(302);
});
