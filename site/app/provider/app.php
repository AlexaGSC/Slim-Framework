<?php
$aContainer = $aApp -> getContainer();

$aContainer['Phrases_Controller'] = function ($cContainer) {return new \Controller\Phrases_Controller($cContainer);} ;