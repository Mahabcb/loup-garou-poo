<?php

namespace App\Controller;

use Exception;
use App\Entity\Chasseur;
use App\Entity\Abstract\AbstractPersonnage;
use App\Controller\Abstract\AbstractController;

class ChasseurController extends AbstractController{

    private $chasseur;
    public function __construct(Chasseur $chasseur)
    {
        $this->chasseur = $chasseur;
    }
    
    public function tuerParChasseur(AbstractPersonnage $vicime) : string
    {
        // on doit vérifier qu'il est mort
        // il peut tuer que s'il est mort
        if($this->enVie === false){
            // on veut tuer la victime 
            $vicime->enVie = false;
        }
        throw new Exception("Tu n'est pas mort, tu ne peux pas tuer quelqu'un !");
    }
}