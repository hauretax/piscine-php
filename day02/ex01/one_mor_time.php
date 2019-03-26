#!/usr/bin/php
<?PHP
if ($argc < 2)
    return ;
date_default_timezone_set('Europe/Paris');
$month = array ("Janvier"=>1,"Fevrier"=>2,"Mars"=>3,"Avril"=>4,"Mai"=>5,"Juin"=>6,"Juillet"=>7,"Aout"=>8,"September"=>9,"Octobre"=>10,"Novembre"=>11,"Decembre"=>12);
$day = array (1=>"lundi",2=>"mardi",3=>"mercredi", 4=>"jeudi",5=>"vendredi", 6=>"samedi",7=>"dimanche");
while(strstr($argv[1],"  "))
    $argv[1]=str_replace ("  "," ",$argv[1]);
$tab = explode(" ", trim($argv[1]));
if (sizeof($tab) != 5)
{
    echo "Wrong Format\n";
    return ;
}
$tabh = explode (":", $tab[4]);
echo mktime($tabh[0], $tabh[1], $tabh[2], $month[$tab[2]], $tab[1], $tab[3])."\n";
?>