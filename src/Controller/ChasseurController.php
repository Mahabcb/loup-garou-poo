<?php

namespace App\Controller;

use Exception;
use App\Entity\Chasseur;
use App\Interface\KillerInterface;
use App\Entity\Abstract\AbstractPersonnage;
use App\Controller\Abstract\AbstractController;

class ChasseurController extends AbstractController implements KillerInterface{

    private $chasseur;
    public function __construct(Chasseur $chasseur)
    {
        $this->chasseur = $chasseur;
    }

    /**
     * on vérifie que le chasseur est mort
     */
    public function tuer(AbstractPersonnage $victime)
    {
        if($this->enVie() === false and $victime->enVie() === true and isset($victime)){
            $this->cimetiere($victime);
        }
        if($victime->getPartenaire() !== null){ 
            return $this->tuerLePartenaire($victime);
        }
    }
}
