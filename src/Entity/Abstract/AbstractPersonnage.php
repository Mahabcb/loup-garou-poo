<?php

namespace App\Entity\Abstract;

abstract class AbstractPersonnage{

    protected string $name;
    protected bool $enVie;
    protected bool $estReveille;
    protected AbstractPersonnage $enCouple;
    // un tableau vide / a chaque fois qu'une personne 
    // meurt on appelle ce tableau
    // et on rajoute la personne qui est morte dedans

    public function __construct()
    {
        $this->enVie = true;
        $this->estReveille = true;
    }

 
    public function getName(): ?string
    {
        return $this->name;
    }
 
    public function getenVie(): ?bool
    {
        return $this->enVie;
    }
 
    public function getestReveille(): ?bool
    {
        return $this->estReveille;
    }

    public function getPartenaire(): ?AbstractPersonnage
    {
        return $this->enCouple;
    }

    /**
     * Set the value of enCouple
     *
     * @return  self
     */ 
    public function setEnCouple(AbstractPersonnage $abstractPersonnage) : self
    {
        $this->enCouple = $abstractPersonnage;

        return $this;
    }

    protected function enVie() : bool
    {
        return $this->enVie;
    }
}