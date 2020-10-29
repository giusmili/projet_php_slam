<?php
    
    $_SESSION["code"]=2020;

    if(isset($_GET['code'])){

        $myCode = $_GET['code'];
        if($myCode==$_SESSION["code"]){
        echo '<p class="success">Bravo votre code est '.md5($myCode). '<p>';
        }
        else{
            echo '<p class="error">Code error</p>';
        }
    
       
    }
    
    
    
?>