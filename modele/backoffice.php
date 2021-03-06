<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 04/06/2017
 * Time: 17:40
 */

include 'init_connexion_bdd.php';


function isAdmin(PDO $bdd, $id)
{
    $reponse = $bdd->prepare('SELECT Is_admin FROM user WHERE id_user=\'' . $id . '\'');
    $reponse->execute();
    $affiche = $reponse->fetch();
    if ($affiche['Is_admin'] == 1) {
        return true;
    } else {
        return false;
    }
}

function getUserList(PDO $bdd)
{
    // ICI ON RETOURNE DANS $data LES PIECES DE L'UTILISATEUR POUR SA MAISON

    $query = "SELECT id_user,Nom,Prenom FROM user ORDER BY date_inscription DESC ";
    $sql = $bdd->prepare($query);
    $sql->execute();
    $data = $sql->fetchAll();
    return $data;

}

function deleteUser(PDO $bdd,$id_user){
    $reponse =$bdd->prepare('DELETE FROM user  WHERE id_user=\'' . $id_user . '\'' );
    $reponse->execute();
}
