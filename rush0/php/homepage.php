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
                <li><input type="submit" value="croisant" name =sort></li>
                <li><input type="submit" value="decroisant" name =sort></li>
            </ul>
            <ul>
                <li><input type="submit" value="plus lourd" name =sort></li>
                <li><input type="submit" value="plus leger" name =sort></li>
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
                  <div class = case>aceuil</div>
                  <div class = case>achat</div>
                 <div class = case>panier</div>
            </div>
        <?php require('./tabm.php');?>                    
    </div>
    <nav classe = left>
        <h2> votres panier</h2>
        <footer>prix total: €<footer>
    </nav>
    
</html>