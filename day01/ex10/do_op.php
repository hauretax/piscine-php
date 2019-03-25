#!/usr/bin/php
<?PHP
    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        return 0;
    }
    $nb1 = $argv[1];
    $nb2 = $argv[3];
    if (strstr($argv[2], "+"))
        $nb = $nb1 + $nb2;
    if (strstr($argv[2], "/"))
        $nb = $nb1 / $nb2;
    if (strstr($argv[2], "%"))
        $nb = $nb1 % $nb2;
    if (strstr($argv[2], "*"))
        $nb = $nb1 * $nb2;
    if (strstr($argv[2], "-"))
        $nb = $nb1 - $nb2;
    echo "$nb\n";
?>