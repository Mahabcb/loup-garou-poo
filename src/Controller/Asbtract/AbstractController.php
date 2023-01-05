<?php

namespace App\Entity\Abstract;

use Exception;
use App\Entity\Abstract\AbstractPersonnage;

abstract class AbstractController extends AbstractPersonnage 
{
    public function dormir() : string
    {
        return "Tout le monde dort";
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
        // si on est vivant on peut tuer un personnage
        // ca aura pour consequence que $victime->enVie = false
        if($this->enVie === true){
            $victime->enVie = false;
        }
    }
}