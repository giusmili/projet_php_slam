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
        $table_assoc = array(
                1=>array("code"=>"html",
                        "date"=>1990),
                2=>array("code"=>"php",
                        "date"=>1994),
                3=>array("code"=>"js",
                        "date"=>1995)

        );
        //itération
        print "<ul>";
        foreach($table_assoc as $key =>$index){
            // print "<pre>";
            // print_r($table_assoc);
            // print "</pre>";
           //print $key;
            foreach($index as $key_1 => $value){
                echo "<li>".$key_1." : ".$value."</li>\n";
            }
        }
        print "</ul>";
        ?>


    </main>




<footer>
    <p>&copy; - PHP - <?php print date('Y') ?></p>
</footer>
<script>
    let table_assoc = [
                    {
                        code: "html",
                        date: 1990

                    },
                    {
                        code: "Javascript",
                        date: 1995
                    }
    ]
    console.table(table_assoc)
</script>
</body>
</html>