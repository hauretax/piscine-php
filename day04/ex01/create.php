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
                                        print ("ERROR\n");
                                        exit;
                                }
                        }
                        $tab[]=$_POST;
                        file_put_contents ('../private/passwd', serialize ($tab));
                }
                else
                {
                        mkdir("../private");
                        $_POST['passwd'] = hash ('whirlpool',$_POST['passwd']);
                        $tab[]=$_POST;
                        file_put_contents ('../private/passwd', serialize ($tab));
                }
                print ("OK\n");
        }
        else
                print ("ERROR\n");
?>
