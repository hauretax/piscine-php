<?php
$tabj = array(
    "ardois" => array (
        "url" => "https://www.jardiland.com/media/catalog/product/cache/image/438x438/e9c3970ab036de70892d86c6d221abfe/s/a/sac-ardoise-pilee-10-30-25-kg-928579-1.jpg",
        "weight" => 0.0028,
        "name" => "ardois",
        "price" => 3,99
    ),
    "concasse rouge" => array(
        "url" => "https://www.kst-decoration-jardin.com/boutique/images_produits/rougeblanc_2030800-z.jpg",
        "weight"=>  25,
        "name" => "concasse rouge",
        "price" => 10,90
    )
);
$tabc = array(
    "A-06" => array(
        "url"=> "http://www.laboiteverte.fr/wp-content/uploads/2016/12/rocher-autoroute-06.jpg",
        "weight" => 10000,
        "name" => "rocher autoroute A6",
        "price" => 1
    ),
    "uluru" => array(
        "url"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Uluru%2C_helicopter_view%2C_cropped.jpg/1200px-Uluru%2C_helicopter_view%2C_cropped.jpg",
        "weight" => 4000000,
        "name" => "uluru",
        "price" => 4000001
    )
    );
    echo "<div class = scroll>
    <h2>les cailloux du jours</h2>
    <div>";
    foreach ($tabj as $elem)
        echo "<img src = \"".($elem['url'])."\" title = \"".($elem['name'])."\"width= 200px>";
    echo  "               </div>
    </div>
     <div class = scroll>
        <h2>les cailloux cool</h2>
        <div>";
    foreach ($tabc as $elem)
        echo "<img src = \"".($elem['url'])."\" title = \"".($elem['name'])."\"width= 200px>";
    echo "            </div>
    </div>";
?>
 
                   

