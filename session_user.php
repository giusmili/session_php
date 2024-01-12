<?php
    // start session
    session_start();
?>
<?php
    include_once "./src/header.inc.php";
?>

<body>
    <header>
        <h1>
            Welcome <small><?= $_SESSION["nom"]?></small>
        </h1>
    </header>
    <main>
        <figure>
            <img src="./asset/344.jpg" alt="Hello">
            <figcaption>
                <h2>Hello</h2>
            </figcaption>
        </figure>
        <section>
          
                <p>
                    <!-- Variables session activées.  -->
                <?php
                   echo "Hello vous êtes : ".$_SESSION["nom"]." nous somme le "
                   .date("d/m/Y")."<br>".$_COOKIE['PHPSESSID'];
                ?>
                </p>
             
        </section>
    </main>
        <?php
            session_unset();
            session_destroy();
        ?>
    </body>
 
</html>
