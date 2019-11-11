<?php
use Psr\Http\Message\ServerRequestInterface as Request,
Psr\Http\Message\ResponseInterface as Response;

/*$aApp->get ('/frase', Phrases_Controller::Class . ':randomPhrase');
$aApp->get ('/todo', Phrases_Controller::Class . ':allPhrases');*/

$aApp -> get('/', function(Request $request, Response $response){

    return $this-> view-> render($response, 'pokemon.html.twig', []);
});


$aApp -> get('/middleware', Phrase_Controller::Class . ':randomPhrase') -> add (new \Middleware\Phrase_Middleware()); 

$aApp -> get('/pokemon', Pokemon_Controller::Class . ':randomPokemon'); //Pokemon_Controller es el alias que declaramos en el provider.
?>
