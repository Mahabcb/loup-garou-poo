<?php

namespace App\Controller;

use App\Entity\Voyante;
use App\Controller\Abstract\AbstractController;

class VoyanteControlller extends AbstractController{

    private $voyante;
    public function __construct(Voyante $voyante)
    {
        $this->voyante = $voyante;
    }
}