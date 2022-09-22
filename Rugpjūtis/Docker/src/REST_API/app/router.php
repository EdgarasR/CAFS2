<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write('Hello');

    return $response;
});

$app->group('/store/orders', function (RouteCollectorProxy $group) {
    $group->post('/', function (Request $request, Response $response, $args) {
        $payload = json_encode($args);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    });
    $group->get('/{order}', function (Request $request, Response $response, $args) {
        $payload = json_encode($args);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    });
    $group->delete('/{order}', function (Request $request, Response $response, $args) {
        $payload = json_encode($args);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    });
});