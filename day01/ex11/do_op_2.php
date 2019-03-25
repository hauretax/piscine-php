#!/usr/bin/php
<?PHP
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        return 0;
    }
    $nb1 = "test";
    $nb2 = "test";
   

    if (strstr($argv[1], "+"))
    {
        $tmp = explode("+", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 + $nb2;
    }
    if (strstr($argv[1], "/"))
    {
        $tmp = explode("/", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 / $nb2;
    }
    if (strstr($argv[1], "%"))
    {
        $tmp = explode("%", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 % $nb2;
    }
    if (strstr($argv[1], "*"))
    {
        $tmp = explode("*", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 * $nb2;
    }
    if (strstr($argv[1], "-"))
    {
        $tmp = explode("-", $argv[1]);
        $nb1 = $tmp[0];
        $nb2 = $tmp[1];
        $nb = $nb1 - $nb2;
    }
    if(!(is_numeric($nb1) || is_numeric($nb2)))
    {
        echo "Syntax Error\n";
        return ;
    }
    echo "$nb\n";
?>