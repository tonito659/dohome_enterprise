<?php
if (!isset($_SESSION)) {session_start();}
include ('../modele/utilisateurs.php');
//var_dump($_SESSION['Mail']);
$infoUser= takeInfoUser($dbh,$_SESSION['Mail']);
//var_dump($infoUser);
header('location: ../Vue/mon_profil.php');




























?>



