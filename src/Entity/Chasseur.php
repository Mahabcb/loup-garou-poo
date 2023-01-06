<?php

namespace App\Entity;

use App\Interface\ElectionInterface;
use App\Entity\Abstract\AbstractPersonnage;
use Exception;

class Chasseur extends AbstractPersonnage
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "Chasseur";
    }

    
}