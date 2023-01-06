<?php

namespace App\Controller;

use App\Controller\Abstract\AbstractController;
use App\Entity\Abstract\AbstractPersonnage;
use App\Entity\LoupGarou;

final class LoupGarouController extends AbstractController{

    private $loupGarou;
    public function __construct(LoupGarou $loupGarou)
    {
        $this->loupGarou = $loupGarou;
    }

    public function voterLaMort(AbstractPersonnage $personnage)
    {
        $this->$personnage->enVie(false);
    }
}