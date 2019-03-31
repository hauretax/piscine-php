<?php
session_start();
echo "[" . $_SESSION['error'] . "]";
$_SESSION['error'] = '';
?>
<p>test</p>
<form method="POST" action="../action/create.php">
	Pseudo: <input type="text" name="login"><br/>
	Mot de passe <input type="password" name="passwd"><br/>
	Verif Mot de passe <input type="password" name="verif_mdp"><br/>
	<input type="submit" name="submit" value="OK">
</form>
