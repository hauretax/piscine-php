#!/usr/bin/php
<?PHP
$e = 0;

foreach ($argv as $elem)
{
    if ($e == 2)
        echo "$elem\n";
    $e = 2;
}
?>