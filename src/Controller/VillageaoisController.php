<?php

namespace App\Controller;

use App\Controller\Abstract\AbstractController;
use App\Entity\Villageois;

final class VillageoisController extends AbstractController{

    private $villageois;
    public function __construct(Villageois $villageois)
    {
        $this->villageois = $villageois;
    }
}