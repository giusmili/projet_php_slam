<?php
    if(isset($_GET['nom']) && isset($_GET['genre']) && isset($_GET['pays'])){
        //passer en variable
        $nom = $_GET['nom'];
        $genre = $_GET['genre'];
        $pays = $_GET['pays'];
        //condition formulaire
        if($nom && $genre && $pays){
            print '<p class="align-text">Nom : '.$nom.'<br>Genre : '.$genre.'<br>Pays : '.$pays.'</p>';
        }
        else{
            print '<p class="error">Champs obligatoires</p>';

        }


        
    }
?>