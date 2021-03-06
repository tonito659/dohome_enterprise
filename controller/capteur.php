<?php

if (!isset($_SESSION)) {
    session_start();
    //header("Location : https://dohome.cf")
}

$titre = "capteur";


require_once '../modele/init_connexion_bdd.php';
require_once '../modele/capteur.php';
require_once '../modele/ajouts.php';
require_once '../modele/piece.php';
require_once '../modele/actionneur.php';


if (isset($_GET['capteur'])) {
    $Capteur = new Capteur($_GET['capteur'], $bdd);
    $titre = $Capteur->typecapteur[0];
    $Capteur->get_valeur_history();
    $dataval = json_encode($Capteur->histo_valeur);
    $datadate = json_encode($Capteur->histo_date);
    include('../vue/mes_capteurs.php');

} else if (isset($_GET['actionneur'])) {

    $actionneur = new Actionneur($_GET['actionneur'], $bdd);
    $titre = $Actionneur->typecapteur[0];
    include('../vue/mes_actionneurs.php');


}
else {
    // ici le capteur n'est pas précisé dans le formulaire
    // on renvoie tous les capteurs de la pièce séléctionnée
    $idmaison = $_GET['maison']; //to add quand on aura les sessions
    $idpiece = $_GET['piece'];
    //TODO ajouter les sessions et remplacer ici.



    if (isset($_POST['envoi'])) {
        if (isset($_POST['type'])) {
            if (isset($idpiece)) {
                if (isset($_POST['nom_capteur'])) {
                    ajoutCapteur($bdd, $_POST['nom_capteur'], $_POST['type'], $idpiece);
                    ?>
                    <script>alert("<?php echo htmlspecialchars('Un capteur vient d\'être ajouté', ENT_QUOTES); ?>")</script>
                    <?php
                }
            }
        }
        //echo "<p>DAMN, tu viens d'ajouter un capteur dans la pièce !</p>";
    } else if(isset($_POST["refresh"])){
        trameToHisto($bdd,"006A");
        updateCapteurPiece($bdd);
    }

    if (isset($_GET['supprCapteur'])){
                   supCpateur($bdd,$idpiece,$_GET['supprCapteur']);
                   ?>
                   <script>alert("<?php echo htmlspecialchars('Un capteur vient d\'être supprimer', ENT_QUOTES); ?>")</script>
               <?php
    }

    $pieces = getPiecesfromMaison($bdd, $idmaison);
    $capteur_piece = getCapteursfromPiece($bdd, $idpiece);
    $actionneur_piece = getActionneursfromPiece($bdd, $idpiece);

    include('../vue/capteur.php');

}
