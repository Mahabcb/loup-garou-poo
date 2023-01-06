<?php

namespace App\Controller\Abstract;

use Exception;
use App\Entity\Abstract\AbstractPersonnage;

abstract class AbstractController extends AbstractPersonnage 
{
    protected array $tabMorts;
    protected array $bancsDesAccuses;

    public function __construct()
    {
        parent::__construct();
        $this->bancsDesAccuses = [];
        $this->tabMorts = [];
    }

    public function getTabMorts() : array
    {
        return $this->tabMorts;
    }

    public function dormir() : string
    {
        return print_r('Tout le monde dort'. PHP_EOL);
    }

    public function ElireLeMaire(AbstractPersonnage $maire) : string
    {
        return $maire->getName();
    }

    public function seReveiller(AbstractPersonnage $abstractPersonnage) : string
    {
        return print_r($abstractPersonnage->getName() . ' se réveille'. PHP_EOL);
    }

    public function accuser(AbstractPersonnage $accuse) : ?string 
    {
       if($this->enVie()){
            $this->bancsDesAccuses[] = $accuse;
            return "Tu as bien été accusé";
       }
        throw new Exception("Tu es mort, tu ne peux pas accuser quelqu'un !");
        exit();
    }

    protected function tuerLePartenaire(AbstractPersonnage $victime)
    {
        $partenaire = $victime->getPartenaire();
        $this->cimetiere($partenaire); // on ajoute le partenaire de la victime au tableau des morts
    }

    protected function cimetiere(AbstractPersonnage $victime) 
    {
        $victime->enVie = false;
        $this->tabMorts[] = $victime;
        return $this->tabMorts;
    }

    protected function getPersonnageAccuse(array $bancsDesAccuses)
    {
        $bancsDesAccuses = $this->bancsDesAccuses;
        return array_search(max(array_count_values($bancsDesAccuses)), $bancsDesAccuses);
    }
}


