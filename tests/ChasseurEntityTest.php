<?php

namespace Tests;

use App\Entity\Chasseur;
use PHPUnit\Framework\TestCase;

class ChasseurEntityTest extends TestCase
{
    public function testName()
    {
        $chasseur = new Chasseur();
        $this->assertEquals('Chasseur', $chasseur->getName());
    }

    public function testMethod()
    {
        $chasseur = new Chasseur();
        $this->assertNull($chasseur->getPartenaire());
        $this->assertTrue($chasseur->enVie());
        $this->assertTrue($chasseur->getestReveille());
    }
}