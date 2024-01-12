<?php
    # démarrage de la session
    session_start();
    $_id_session = session_id();
?>

<?php
    include_once __DIR__."/src/header.inc.php";
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
    
    require_once __DIR__ . "/src/controllerLogin.inc.php";
    # appel de la class Login
    Login::connect();

    ?>
    </main>
</body>
</html>