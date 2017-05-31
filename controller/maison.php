<?php

$titre = "Mes Maisons";


require_once '../modele/initConnexionBDD.php';
require_once '../modele/ajouts.php';
require_once '../modele/maison.php';

$iduser = 1; //TODO AJOUTER LES SESSIONS
$maison = getMaisons($dbh, $iduser);


if (isset($_GET['maison'])) {

    include('../controller/piece.php');

} else {
    // ici la piece n'est pas précisé dans le formulaire
    // Affiche toutes les maisons du compte user
    include('../vue/mes_maisons.php');


    if (isset($_POST['envoi'])) {
        if (isset($_POST['nom_maison'])) {

            ajoutMaison($dbh, $_POST['nom_maison'], $_POST['piece']);
            ?>
            <script>alert("<?php echo htmlspecialchars('la maison a bien été ajoutée', ENT_QUOTES); ?>")</script>
            <?php

        }
    } else {
        echo "<p>DAMN, tu viens d'ajouter un capteur dans la pièce !</p>";
    }
}