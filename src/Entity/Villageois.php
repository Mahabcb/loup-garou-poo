<?php

namespace App\Entity;

use App\Entity\Abstract\AbstractPersonnage;

final class Villageois extends AbstractPersonnage {

    public function __construct()
    {
        parent::__construct();
        $this->name = "Un Villageois";
    }
}