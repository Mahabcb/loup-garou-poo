<?php

namespace App\Controller;

use App\Entity\PetiteFille;
use App\Controller\Abstract\AbstractController;

class PetiteFilleController extends AbstractController{

    private $petiteFille;
    public function __construct(PetiteFille $petiteFille)
    {
        $this->petiteFille = $petiteFille;
    }
}