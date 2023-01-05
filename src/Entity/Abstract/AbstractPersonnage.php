<?php

namespace App\Entity\Abstract;

abstract class AbstractPersonnage{

    protected string $name;
    protected bool $enVie;
    protected bool $estReveille;
    protected bool $enCouple;
    protected string $marieAvec;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->enVie = true;
        $this->estReveille = true;
        $this->enCouple = false;
    }

 
    public function getName(): ?string
    {
        return $this->name;
    }
 
    public function getenVie(): ?bool
    {
        return $this->enVie;
    }
 
    public function getenCouple(): ?bool
    {
        return $this->enCouple;
    }
 
    public function getestReveille(): ?bool
    {
        return $this->estReveille;
    }
}