<?php
session_start();
echo "[" . $_SESSION['error'] . "]";

$_SESSION['error'] = '';
?>

<p>oiiiio</p>
<form method="POST" action="../action/login.php">
	Pseudo: <input type="text" name="login"><br/>
	Mot de passe <input type="password" name="passwd"><br/>
	<input type="submit" name="submit" value="OK">
</form>
