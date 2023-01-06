<?php

namespace App\Controller;

use App\Entity\Cupidon;
use App\Interface\KillerInterface;
use App\Entity\Abstract\AbstractPersonnage;
use App\Controller\Abstract\AbstractController;

class CupidonController extends AbstractController implements KillerInterface
{

    private $cupidon;
    public function __construct(Cupidon $cupidon)
    {
        $this->cupidon = $cupidon;
    }

    public function ElireLeMaire(AbstractPersonnage $maire) : string
    {
        return $maire->getName();
    }

    public function marier(AbstractPersonnage $personnage1, AbstractPersonnage $personnage2) : string
    {
        if($personnage1->enVie and $personnage2->enVie) {
            $personnage1->setEnCouple($personnage2);
            $personnage2->setEnCouple($personnage1);
            return print_r($personnage1->getName() . " et " . $personnage2->getName() . " sont mariés" . PHP_EOL);
        }
    }

    public function tuer(AbstractPersonnage $victime) 
    {
        $victime->enVie = false;
        $this->tabMorts[] = $victime;
    }
}