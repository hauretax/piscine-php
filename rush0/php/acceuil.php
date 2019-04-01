<html>
    <head>
        <title>Le caillou magique</title>
        <link href="../css/homepage.css" rel="stylesheet"  media="all" type="text/css">
        <meta charset="utf-8">
    </head>
    <nav classe = right>
        <div classe = trie>
            <h2>trie de la boutique<h2>
            <ul>
                <li><input type="submit" value="prix croisant" name =sort></li>
                <li><input type="submit" value="prix decroisant" name =sort></li>
            </ul>
        </div>
    </nav>
    <div classe = donttouchme>
        <div classe= top>
            <header>
                 <h1><p>cailloux assuré 100% bio et sans gluten</p></h1>
            </header>
        </div> 
            <div class = tab>
                <a  class= case href='../php/inscription.php' target="_blank"> <input type="button" value="sig in"> </a>
                <a  class= case href='../php/connexion.php' target="_blank"> <input type="button" value="log in"> </a>
                <a  class= case href='../php/good_bye.php' target="_blank"> <input type="button" value="log out"> </a>

            </div>

            <?php
            session_start();
            $type =unserialize(file_get_contents('../private/type')); 
            foreach ($type as $e)
            {
                $file = "../private/".$e['type'];
                echo "<div class = scroll><h2>".$e['type']."</h2><div class = all_article>";
                $tab = unserialize(file_get_contents($file));
                foreach ($tab as $elem)
                {
                    ?> <div class = article> <?PHP
                    echo "<img src = \"".($elem['url'])."\" title = \"".($elem['name'])."\"width= 200px>";
                
                    ?>
                    <form action="../action/add.php" method = "get">
                        <p><input type="submit" value="<?php echo $elem['id_produis']?>" name=submit> <?php echo $elem['price']?>€</p>
                     </form>

                     </div>
                     <?php
                }
                ?></div></div><?php
            }
            ?>
    </div>
    <nav classe = left>
        <h2> votre panier</h2>
        <ul>
            <?php 
            $total = 0;
            $e = 0;
                foreach($_SESSION['panier'] as $article)
                {if($e === 1){
                     ?>
                    <li><?php echo ($article['nb']); ?> <?php echo ($article['name']); ?> pour <?php echo ($article['price']); ?></li>
            <?PHP } $e= 1; } ?>
        </ul>
        <?PHP
        foreach($_SESSION['panier'] as $article)
        {
            $total += $article['price'];
        }?>
        <footer><p>prix total:<?php echo (":".$total)?> €</p>
                    <form action ="../action/reset.php" method = "get">
                    <input type="submit" value= "delet" name=submit></form>
                    
        <footer>
        
    </nav>
    
</html>