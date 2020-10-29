<?php
    //créer des functions par la fonction printf

    function printout(){
        print(sprintf("%s ", "Hello"));
        print sprintf("%s ", 2020);
        print sprintf("%g ", 7.5);
        print sprintf("%d ", 8.5);
    }
    print"<p><code>";
        printout();
    print"</code></p>";

    function user($nom, $age){
       print sprintf("Hello %s\n", $nom. "<br>tu as ".$age."ans");
    }
    print"<p><code>";
        user("Jon",20);
    print"</code></p>";

    /* suite de la fonction */
    
    $name = "Anthony";

    /* fonction anonyme */
    $displayInfo = function() use (&$name){
        print sprintf("Bonjour %s ", $name);

    };
    $name = "Jon";
   

    print"<p><code>";
        $displayInfo("Anthony");
    print"</code></p>";



?>
<!---<blockquote>
    <code>
        let x = 0;
        const user = {}
    </code>
</blockquote>-->