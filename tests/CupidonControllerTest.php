<?php

namespace Tests;

use App\Entity\Cupidon;
use PHPUnit\Framework\TestCase;
use App\Controller\CupidonController;
use App\Entity\Abstract\AbstractPersonnage;

class CupidonControllerTest extends TestCase{

    public function testMarier()
    {
        $cupidon = new Cupidon();
        $cupidonController = new CupidonController($cupidon);

        $epoux1 = $this->getMockForAbstractClass(AbstractPersonnage::class);
        $epoux2 = $this->getMockForAbstractClass(AbstractPersonnage::class);
        
        $cupidonController->marier($epoux1, $epoux2);
        $this->assertEquals($epoux1->getPartenaire(), $epoux2);

    }

}