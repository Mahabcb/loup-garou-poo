<?php

use App\Entity\Cupidon;
use App\Entity\Chasseur;
use App\Entity\LaSorciere;
use App\Controller\CupidonController;
use App\Controller\ChasseurController;
use App\Controller\LaSorciereController;

require_once __DIR__ . '/vendor/autoload.php';

$chasseur = new Chasseur();
$chasseurController = new ChasseurController($chasseur);

$sorciere = new LaSorciere();
$sorciereController = new LaSorciereController($sorciere);
// début du jeu
$cupidon = new Cupidon();
$cupidonController = new CupidonController($cupidon);
dump($cupidonController->marier($chasseur, $sorciere));

