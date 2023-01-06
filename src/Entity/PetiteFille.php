<?php

namespace App\Entity;

use App\Entity\Abstract\AbstractPersonnage;

final class PetiteFille extends AbstractPersonnage {

    public function __construct()
    {
        parent::__construct();
        $this->name = "La Petite Fille";
    }
}