<?php
require 'class/Session.php';

$session = new Session();
$session->nom = 'Toomz';
$session->prenom = 'Eugène';
var_dump($session);

var_dump(isset($session->voiture));
