#!/usr/bin/php
<?php
    $file = fopen($argv[1], 'r');
    while ($ligne = fgets($file))
    {
        if (preg_match("/http:\/\/*.*>/", $ligne))
            echo"XXXXXXXXXXXXXXXXX";
        echo $ligne;
    }
    fclose($file);
?>