<?php
    
    $_SESSION["code"]=2020;

    if(isset($_GET['code'])){

        $myCode = $_GET['code'];
        if($myCode==$_SESSION["code"]){
        echo '<p> Baravo votre code est '.md5($myCode). '<p>';
        }
        else{
            echo '<p>Code error</p>';
        }
    
       
    }
    
    
    
?>