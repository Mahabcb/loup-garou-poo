<?php

namespace App\Controller;

use App\Entity\Voyante;
use App\Controller\Abstract\AbstractController;
use App\Entity\Abstract\AbstractPersonnage;

final class VoyanteController extends AbstractController
{

    private $voyante;
    public function __construct(Voyante $voyante)
    {
        $this->voyante = $voyante;
    }

    public function voirLaCarte(AbstractPersonnage $personnage)
    {
        return print_r("J'ai vu la carte de " . $personnage->getName(). PHP_EOL);
    }
}