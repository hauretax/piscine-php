#!/usr/bin/php
<?PHP
    $i = 1;
    $ink = array();
    $tab = array();
    while ($i < $argc)
    {
        $tmp = explode(":", $argv[$i + 1]);
        array_push ($ink, $tmp[0]);
        array_push ($tab, $tmp[1]);
        $i = $i + 1;
    }
    $x = 0;
    while ($x < $i)
    {
        if((strstr($ink[$x], $argv[1]) || $ink[$x] == $argv[1]))
            $word = $tab[$x];
        $x = $x + 1;
    }
    if ($word)
        echo "$word\n";

?>