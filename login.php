<?php
/**
 * Created by PhpStorm.
 * User: obouach
 * Date: 10/11/2015
 * Time: 22:49
 */
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0" >
    <title>Association Denro</title>


    <!-- link style css -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css" type="text/css">

    <!-- Js -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/smooth_scroll.js"></script>
    <script src="js/map.js"></script>
    <script src="js/formulaire.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?AIzaSyDA4KnALkrt2vsBlyOh9xO_te8a-kCPodc">


    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>
<!--    formulaire inscription-->
    <div class="les2">
        <div class="formulaireLogin">
            <h2>Nouveau Client ?</h2>

            <h4>Créer Un Nouveau Compte</h4>
            <a id="register" href="register.php">Register</a>
        </div>
        <div class="formulaireLogin" id="connexion">
            <h2>Déjà Enregistré ?</h2>
            <h4>Commencez Une Nouvelle Session</h4>

            <form method="post" action="connexion.php">
                <input class="champinput" id="login" type="text" name="login" placeholder="Email" required="required" <br>
                <input class="champinput" id="password" type="password" name="password" placeholder="Password"
                       required="required">
                <input id="signin" type="submit" value="Sign In">
            </form>
        </div>
    </div>



</body>

</html>