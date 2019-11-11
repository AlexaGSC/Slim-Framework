<?php
$aContainer = $aApp -> getContainer();
// REGISTER COMPONENT ON CONTAINER.
$aContainer['view'] = function ($cContainer) {
  $aConfig = $cContainer -> get('config')['view'];
  $vViews = new \Slim\Views\Twig($aConfig['path'], $aConfig['twig']);
  $vViews -> addExtension(new \Slim\Views\TwigExtension(
    $cContainer -> router,
    $cContainer -> request -> getUri()
  ));
  return $vViews;

  };


  $aContainer['Phrase_Controller'] = function ($cContainer) {
      return new \Controller\Phrase_Controller($cContainer);
  };

$aContainer['Pokemon_Controller'] = function ($cContainer) { //Aqui Pokemon_Controller es un Alias que le ponemos al controlador.
  return new \Controller\Pokemon_Controller($cContainer);
};

// Conexión con la base de datos.

$aContainer['db'] = function ($cContainer) {

  $mManager = new \Illuminate\Database\Capsule\Manager;
  $aConfig = $cContainer -> get('config')['db'];
  
  if ($aConfig['driver'] != 'mysql') return $aConfig[$aConfig['driver']];

  $mManager -> addConnection($aConfig[$aConfig['driver']]);
  $mManager -> setAsGlobal();
  $mManager -> bootEloquent();
  return $mManager;
};