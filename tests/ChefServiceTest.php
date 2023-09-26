<?php
require "./vendor/autoload.php";
$chefService = new \App\ChefService("Jean", "Sacripan", 55, "HelpDesk");
echo "{$chefService->presenter()}";