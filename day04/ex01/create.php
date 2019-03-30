<?PHP
        if ($_POST['login'] !== "" && $_POST['passwd'] !== "" && $_POST['submit'] === "OK")
        {
                $tab = array();
                if(file_exists("../private/passwd"))
                {
                        $tab = unserialize(file_get_contents('../private/passwd'));
                        foreach ($tab as $elem)
                        {
                                if ($elem['login'] === $_POST['login'])
                                {
                                        echo "ERROR\n";
                                        exit;
                                }
                        }
                        $_POST['passwd'] = hash ('whirlpool', $_POST['passwd']);
                        $tab[]=$_POST;
                        file_put_contents ('../private/passwd', serialize ($tab));
                }
                else
                {
                        mkdir("../private", 0777, true);
                        $_POST['passwd'] = hash ('whirlpool',$_POST['passwd']);
                        $tab[]=$_POST;
                        file_put_contents ('../private/passwd', serialize ($tab));
                }
                echo "OK\n";
        }
        else
                echo "ERROR\n";
?>
