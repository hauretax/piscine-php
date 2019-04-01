<!DOCTYPE html>
<?php
session_start();
echo "[" . $_SESSION['error'] . "]";
$_SESSION['error'] = "";

?>
<html>
<head>
	<title>Profil</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php include("header.php"); ?>
<p>test</p>


<br/> 
<form method="POST" action="../action/modify_user.php"
	enctype="../private/img_name">

<br/> 

<img src="<?php echo $_SESSION['img_usr']?>"><br/>
<input type="hidden" name="MAX_FILE_SIZE" value="2097152">     
<input type="file" name="new_img">    
<input type="submit" value="OK" name="OK_img">
</form>
<br/> 


<form method="POST" action="../action/modify_user.php">
Pseudo: <?php echo $_SESSION['login']?>
	<input type="text" name="new_login"><br/>

<input type="submit" value="OK" name="OK_login"> </form>

<br/> 

<form method="POST" action="../action/modify_user.php">
Nom: <?php echo $_SESSION['fname_usr']?>
	<input type="text" name="new_fname"><br/>

<input type="submit" value="OK" name="OK_fname"> </form>

<br/> 

<form method="POST" action="../action/modify_user.php">
Prenom: <?php echo $_SESSION['usr_name']?>
	<input type="text" name="new_name"><br/>

<input type="submit" value="OK" name="OK_name"> </form>
<br/> 

<form method="POST" action="../action/modify_user.php">
Adresse: <?php echo $_SESSION['location']?>
	<input type="text" name="new_location"><br/>
<br/>
<input type="submit" value="OK" name="OK_location"> </form>
<br/> 

<form method="POST" action="../action/modify_user.php">
Mot de passe:
	<input type="password" name="new_passwd"><br/>
Nouveau mot de passe: 
	<input type="password" name="verif_mdp"><br/>
<input type="submit" value="OK" name="OK_passwd"> </form>
<br/> 
</body>
</html>

