<section>

<?php
    //chaine de carectères
    $long = "<p>Bonjour tout le monde!</p>";
  
    //méthode
    $printOut = strlen($long);//compter le nombre de caractères
    print $long." nombre de caractères ".$printOut."<br>";
    $phrase = "bam bam bam";
    $jeux_de_mot = str_replace("b","p",$phrase);
    print $phrase."<br>";
    print $jeux_de_mot;
    
    /*
    $obect->calc(1,2)
    print_out(1,4)
    */
    $tab_lang = ["Html","PHP",1990,false];
    print "<br>";
    // print count($tab_lang);
    print sizeof($tab_lang)."<br>";
    print_r($tab_lang)."<br>";
    print str_shuffle($long)."<br>";
    print strtoupper($long); //strtolower


    




?>
</section>