<?php
namespace Controller;
 
use Psr\Container\ContainerInterface as Container,
    Psr\Http\Message\ServerRequestInterface as request,
    Psr\Http\Message\ResponseInterface as Response;

class Phrases_Controller {
    protected $cContainer;
    public function __construct(Container $cContainer) {$this -> cContainer = $cContainer;}

    public function randomPhrase(Request $request, Response $response){
        $filedir  = "../database/frases.txt";

# Obtiene el contenido de texto del fichero y lo desglosa en un array
$getFile = file($filedir);

# Genera un número aleatorio, midiendo la totalidad de frases que hay
$getMAX = count($getFile);
$random = mt_rand(0, $getMAX);
return $getFile[$random];

    }
    public function allPhrases(Request $request, Response $response){
        $filedir  = "../database/frases.txt";

        # Obtiene el contenido de texto del fichero y lo desglosa en un array
        $getFile = file($filedir);
         foreach ($getFile as $phrases) {
             echo "<br>$phrases";
         };
         return;


    }
}


