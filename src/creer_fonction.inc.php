<?php
    //créer function
    function def(){
        //fonction déclarative
        $nom ="Ledorf";
        $prenom = "Rasmus";
        $date = date('Y');
        $nav = $_SERVER['HTTP_USER_AGENT'];
        echo"<p>Je m'appelle : ", $nom," ",$prenom,
        " et mon prénom contient ",strlen($prenom),
        " caractères &copy; : ",
        $date, "<br>",$nav,"</p>";

    }
    $print_out = def();
    //fonction avec les param
    function userWeb($nom, $prenom, $date, $ip){
        echo "<p> Je m'appelle : ",$nom,
        " ",$prenom, "<br> Message du : ",$date."\n",
        "<br> Adresse machine locale : ",$ip,"</p>\n";
    }
    
    userWeb("Berners","Lee",date("d/m/Y/:h:i"), $_SERVER['REMOTE_ADDR']);

    //function anonyme
    $message = function($nom, $msg){
        return "<p>Bonjour : ".$nom." ".$msg."</p>";

    };
    print $message('Rasmus',"ceci est une fonction anonyme");








?>