#!/usr/bin/php
<?PHP
    $e = 0;
    $tabs = array();
    $tabl = array();
    foreach ($argv as $elem)
    {
        if ($e > 0)
        {
            while(strstr($elem,"  "))
                $elem=str_replace ("  "," ",$elem);
            $tmp = explode(" ", $elem);
            foreach ($tmp as $quatr)
            {
                
                if (($quatr[0] >= 'A' && $quatr[0] <= 'Z') || ($quatr[0] >= 'a' && $quatr[0] <='z'))
                    array_push ($tabl, $quatr);
                else 
                    array_push ($tabs, $quatr);
            }
        }
        $e = $e + 1;
    }
    arsort ($tabs);
    sort ($tabl);

    foreach ($tabl as $elem)
            echo "$elem\n";
    foreach ($tabs as $elem)
            echo "$elem\n";
?>