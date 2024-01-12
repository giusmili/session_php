<?php
    session_start();
    $_id_session = session_id();
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
        <section>
            <h2>
                Connectez-vous
            </h2>
        
        <fieldset>
            <legend>
                Votre espace membre
            </legend>
            <form class="form_add" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            <label for="login">
                Votre login
            </label>
            <input 
                type="email"
                name="login"
                placeholder="Votre login"
                aria-required="true"
                >
            <input type="submit" value="send">
            </form>
        </fieldset>
    </section>
    <?php
     $_id_session ? print "<em class=\"mark_id\">ID de session récupérer via session_id()<br>" .$_id_session. "<br></em>" : false;
    //connexion user
    if(isset($_POST['login']) && isset($_COOKIE['PHPSESSID'])){
        $_login = $_POST['login'];
        if(!$_login){
            print "<section><p>Remplir les champs</p></section>";
        }
        else{
            $_SESSION["nom"] = $_login;
            print "<section><p class=\"button-success-color\">Bonjour : ".$_SESSION["nom"]."</p></section>";
            print "<section><p><a href=\"session_user.php\" class=\"button-success button-success-color\">Vos infos</a></p></section>";
            // afficher la section récupérée
            echo '<section><p class="mark_id">ID de session récuperé via $_COOKIE : <br>'.$_COOKIE["PHPSESSID"].'</p></section>';
        }
    }

    ?>
    </main>
</body>
</html>