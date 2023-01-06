<?php

namespace App\Entity;

use App\Entity\Abstract\AbstractPersonnage;

final class LaSorciere extends AbstractPersonnage
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "La Sorcière";
    }
}