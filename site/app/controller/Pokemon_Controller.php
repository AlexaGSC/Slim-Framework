<?php
namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as request,
    Psr\Http\Message\ResponseInterface as Response;

class Pokemon_Controller {
    protected $cContainer;
    public function __construct(Container $cContainer) {$this -> cContainer = $cContainer;}

    public function  randomPokemon(Request $rRequest, Response $rResponse){
       
        
         $filedir = file_get_contents("../database/pokemon.json");
         $pokemon = json_decode($filedir, true);
         d($pokemon);
    }

}