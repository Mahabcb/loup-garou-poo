<?php

namespace App\Entity;

use App\Interface\ElectionInterface;
use App\Entity\Abstract\AbstractPersonnage;
use Exception;

class Chasseur extends AbstractPersonnage implements ElectionInterface{

    public function ElireLeMaire(AbstractPersonnage $maire) : string
    {
        return $maire->getName();
    }

    public function tuer(string $name) : string
    {
        if($this->enVie === false){
            return $name;
        }
        throw new Exception("Tu n'est pas mort, tu ne peux pas tuer quelqu'un !");
    }
}