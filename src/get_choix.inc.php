<?php
    if(isset($_GET['civilite'])){
        $civ = $_GET['civilite'];
            //condition expression ternaire
            echo($civ=="femme" ? 
            '<figure>
                <img src="./asset/femme.png" alt="femme">
                <figcaption>
                <h2>'.$civ.'</h2>
                </figcaption></figure>'
            : 
            '<figure>
                <img src="./asset/homme.png" alt="home">
                <figcaption>
                <h2>'.$civ.'</h2>
                </figcaption></figure>');
     }
    else{
        
            print "Error!!!";
        
    }

?>