<?php

namespace App\Controller;

use Exception;
use App\Entity\LoupGarou;
use App\Interface\KillerInterface;
use App\Entity\Abstract\AbstractPersonnage;
use App\Controller\Abstract\AbstractController;

final class LoupGarouController extends AbstractController implements KillerInterface{

    private $loupGarou;
    public function __construct(LoupGarou $loupGarou)
    {
        $this->loupGarou = $loupGarou;
    }

    
    public function tuer(AbstractPersonnage $victime)
    {
        if(isset($victime) and $victime !== $this and $victime->enVie()){ // on verifie que y a une victime, et que la victime n'est pas le tueur et qu'on est en vie
        $this->cimetiere($victime);            // cas du partenaire
            if($victime->getPartenaire() !== null){ // si la victime a un partenaire
                $this->tuerLePartenaire($victime); // on tue le partenaire
                return print_r($victime->getName() . " et son partenaire " . $victime->getPartenaire()->getName() ." sont morts !" . PHP_EOL);
            }else{
                throw new Exception("Si tu es mort tu ne peux pas tuer quelqu'un, et tu ne peux pas non plus de tuer !" . PHP_EOL);
            }
        }
    }
}