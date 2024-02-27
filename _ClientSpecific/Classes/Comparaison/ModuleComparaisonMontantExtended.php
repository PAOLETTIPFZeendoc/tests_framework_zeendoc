<?php

require_once "Module_1/ModuleComparaisonMontant.php";

use Module_1\Controller\Shared\ControllerShared;
use ModuleComparaisonMontant\ModuleComparaisonMontant;

class ModuleComparaisonMontantExtended extends ModuleComparaisonMontant
{
    public function __construct()
    {
        $this->controller = new ControllerShared();
    }


    // public function exec()
    // {

    //     parent::exec();
    // }

    // public function step2()
    // {
    //     echo "STEP_2 redefined\n";
    // }
}
