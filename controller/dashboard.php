<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine Poussot
 * Date: 02/06/2017
 * Time: 10:53
 */
if (!isset($_SESSION)) {
    session_start();
}
include_once '../modele/init_connexion_bdd.php';
include ('../modele/utilisateurs.php');

if (isAdmin($bdd, $_SESSION['id_user'])) {
    include("../vue/dashboard_backoffice.php");
} else {
    include '../vue/dashboard.php';
}
