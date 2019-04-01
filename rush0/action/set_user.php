<?php
	session_start();
$_SESSION['login'] = "";
$_SESSION['name_usr'] = "";
$_SESSION['fname_usr'] = "";
$_SESSION['location_usr'] = "";
if (!$_SESSION['admin']);
	$_SESSION['admin'] = FALSE;
$_SESSION['img_usr'] = "../img/icon.png";

if (file_exists("../private"))
{
	if (file_exists("../private/user"))
	{
		$array = file_get_contents("../private/user");
		$tab = unserialize($array);
		foreach ($tab as $elem)
		{
			if ($elem['login'] == $_SESSION['loggued_on_user'])
			{
				$_SESSION['login'] = $elem['login'];
				$_SESSION['name_usr'] = $elem['name_usr'];
				$_SESSION['fname_usr'] = $elem['fname_usr'];
				$_SESSION['location_usr'] = $elem['location'];
				$_SESSION['admin'] = $elem['admin'];
				$_SESSION['img_usr'] = $elem['img_usr'];
				//if ($_SESSION['admin'])
				//	header("Location: ../php/admin.php");
				header("Location: ../php/acceuil.php");
			}
		}
	}
}



	header("Location: ../php/acceuil.php");
?>
