<?php
session_start ();
$file = "../private/".$_GET['type'];
if ($_GET['weight'] !== "" && $_GET['url'] !== "" && $_GET['id_produis'] !== "" && $_GET['price'] !=="" && file_exists($file) && $_GET['submit'] === "ok")
{
    $type =unserialize(file_get_contents('../private/type')); 
            foreach ($type as $e)
            {
                $file = "../private/".$e['type'];
                $tab = unserialize(file_get_contents($file));
                foreach ($tab as $elem)
                {
                    if ($elem['id_produis'] === $_GET['id_produis'])
                    {
                            echo "se produis existe dejas\n";
                            exit;
                    }
                }
            }
            $file = "../private/".$_GET['type'];
            $tab[]=$_GET;
            file_put_contents ($file, serialize ($tab));
        echo "Produit ajouter\n";
}
else
echo "merci de remplire tout les champs ou de vous assurer que la categoris existe\n";
?>