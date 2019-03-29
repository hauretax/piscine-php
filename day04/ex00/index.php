<?PHP
session_start ();

if ($_GET['submit'] === "OK")
{
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<form action="index.php" method="get">
 <p>login <input type="text" name="login" value="<?php echo ($_SESSION['login']) ;?>"/></p>
 <p>passwd <input type="text" name="passwd" value="<?php echo ($_SESSION['passwd']) ;?>"/></p>
 <p><input type="submit" value="OK" name =submit></p>
</form>
</html></body>