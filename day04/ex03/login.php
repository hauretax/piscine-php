<?PHP
session_start();
include("auth.php");
if (auth($_GET['login'], $_GET['passwd']))
    {
        $_SESSION['loggued_on_user'] = $_GET['login'];
        ?>OK
<?php
    }
    else
    {
        ?>ERROR
<?php
        $_session['loggued_on_user'] = "";
    }
?>