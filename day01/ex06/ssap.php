#!/usr/bin/php
<?PHP
    $e = 0;
    $tab = array();
    foreach ($argv as $elem)
    {
        if ($e > 0)
        {
            while(strstr($elem,"  "))
                $elem=str_replace ("  "," ",$elem);
            $tmp = explode(" ", trim($elem));
            foreach ($tmp as $quatr)
            {
                array_push ($tab, $quatr);
            }
        }
        $e = $e + 1;
    }
    sort ($tab);
    foreach ($tab as $elem)
    {
            echo "$elem\n";
    }
?>
