#!/usr/bin/php
<?PHP
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        return 0;
    }
    $nb1 = "test";
    $nb2 = "test";
    
    if (($argv[1][0] == '-' && $argv[1][1]== '-') || ($argv[1][0] == '+' && $argv[1][1]== '+') || strstr($argv[1],"---") || strstr($argv[1],"+++"))
        {
            echo "Syntax error\n";
            return 0;
        }
    if ($argv[1][0] == '+')
        $argv[1][0] = '0';
    $argv[1]=str_replace("--" , "+", $argv[1]);
    $argv[1]=str_replace("++" , "+", $argv[1]);
    if (strstr($argv[1], "+"))
    {
        $tmp = explode("+", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 + $nb2;
    }
    else if (strstr($argv[1], "/"))
    {
        $tmp = explode("/", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 / $nb2;
    }
    else if (strstr($argv[1], "%"))
    {
        $tmp = explode("%", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 % $nb2;
    }
    else if (strstr($argv[1], "*"))
    {
        $tmp = explode("*", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 * $nb2;
    }
    else if (strstr($argv[1], "-"))
    {
        $valu = 1;
        if ($argv[1][0] == '-')
        {
            $argv[1][0] = 0;
            $valu = -1;
        }
        $tmp = explode("-", $argv[1]);
        $nb1 = $tmp[0] * $valu;
        $nb2 = $tmp[1];
        $nb = $nb1 - $nb2;
    }

    if(!(is_numeric($nb1) && is_numeric($nb2)))
    {
        echo "Syntax Error\n";
        return ;
    }
    echo "$nb\n";
?>