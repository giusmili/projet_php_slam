
    <main>
        <section>
            <h2>Nous sommes le <?php print $date ?></h2>
            <?php
               echo "<p>Votre navigateur est ".$prop_navigator."<br>\n
                    Adresse ip : ", $addr_ip."<br>\n Nous contacter : "
                    .$admin."<br> <strong>Serveur : </strong> </p>\n".$signature;
            ?>
            <!--<p>
                <?php
                    //echo $string."<br>";
                    //var_dump($prop_navigator);
                   //print $off;

                ?>
            </p>-->
        </section>
    </main>