<?php

use App\Employe;
use App\ChefService;
use App\Patron;

require "./vendor/autoload.php";

function line():void
{
    echo "-------------------------------------------------------------\n";
}

function test_class(Employe $employe): void
{
    if ($employe instanceof Patron) {
        echo "Patron\n";
    }
    if ($employe instanceof ChefService) {
        echo "ChefService\n";
    }
    if ($employe instanceof Employe) {
        echo "Employe\n";
    }
}

$patron = new Patron("Jean", "Sacripan", 55, "RS6");
$chefservice = new ChefService("Jean", "Sacripan", 55, "HelpDesk");;
$employe = new Employe("Jean", "Sacripan", 55);

line();
echo "classe Patron\n";
test_class($patron);

line();
echo "classe ChefService\n";
test_class($chefservice);

line();
echo "classe Employe\n";
test_class($employe);
