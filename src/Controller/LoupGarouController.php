<?php

namespace App\Controller;

use App\Controller\Abstract\AbstractController;
use App\Entity\LoupGarou;

class LoupGarouController extends AbstractController{

    private $loupGarou;
    public function __construct(LoupGarou $loupGarou)
    {
        $this->loupGarou = $loupGarou;
    }
}