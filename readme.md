# 🔥 Comment mettre en place des sessions
![logo](asset/344.jpg)
> Une session peut s'apparenter à un conteneur incluant les actions effectuées par un utilisateur sur votre site. Un même utilisateur peut entamer plusieurs sessions. Ces sessions peuvent se produire le jour même, ou sur plusieurs jours, semaines ou mois.

> Exemple : 
```php
    $_SESSION["first_name"] = "Ledorf";
    $_SESSION["last_name"] = "Rasmus";
    $_SESSION["heure"] = date("d/m/Y/h:i");
    //défition de ce que la session va contenir
```