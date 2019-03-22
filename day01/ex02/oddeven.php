#!/usr/bin/php
<?php
echo "Entrez un nombre: ";
while(fscanf(STDIN,"%s\n", $nb))
{
    if(!(is_numeric($nb)))
        echo "'$nb' n est pas un chiffre";
    else if($nb % 2 == 0)
        echo "Le chiffre $nb est Pair";
    else
        echo "Le chiffre $nb est Impair";
    $nb = '';
    echo "\nEntrez un nombre: ";
}
    echo "\n";
?>