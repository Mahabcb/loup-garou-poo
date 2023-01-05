<?php

use App\Entity\Chasseur;

require_once __DIR__ . '/vendor/autoload.php';
// début du jeu

$chasseur = new Chasseur("Jean");

$chasseur->ElireLeMaire($chasseur);

// tout le monde s'endort
