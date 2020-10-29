<?php
    include_once("./src/env_php.include.php");
    include_once("./src/main_header.inc.php");
    

?>
<body>
    <header>
        <h1><?php print title.' version php '.$version ?></h1>
    </header>
    <main>
        <!--table-->
        <?php
            $user = array(
                    "François",
                    "Michel",
                    "Nicolas"
                );
            
            /*variable globale*/
            $language = ["fr","us"];
            
                    $language[0] = "fr";
                    $language[1] = "us"; 
            
            $gamers = array(
                      0 => "Caroline",
                      1 => "Mathieu",
                      2 =>"Nick",
                      3 =>"Tavarez"
                    );
            print "<pre>";
                print_r($gamers);
            print "</pre>";

            /* 
            tableau de produits
            
            Machine à laver

            Marque : Laden
            Capacité : 25kg
            Consommation : 100 KW
            Prix : 300 €
            */
            
         $produit = ([
                    "Marque"=>"Laden",
                    "Capacité" => "25kg",
                    "Consommation" => "100 KW",
                    "Prix" => "300 €",
                    "image" => '<img src="https://image.darty.com/gros_electromenager/lavage_sechage/lave-linge_hublot/electrolux_ew2f1284gf_t1901304653068A_111307311.jpg" alt="produit">'

            ]);
            print "<pre>";
                print_r($produit);
            print "</pre>";

            /* 
            table vide
            */
            $allTable = [];
            array_push($allTable,"apple","Samsung","?",1);
            print "<pre>";
                print_r($allTable);
             print "</pre>";

            $fusion_arr;

            $fusion_arr = array_merge($produit, $gamers);

            print "<pre>";
                print_r($fusion_arr);
            print "</pre>";

            /* 
            itération
            for(), while(), while do(), for in, foreach

            */
            $progs = ["html", "css","js","PHP","Python","?"];
            $index=0;
            print "<section>";
                // for($index = 0; $index < count($progs); $index++){
                //     echo($index." : ".$progs[$index]."<br>");
                // }
                while($index < count($progs)){
                    
                    print($index." : ".$progs[$index]."<br>");
                    $index++;
                     

                }
            print "</section>";
            print "<section>";
                /*foreach*/
                foreach($produit as $key => $valeur){
                        echo $key." : ".$valeur."<br>";
                }
            print "</section>";
        ?>


    </main>




<footer>
    <p>&copy; - PHP - <?php print date('Y') ?></p>
</footer>
</body>
</html>