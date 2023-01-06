<?php

use App\Entity\Cupidon;
use App\Entity\LeMaire;
use App\Entity\Voyante;
use App\Entity\Chasseur;
use App\Entity\LoupGarou;
use App\Entity\LaSorciere;
use App\Controller\CupidonController;
use App\Controller\LeMaireController;
use App\Controller\VoyanteController;
use App\Controller\ChasseurController;
use App\Controller\LoupGarouController;
use App\Controller\LaSorciereController;

require_once __DIR__ . '/vendor/autoload.php';

$chasseur = new Chasseur();
$chasseurController = new ChasseurController($chasseur);

$sorciere = new LaSorciere();
$sorciereController = new LaSorciereController($sorciere);

$cupidon = new Cupidon();
$cupidonController = new CupidonController($cupidon);

$loupGarou = new LoupGarou();
$loupGarouController = new LoupGarouController($loupGarou);

$loupGarou2 = new LoupGarou();
$loupGarouController2 = new LoupGarouController($loupGarou2);

$voyante = new Voyante();
$voyanteController = new VoyanteController($voyante);

$maire = new LeMaire();
$maireController = new LeMaireController($maire);


$chasseurController->dormir(); // a modifer

$loupGarouController->seReveiller($loupGarou); // a modifer
$loupGarouController2->seReveiller($loupGarou2); // a modifer

$cupidonController->seReveiller($cupidon); // a modifer
$cupidonController->marier($chasseur, $voyante); // a modifer

$loupGarouController->tuer($chasseur); // a modifer
$cupidonController->tuer($chasseur); // a modifer

$voyanteController->voirLaCarte($loupGarou); // a modifer

$sorciereController->ressussiter($chasseur); // a modifer



