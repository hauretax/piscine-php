<!DOCTYPE html>
<?php
session_start();
echo $_SESSION['error'];
$_SESSION['error'] = "";

?>
<html>
<head>
	<title>Acceuil</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<?php include("header.php"); ?>
	<p>Acceuil</p>
	<?php
	?>
</body>
</html>
