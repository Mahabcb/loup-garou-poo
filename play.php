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

$sorciereController = new LaSorciereController($sorciere);
$sorciereController->tuer();

// debut : tout le monde est réveillé
// on va voter pour le maire
// tout le monde s'endort
// les loup garou se réveillent
// ils décident de tuer quelqu'un [mort1, mort2, mort3]
// ils se rendorment

// cupidon se réveille
// il va choisir deux personnes qui vont se marier
// la petite fille qui voit

// sorciere elle se réveille et décide de ranimer la personne morte ou pas
// il faut récupérer la personne morte par les loup garou
// que cette function lui permette de décider si elle résucite ou pas
// elle se rendort

// on reveille tout le monde
// on annonce les personnes décédées
// on accuse les loup garou


