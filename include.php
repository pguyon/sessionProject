<?php
require 'class/Session.php';

$session = new Session();
$session->nom = 'Toomz';
$session->prenom = 'Eugène';
$session->age = 175;
var_dump($session);

echo 'je m\'appel ' . $session->prenom . ' et j\'ai ' . $session->age . ' ans';

var_dump(isset($session->voiture));
