<?php
function auth($login, $passwd)
{
	$pwd = hash('whirlpool', $passwd);
	$tab = unserialize(file_get_contents("../private/passwd"));
	foreach ($tab as $elem)
		if ($elem['login'] === $login)
			if ($pwd === $elem['passwd'])
				return TRUE;

	return FALSE;
}
?>
