<?php

namespace App\Entity;

use App\Entity\Abstract\AbstractPersonnage;

final class LoupGarou extends AbstractPersonnage
{

    public function __construct()
    {
        parent::__construct();
        $this->name = "Loup Garou";
    }
}