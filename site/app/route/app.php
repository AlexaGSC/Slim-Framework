<?php
$aApp->get ('/frase', Phrases_Controller::Class . ':randomPhrase');
$aApp->get ('/todo', Phrases_Controller::Class . ':allPhrases');
?>
