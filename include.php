<?php
require 'class/Session.php';

$session = new Session();
$session->nom = 'Black';
$session->prenom = 'Widow';
$session->age = 31;
$session->adresse = "Marvel";
var_dump($session);

echo 'je m\'appel ' . $session->prenom . ' et j\'ai ' . $session->age . ' ans';

var_dump(isset($session->voiture));
unset($session->age);
var_dump($session);
