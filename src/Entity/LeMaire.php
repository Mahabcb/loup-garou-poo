<?php

namespace App\Entity;

use App\Entity\Abstract\AbstractPersonnage;

final class LeMaire extends AbstractPersonnage
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "Le Maire";
    }
}