#!/usr/bin/env php
<?php
session_start();
include ("auth.php");

$_SESSION['loggued_on_user'] = "";
if (auth($_POST["login"], $_POST["passwd"]))
{
	session_start();
	$_SESSION['loggued_on_user'] = $_POST["login"];
	$_SESSION['error'] = 'Welcome ' . $_POST["login"];
//	$_SESSION['error'] = 'passwor is ' . $_POST["passwd"];
	header("Location: ../action/set_user.php");	
}
else
{
	$_SESSION['error'] = 'login password dosnt match';
	header("Location: ../php/connexion.php");
}
?>
