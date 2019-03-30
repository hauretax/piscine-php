<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texte utilisé si le visiteur utilise le bouton d\'annulation';
    exit;
} 
if($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === 'jaimelespetitsponeys')  {

?>
<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,<?php echo base64_encode(file_get_contents('../img/42.png') );?>'>
</html></body>
<?php
exit(0);
    }
else
{
?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
<?php
 header('HTTP/1.0 401 Unauthorized');
exit(0);
}
?>