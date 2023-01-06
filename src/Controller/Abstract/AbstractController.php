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
        throw new Exception("Tu es mort, tu ne peux pas accuser quelqu'un !");
        exit();
    }

    /**
     * On définit le parametre victime par défaut = null
     * on part du principe ou la sorciere utilise cette méthode
     * et donc n'est pas obligé de tuer quelqu'un 
     */

     // est ce qu'on implémente une interface pour la méthode tuer 
     // est ce qu'on l'abstrait et on aura juste une signature de fonction
    public function tuer(?AbstractPersonnage $victime = null) // chassseur sorciere et loup garou
    {
        // on verifie si l'objet en cours est une 
        //instance de la sorciere
        // si oui alors $victime peut etre égale a null
        
        // if(is_a($this, LaSorciereController::class)){

        // }
        if(isset($victime)){
            if($this->enVie === true){ // on vérifie que le tueur est en vie
                $victime->enVie = false; // on tue la victime
                if($victime->getPartenaire() !== null){ // si la victime a un partenaire
                    $partenaire = $victime->getPartenaire();
                    $partenaire->enVie = false;
                $this->tabMorts[] = $victime; // on ajoute la victime au tableau des morts
                $this->tabMorts[] = $victime->getPartenaire();
                }
                $this->tabMorts[] = $victime; // on ajoute la victime au tableau des morts

            }
            throw new Exception("Tu es mort, tu ne peux pas tuer quelqu'un !");
        }
        return null;
    }
}