#!/usr/bin/php
<?PHP
$str = $argv[1];

while(strstr($str,"  "))
    $str = str_replace ("  "," ",$str);
$tmp = explode(" ", $str);
$e = 0;

foreach ($tmp as $elem)
{
    if ($e == 2)
        echo "$elem ";
    $e = 2;
}
echo "$tmp[0]\n"
?>