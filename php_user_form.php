<?php
//sessions
session_start();
$_SESSION["code"]=null;

?>

<?php
    //ici le code
    include_once("./src/env_php.include.php");
    include_once("./src/main_header.inc.php");
 
?>

<body>
    <header>
        <h1><?php print title.' version php '.$version ?></h1>
    </header>
    
        <?php
    

        // Récupération du hash, on laisse le salt se générer automatiquement
     
            //print $_SERVER["PHP_SELF"];
        ?>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            <input type="text" name="nom" placeholder="Votre nom" aria-required="true" autofocus>
            Femme : <input type="radio" name="genre" value="femme" checked>
            Homme : <input type="radio" name="genre" value="homme">
            <select name="pays" id="pays">
                <option value="France">France</option>
                <option value="Italie">Italie</option>
                <option value="Allemagne">Allemagne</option>
            </select>
            <input type="submit" value="Envoyer">
        </form>

    <section class="theme-response">
        <?php
        include_once("./src/validate.inc.php");
        

        ?>
    </section>
    <!--end-->
    <footer>
        <p>&copy; - PHP - <?php print date('Y') ?></p>
    </footer>
</body>
</html>