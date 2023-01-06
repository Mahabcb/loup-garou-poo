<?php

namespace App\Controller;

use Exception;
use App\Entity\LaSorciere;
use App\Interface\KillerInterface;
use App\Entity\Abstract\AbstractPersonnage;
use App\Controller\Abstract\AbstractController;

/**
 * comme elle va implémenter l'interface KillerInterface
 * la class doit obligatoirement implémenter la fonction tuer
 * quand on joue la sorciere on a un bouton kill
 */
final class LaSorciereController extends AbstractController implements KillerInterface{

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
    // on vérifie qu'elle n'a pas déjà utilisé son pouvoir
    public function tuer(?AbstractPersonnage $victime = null) // chassseur sorciere et loup garou
    {
        if(isset($victime) and $victime !== $this and $this->enVie()){ // on verifie que y a une victime, et que la victime n'est pas le tueur et qu'on est en vie
                $victime->enVie = false; // on tue la victime
                $this->tabMorts[] = $victime; // on ajoute la victime au tableau des morts
                // cas du partenaire
                if($victime->getPartenaire() !== null){ // si la victime a un partenaire
                    $this->tuerLePartenaire($victime); // on tue le partenaire
                }
            throw new Exception("Si tu es mort tu ne peux pas tuer quelqu'un, et tu ne peux pas non plus de tuer !" . PHP_EOL);
        }
        return null;
    }

    
}