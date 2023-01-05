<?php

namespace App\Entity\Abstract;

abstract class AbstractPersonnage{

    protected string $name;
    protected bool $enVie;
    protected bool $estReveille;
    protected AbstractPersonnage $enCouple;

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
}