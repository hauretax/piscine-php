<?PHP
function auth($login, $passwd)
{
        if ($login !== "" && $passwd !== "")
        {
                $tab = array();
                $tab = unserialize(file_get_contents('../private/passwd'));
                foreach ($tab as $key => $elem)
                {
                        if ($elem['login'] === $login)
                        {
                                if ($elem['passwd'] === hash ('whirlpool',$passwd))
                                    return TRUE;
                                else
                                        return FALSE;
                        }
                }
                FALSE;
        }
        return FALSE;
}
?>
