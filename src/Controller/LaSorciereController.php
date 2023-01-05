<?php

namespace App\Controller;

use App\Entity\LaSorciere;
use App\Controller\Abstract\AbstractController;

class LaSorciereController extends AbstractController{

    private $laSorciere;
    public function __construct(LaSorciere $laSorciere)
    {
        $this->laSorciere = $laSorciere;
    }
}