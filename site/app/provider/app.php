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

