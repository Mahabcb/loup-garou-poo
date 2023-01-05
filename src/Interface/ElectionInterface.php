<?php

namespace App\Interface;
use App\Entity\Abstract\AbstractPersonnage;

interface ElectionInterface{
    public function ElireLeMaire(AbstractPersonnage $maire) : string;
}


/**
 * Quand on écrit des signature ; veillez à toujours précisez le retour 
 */