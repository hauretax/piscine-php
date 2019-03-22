#!/usr/bin/php
<?PHP
    $str = $argv[1];
    $str = trim ($str, " ");
    while(strstr($str,"  "))
        $str=str_replace ("  "," ",$str);
    echo "$str\n";
?>