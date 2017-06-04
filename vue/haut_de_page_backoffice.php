<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../css/haut_bas_de_page.css"/>
    <title> Mon profil </title>
</head>

<header>
    <section1>
        <div class="container">
            <img class="logo" src="../vue/img/fond_transparent3.png" alt="logo de l'entreprise"/>
            <nav>
                <ul>
                    <div class="menu">
                        <li><a href="../vue/dashboard_backoffice.php">Dashboard</a></li>
                        <li><a href="../vue/analyse_backoffice.php">Analyse</a></li>
                        <li><a href="../vue/messagerie_backoffice.php">Messagerie</a></li>
                        <li><a href="../vue/admin_backoffice.php">BackOffice</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </section1>
    <section1>
        <div class="recherche">
            <form action="search" id="searchthis" method="get">
                <input id="search" name="q" type="text" placeholder="Rechercher"/>
                <input id="search-btn" type="submit" value="Rechercher"/>
            </form>
        </div>
    </section1>
    <section1>
        <a class="LienImage" href="home.php"><img class="deconexion" src="../vue/img/icon_deconnexion.png" alt="logo de la deco"/></a>

    </section1>
</header>
