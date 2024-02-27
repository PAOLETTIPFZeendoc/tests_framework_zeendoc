<?php
require_once "autoload.php";
require_once "Classes/Comparaison/ModuleComparaisonMontantExtended.php";
require_once "Module_1/ModuleComparaisonMontant.php";

require_once dirname(__DIR__) . "/Module_1/index.php";
$test = new ModuleComparaisonMontantExtended();

$test->exec();
