<?php

namespace Tests;

use App\Entity\LoupGarou;
use PHPUnit\Framework\TestCase;
use App\Controller\LoupGarouController;
use App\Entity\Abstract\AbstractPersonnage;

class LoupGarouControllerTest extends TestCase
{
    public function testTuer()
    {
        $loup = new LoupGarou();
        $loupGarouController = new LoupGarouController($loup);
        
        $this->assertEquals($loup->getName(), "Loup Garou");

        $victime = $this->getMockForAbstractClass(AbstractPersonnage::class);
        $loupGarouController->tuer($victime);
        $this->assertFalse($victime->enVie());
    }

}