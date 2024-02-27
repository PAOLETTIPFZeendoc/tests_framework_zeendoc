<?php

namespace ModuleComparaisonMontant;

use Module_1\Controller\Abstracts\Controller1;

class ModuleComparaisonMontant
{
    public Controller1 $controller;
    public function exec()
    {
        $this->step1();
        $this->step2();
        $this->step3();
    }

    protected function step1()
    {

        echo "STEP_1\n";
    }

    protected function step2()
    {

        echo "STEP_2\n";
    }

    protected function step3()
    {

        echo "STEP_3\n";
    }
}
