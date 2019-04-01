<?php
session_start();
$_SESSION['panier'] = array(array());
header("Location: ../php/acceuil.php");
?>