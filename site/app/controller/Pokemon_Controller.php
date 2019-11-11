<?php
namespace Controller;

use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as request,
    Psr\Http\Message\ResponseInterface as Response;

use Model\Pokemon_Model;

class Pokemon_Controller {
    protected $cContainer;
    public function __construct(Container $cContainer) {$this -> cContainer = $cContainer;}

    public function  randomPokemon(Request $rRequest, Response $rResponse){
       
        
    $aConfig = $this -> cContainer -> get('config');
    $aData = ($aConfig['db']['driver'] == 'json') ? json_decode(file_get_contents($this -> cContainer -> db['path'] . '/' . $this -> cContainer -> db['filename']), true) : $this -> cContainer -> db -> table('pokemons') -> get();

        d($aData);
    }

}