<?PHP
        if ($_POST['login'] !== "" && $_POST['passwd'] !== "" && $_POST['submit'] === "OK")
        {
                if(file_exists("../private/passwd"))
                {
                        echo "coucoule fichier etais cree";
                }
                else
                {
                        echo('creation du fichier');
                        mkdir("../private");
                }
               // $str =  serialize($_POST);
               // print ($str);
               // $str_ = unserialize($str);
                //print_r ($str_);
                //echo ('OK');
        }
        else
                echo ('ERROR');
?>
