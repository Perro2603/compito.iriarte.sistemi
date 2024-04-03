<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Models\Squadre;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();


$app->get('/torneo/{codice}', function (Request $request, Response $response, array $args) {

    $torneo = new torneo("torneo iniziale", $args['codice'], "2024-05-01","stadio principale ", []);

    $response->getBody()->write(json_encode($torneo));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});


$app->get('/squadre', function (Request $request, Response $response, array $args) {
    $squadre = [
        new Squadra('Squadra 1', 'Rosso', 'Maschile'),
        new Squadra('Squadra 2', 'Blu', 'Maschile'),
        new Squadra('Squadra 3', 'Verde', 'Maschile'),
        new Squadra('Squadra 4', 'Giallo', 'Maschile'),
    ];

    $response->getBody()->write($squadre);
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});


$app->get('/squadre/{id}', function (Request $request, Response $response, array $args) {
    $squadra = new Squadra('Squadra ' . $args['id'], 'Colore ' . $args['id'], 'Genere ' . $args['id']);

    $response->getBody()->write(json_encode($squadra));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});


$app->get('/torneo/{codice}/partite', function (Request $request, Response $response, array $args) {
    $torneo = new Torneo(
        'Torneo di Calcio',
        $args['codice'],
        '2023-04-01',
        'Stadio XYZ',
        [
            new Partita(1, new Squadra('Squadra 1', 'Rosso', 'Maschile'), new Squadra('Squadra 2', 'Blu', 'Maschile'), 2, 1),
            new Partita(2, new Squadra('Squadra 3', 'Verde', 'Maschile'), new Squadra('Squadra 4', 'Giallo', 'Maschile'), 0, 2),
        ]
    );

    $response->getBody()->write(json_encode($torneo->getPartite()));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});


$app->get('/torneo/{codice}/partite/disputate', function (Request $request, Response $response, array $args) {
   
});


$app->get('/torneo/{codice}/partite/da_disputare', function (Request $request, Response $response, array $args) {
 
});


$app->get('/torneo/{codice}/partite/{id_partita}', function (Request $request, Response $response, array $args) {
    $torneo = new Torneo(
        'Torneo di Calcio',
        $args['codice'],
        '2023-04-01',
        'Stadio XYZ',
        [
            new Partita($args['id_partita'], new Squadra('Squadra 1', 'Rosso', 'Maschile'), new Squadra('Squadra 2', 'Blu', 'Maschile'), 2, 1),
        ]
    );

    $response->getBody()->write(json_encode($torneo->getPartite()->filter(
        fn ($partita) => $partita->getId() == $args['id_partita']
    )[0]));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});


$app->get('/torneo/{codice}/concluso', function (Request $request, Response $response, array $args) {
    
});


$app->get('/torneo/{codice}/classifica', function (Request $request, Response $response, array $args) {

});

$app->run();

?>