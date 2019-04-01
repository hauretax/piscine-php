<?php
session_start();
foreach ($_SESSION['panier'] as $key => $getit)
{
    if ($getit === $_GET['submit'])
        $_SESSION[$key]['panier'] = "";
}
header("Location: ../php/acceuil.php");
?>