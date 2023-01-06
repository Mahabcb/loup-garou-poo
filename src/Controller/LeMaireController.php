<?php

namespace App\Controller;

use App\Entity\LeMaire;
use App\Controller\Abstract\AbstractController;

class LeMaireController extends AbstractController{

    private $leMaire;
    public function __construct(LeMaire $leMaire)
    {
        $this->leMaire = $leMaire;
    }
}