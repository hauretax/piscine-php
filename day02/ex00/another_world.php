#!/usr/bin/php
<?PHP
$pattern = '/[ \t]{2,}/';
$replacement = ' ';
echo preg_replace($pattern, $replacement, trim($argv[1]));
echo "\n";
?>