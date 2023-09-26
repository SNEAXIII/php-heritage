<?php
require "./vendor/autoload.php";

$entreprise = new \App\Entreprise("Flowbird", "Besançon");

$chefservice = new \App\ChefService("Jean", "Sacripan", 55, "HelpDesk");;
$employe = new \App\Employe("Jean", "Sacripan", 55);
$patron = new \App\Patron("Jean", "Sacripan", 55, "RS6");
$patron2 = new \App\Patron("Jean", "Sacripannette", 55, "RS7");
$patron3 = new \App\Patron("Jean", "Sacripannette", 55, "RS7");


$entreprise->addEmploye($chefservice);
$entreprise->addEmploye($employe);
$entreprise->addEmploye($patron2);
$entreprise->addEmploye($patron3);
$entreprise->addEmploye($patron);

//$entreprise->presenterEmploye();
var_dump($entreprise->findAllByStatus());