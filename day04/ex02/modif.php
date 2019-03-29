<?PHP
        if ($_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] !== "" && $_POST['submit'] === "OK")
        {
                $tab = array();
                $tab = unserialize(file_get_contents('../private/passwd'));
                foreach ($tab as $key => $elem)
                {
                        if ($elem['login'] === $_POST['login'])
                        {
                                if ($elem['passwd'] === hash ('whirlpool',$_POST['oldpw']))
                                {
                                        $tab[$key]['passwd'] = hash ('whirlpool',$_POST['newpw']);
                                        file_put_contents ('../private/passwd', serialize ($tab));
                                        print("OK\n");
                                        exit;
                                }
                                else
                                {
                                        print("ERROR\n");
                                        exit;
                                }
                        }
                }
        }
        else
                print ("ERROR\n");
?>
