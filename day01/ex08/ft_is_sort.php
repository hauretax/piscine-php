<?PHP
function ft_is_sort($tab)
{
    $tmp = $tab;
    asort($tmp);
    $i = 0;
    foreach($tmp as $elem)
    {
        if($elem != $tab[$i])
        {
            return (0);
        }
            $i = $i + 1;
    }
    return (1);
}
?>