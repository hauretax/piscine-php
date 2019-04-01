<?php
session_start ();
if ($_GET['type'] !== "" && $_GET['submit'] === "ok")
{
            $tab = unserialize(file_get_contents('../private/type'));
            $file = "../private/".$_GET['type'];
            if (file_exists($file))
            {
                echo "cette categoris existe dejas ou n est pas disponible\n";
                exit; 
            }
                foreach ($tab as $elem)
                {
                    if ($elem['type'] === $_GET['type'])
                    {
                            echo "cette categoris existe dejas\n";
                            exit;
                    }
                }
            $tab[]=$_GET;
            file_put_contents ('../private/type', serialize ($tab));
            file_put_contents ($file, "");
        echo "categoris ajouter\n";
}
else
echo "merci de remplire tout les champs\n";
?>