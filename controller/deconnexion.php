<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 24/05/2017
 * Time: 10:50
 */
if (!isset($_SESSION))
{
    session_start();
}
setcookie('email','',time()-3600);
setcookie('password','',time()-3600);
//echo  $_SESSION['Mail'];
// On détruit les variables de notre session
session_unset ();
//echo  $_SESSION['Mail'];
// On détruit notre session
session_destroy ();
//echo  $_SESSION['Mail'];
include ('../vue/home.php');
