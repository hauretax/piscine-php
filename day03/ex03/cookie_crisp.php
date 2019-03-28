<?PHP
if($_GET['action'] === "set")
    setcookie($_GET['name'],$_GET['value'], time()+800000);
else if ($_GET['action'] === "del")
    setcookie($_GET['name'],$_GET['value'], time()-8000000);
else if($_GET['action'] === "get")
    echo $_COOKIE[$_GET['name']];
    if ($_COOKIE[$_GET['name']])
        echo"\n";
?>