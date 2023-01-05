<?php

namespace App\Controller\Abstract;

use Exception;
use App\Entity\Abstract\AbstractPersonnage;

abstract class AbstractController extends AbstractPersonnage 
{
    public function dormir() : string
    {
        return "Tout le monde dort";
    }

    public function ElireLeMaire(AbstractPersonnage $maire) : string
    {
        return $maire->getName();
    }

    public function accuser(AbstractPersonnage $accuse) : ?string 
    {
       if($this->enVie === true){
           return $accuse->getName();
       }
        throw new Exception("Tu n'est pas mort, tu ne peux pas accuser quelqu'un !");
        exit();
    }

    public function tuer(AbstractPersonnage $victime)
    {
        if($this->enVie === true){
            $victime->enVie = false;
            $partenaire = $victime->getPartenaire();
            $partenaire->enVie = false;
        }
    }
}