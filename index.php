<?php
//TODO S'amuser avec la barre de recherche et des requete mysql LIKE
session_start();
require_once("modele/init_connexion_bdd.php");


if (!isset($_SESSION["id_user"])) {
    //require("Vue/login.php");
    // On tombe sur la page d'accueil
    header("Location: https://dohome.cf/controller/traitement_connexion.php");
    echo 'pas de session';
} else {
    echo 'y\'a une session';
    header("Location: https://dohome.cf/controller/dashboard.php");
}