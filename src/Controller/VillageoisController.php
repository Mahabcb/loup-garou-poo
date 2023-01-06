<?php

namespace App\Controller;

use App\Controller\Abstract\AbstractController;
use App\Entity\Villageois;
use App\Interface\ElectionInterface;

final class VillageoisController extends AbstractController implements ElectionInterface{

    private $villageois;
    public function __construct(Villageois $villageois)
    {
        $this->villageois = $villageois;
    }
}