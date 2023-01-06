<?php

namespace App\Controller;

use App\Entity\LaSorciere;
use App\Controller\Abstract\AbstractController;
use App\Entity\Abstract\AbstractPersonnage;

class LaSorciereController extends AbstractController{

    private $laSorciere;
    public function __construct(LaSorciere $laSorciere)
    {
        $this->laSorciere = $laSorciere;
    }

    public function ressussiter(AbstractPersonnage $dernierMort)
    {
        // on réssussite une personne morte obligatoirement
        // si la sorciere décide de réssusiter elle doit
        // réssussiter la derniere personnes du tableau des morts
        $dernierMort = end($this->tabMorts);
        
        if($dernierMort->getPartenaire() !== null){
            $dernierMort->enVie = true;
            $dernierMort->getPartenaire()->enVie = true;
            print_r('Le joueur ' . $dernierMort->getNom() . "," . $dernierMort->getPartenaire()->getNom().  ' est ressuscité!!!' . PHP_EOL);
            $this->tabMorts = array_diff($this->tabMorts, [$dernierMort, $dernierMort->getPartenaire()]);
        }else{
            $dernierMort->enVie = true;
            print_r('Le joueur ' . $dernierMort->getPartenaire()->name . ' est ressuscité!!!' . PHP_EOL);
            $this->tabMorts = array_diff($this->tabMorts, [$dernierMort]);
            // TODO : on teste aussi avec array_splice($this->tabMorts, 0, -2)
        }
        
    }
}