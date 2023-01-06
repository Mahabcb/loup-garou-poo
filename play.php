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

// debut : tout le monde est réveillé
// on va voter pour le maire
// tout le monde s'endort
// les loup garou se réveillent
// ils décident de tuer quelqu'un
// ils se rendorment
// elle se réveille et décide de ranimer la personne morte ou pas
// cupidon se réveille
// il va choisir deux personnes qui vont se marier
// la petite fille qui voit
// on reveille tout le monde
// on annonce les personnes décédées
// on accuse les loup garou


