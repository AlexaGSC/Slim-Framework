<?php
use Psr\Http\Message\ServerRequestInterface as Request,
Psr\Http\Message\ResponseInterface as Response;

/*$aApp->get ('/frase', Phrases_Controller::Class . ':randomPhrase');
$aApp->get ('/todo', Phrases_Controller::Class . ':allPhrases');*/

$aApp -> get('/', function(Request $request, Response $response){

    return $this-> view-> render($response, 'index.html.twig', []);
});
?>
