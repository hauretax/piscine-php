#!/usr/bin/php
<?PHP

    function comp($var1, $var2)
    {
        $i = 0;
        $var1=strtolower($var1);
        $var2=strtolower($var2);
        while($var1[$i] || is_numeric($var1[$i]))
        {
            if (($var1[$i]) == ($var2[$i]))
                $i++;
            else if(ctype_alpha($var1[$i]) && ctype_alpha($var2[$i]))
                return(strcmp($var1[$i],$var2[$i]));
            else if(ctype_alpha($var1[$i]) && !ctype_alpha($var2[$i]))
                return(-1);
            else if(!ctype_alpha($var1[$i]) && ctype_alpha($var2[$i]))
                return(1);
            else if(is_numeric($var1[$i]) && is_numeric($var2[$i]))
                return(strcmp($var1[$i],$var2[$i]));
            else if(!is_numeric($var1[$i]) && is_numeric($var2[$i]))
                return(1);
            else if(is_numeric($var1[$i]) && !is_numeric($var2[$i]))
                return(-1);
            else
                return(strcmp($var1[$i],$var2[$i]));
        }
        return(strcmp($var1[$i],$var2[$i]));
    }
   
   $e = 0;
    $quatr = array();
    $tab = array();
    $tmp = array();
    foreach ($argv as $elem)
    {
        if ($e > 0)
        {
            while(strstr($elem,"  "))
                $elem=str_replace ("  "," ",trim($elem));
            $tmp = explode(" ", $elem);
            foreach ($tmp as $quatr)
                    array_push ($tab, $quatr);
        }
        $e = $e + 1;
    }
    sort($tab);
    $i = 0;
    $size = sizeof ($tab);
    while($i < $size - 1)
    {
        if ((comp($tab[$i],$tab[$i + 1])) > 0)
        {
            $sav = $tab[$i];
            $tab[$i] = $tab[$i + 1];
            $tab[$i + 1] = $sav;
            $sav = NULL;
            $i = -1;
        }
        $i++;
    }
    foreach($tab as $elem)
        echo "$elem\n";
?>