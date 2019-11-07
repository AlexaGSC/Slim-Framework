<?php
namespace Middleware;

use Psr\Container\ContainerInterface as Container,
Psr\Http\Message\ServerRequestInterface as request,
Psr\Http\Message\ResponseInterface as Response;

class Phrase_Middleware {

    public function __invoke (Request $rRequest, Response $rResponse, $cNext) {
        
        $rResponse -> getBody() -> write('BEFORE ');

        $rResponse = $cNext($rRequest, $rResponse);

        $rResponse -> getBody() -> write(' AFTER');
        
        return $rResponse;
    }
}