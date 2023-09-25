<?php
require "./vendor/autoload.php";

$employe = new \App\Employe("Jean","Sacripan",55);
echo $employe->presenter();