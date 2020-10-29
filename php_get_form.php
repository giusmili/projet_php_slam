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
    <!--main-->
  
        <!--<p>
            <a href="https://www.google.com/search?q=css+html">Voir le lien?</a>
           
        </p>-->
        <figure class="theme-secret">
        <img src="./asset/agent.png" alt="secret">
            <figcaption>
                <h2>Saisir votre code?</h2>
            </figcaption>
        </figure>
        <!--formulaire-->
        <?php
            //print $_SERVER["PHP_SELF"];
        ?>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            <input type="password" name="code" placeholder="Votre code secret" aria-required="true" autofocus>
            <input type="submit" value="Envoyer">
        </form>

    <section class="theme-response">
        <?php
        include_once("./src/form.inc.php");
            //include(), require_once()

        ?>
    </section>
    <!--end-->
    <footer>
        <p>&copy; - PHP - <?php print date('Y') ?></p>
    </footer>
</body>
</html>