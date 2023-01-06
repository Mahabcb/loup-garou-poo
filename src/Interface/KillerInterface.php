<?php

namespace App\Interface;

use App\Entity\Abstract\AbstractPersonnage;

interface KillerInterface
{
    public function tuer(AbstractPersonnage $victime);
}