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
        <?= $_new_user->_title ?>
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
            <h2>
                Testons la session
            </h2>
                <p>
                    <!-- Variables session activées.  -->
                <?php
                    $_SESSION["first_name"] = "Ledorf";
                    $_SESSION["last_name"] = "Rasmus";
                    $_SESSION["heure"] = date("d/m/Y");
                    print "<br>Bonjour ".$_SESSION["last_name"]."<br>" ;
                    print "dernière connexion le : ".$_SESSION["heure"]."<br> 
                    valeur de la session : ".$_COOKIE['PHPSESSID'];
                ?>
                </p>
             
        </section>
    </main>
        <?php
            session_unset();
            session_destroy();
        ?>
    </body>
    <script>
        const first_name = "Tom";
        //sessionStorage
        let user = localStorage.setItem("User", first_name)
        JSON.parse(user)
    </script>
</html>
