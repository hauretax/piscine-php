<?php
	session_start();
include ("val_user.php");

$_SESSION['error'] = '';

if ($_POST['OK_img'] == 'OK' && $_POST['new_img'] != '')
{
	mod_usr("img", $_POST["new_img"]);		
	$_SESSION['error'] = "img modify"; 
}
else if ($_POST['OK_login'] == 'OK' && $_POST['new_login'] != '')
{
	mod_usr("login", $_POST["new_login"]);		
	$_SESSION['error'] = "login modify";

}
else if ($_POST['OK_fname'] == 'OK' && $_POST['new_fname'] != '')
{
	mod_usr("fname", $_POST["new_fname"]);		
	$_SESSION['error'] = "first name modify"; 

}
else if ($_POST['OK_name'] == 'OK' && $_POST['new_name'] != '')
{
	mod_usr("name", $_POST["new_name"]);		
	$_SESSION['error'] = "name modify";
}
else if ($_POST['OK_location'] == 'OK' && $_POST['new_location'] != '')
{
	mod_usr("location", $_POST["new_location"]);		
	$_SESSION['error'] = "location modify";

}
else if ($_POST['OK_passwd'] == 'OK' && $_POST['nwe_passwd'] != ' '
&& $_POST['verif_mdp'] != '')
{
	if ($_POST['nwe_passwd'] ===  $_POST['verif_mdp'])
	{
		mod_usr("passwd", $_POST["nwe_passwd"]);		
		$_SESSION['error'] = 'password modify';

	}
	else
	{
		$_SESSION['error'] = 'mdp dosnt match';
	header('Location: ../php/profil.php');
	}
}
else
{
	$_SESSION['error'] = 'empty file';
	header('Location: ../php/profil.php');
}
?>
