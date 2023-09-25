<?php
require "./vendor/autoload.php";
$patron = new \App\Patron("Jean","Sacripan",55,"RS6");
echo "{$patron->presenter()} {$patron->seDeplace()}";