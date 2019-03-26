<?PHP
function ft_split($str)
{
    $str = trim($str);
    while(strstr($str,"  "))
        $str=str_replace ("  "," ",$str);
    $tab = explode(" ", $str);
    asort($tab);
    return $tab;
}
?>