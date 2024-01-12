<?php 
class Login{
        static function connect(){
            
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
        }
    }
