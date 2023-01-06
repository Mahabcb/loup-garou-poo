<?php

namespace App\Entity;

use App\Controller\Abstract\AbstractController;
use App\Entity\Abstract\AbstractPersonnage;

final class Cupidon extends AbstractPersonnage
{
    
    public function __construct()
    {
        parent::__construct();
        $this->name = "Cupidon";
    }
    
}