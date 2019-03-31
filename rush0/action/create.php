<?php
session_start();
if ($_POST['submit'] === "OK" && $_POST['login'] !== "" && $_POST['passwd'] !== ""
&& $_POST['verif_mdp'])
{
	if ($_POST['verif_mdp'] !== $_POST['passwd'])
	{
		$_SESSION['error'] = "passwor are diffrent";
	   header("Location: ../php/inscription.php");	
		echo "ERRORimdp\n";
		return ;
	}
	$psd = hash('whirlpool', $_POST['passwd']);
	if (file_exists("../private") === FALSE)
	{
		mkdir("../private", 0777, true);
	}
	if (file_exists("../private/passwd") === FALSE)
	{
		$tab = array(array('login'=>$_POST['login'], 'passwd'=>$psd));
		file_put_contents("../private/passwd", serialize($tab));
		$_SESSION['error'] = "acount creat";
	   header("Location: ../php/connexion.php");	
		echo "OK\n";
	}
	else
	{
		$array = file_get_contents("../private/passwd");
		$tab = unserialize($array);
		foreach ($tab as $elem)
			if ($elem['login'] === $_POST['login'])
			{
				echo "ERRORlogin\n";
				$_SESSION['error'] = "login alredy exist";
	   header("Location: ../php/inscription.php");	
				return ;
			}
		$tab[] = array('login'=>$_POST['login'], 'passwd'=>$psd);
		file_put_contents("../private/passwd", serialize($tab));
		$_SESSION['error'] = "acount creat";
	   header("Location: ../php/connexion.php");	
		echo "OK\n";
	}
}
else
{
	echo "ERRORfield\n";
	$_SESSION['error'] = "empty field";
	   header("Location: ../php/inscription.php");	
}
?>
