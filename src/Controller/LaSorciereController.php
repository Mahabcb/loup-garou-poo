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
        parent::__construct();
        $this->laSorciere = $laSorciere;
    }

    public function ressussiter(AbstractPersonnage $mort)
    {
        if($mort->getPartenaire()) {
            $mort->enVie = true;
            $mort->getPartenaire()->enVie = true;
            print_r('Le joueur ' . $mort->getName() . " et " . $mort->getPartenaire()->getName().  ' ont ressuscité!!!' . PHP_EOL);
            $this->tabMorts = array_diff($this->tabMorts, [$mort, $mort->getPartenaire()]);
        }else{
            $mort->enVie = true;
            print_r('Le joueur ' . $mort->getName() . ' a ressuscité!!!' . PHP_EOL);
            $this->tabMorts = array_diff($this->tabMorts, [$mort]);
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