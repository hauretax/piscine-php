<?PHP
    session_start();
    
    $type =unserialize(file_get_contents('../private/type')); 
    foreach ($type as $e)
    {
        $file = "../private/".$e['type'];
        $tab = unserialize(file_get_contents($file));
        foreach ($tab as $elem)
        {
            if ($elem['id_produis'] === $_GET['submit'])
            {
                $price = $elem['price'];
            }
        }
    }
        $x = 0;
        foreach ($_SESSION['panier'] as $key => $elem)
        {
            if ($elem['name'] === $_GET['submit'])
            {
                if ($_SESSION['panier'][$key]['nb'] === 0)
                    $_SESSION['panier'][$key]['nb'] = 1;
                $_SESSION['panier'][$key]['nb']++;
                {
                $_SESSION['panier'][$key]['price'] = $price * $_SESSION['panier'][$key]['nb'] ;
                $_SESSION['panier'][$key]['name'] = $_GET['submit'];
                }$x = 1;
            }
        }
    if ($x === 0)
    {
        $tab =array ('name'=>$_GET['submit'], 'nb'=>1, 'price'=>$price);
        $_SESSION['panier'] []= $tab;
    }
    header("Location: ../php/acceuil.php");
?>