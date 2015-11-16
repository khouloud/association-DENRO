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
    <link rel="stylesheet" href="css/register.css" type="text/css">
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
<!--section home-->


<!-- Header navigation -->

<header id="header">

</header>

<!--    formulaire inscription-->

<form method="post" action="doRegister.php">

    <h3>Créer Un Nouveau Compte</h3>

    <input type="text" class="contentformulaire titreformulaire" placeholder="Prénom" name="fistname"
           required="required">

    <input type="text" class="contentformulaire titreformulaire" placeholder="Nom" name="lastname"
           required="required">

    <input type="text" class="contentformulaire" placeholder="Email" name="email" required="required">

    <input id="password" class="contentformulaire" type="password" name="pwd" placeholder="Mot De Passe"
           required="required">

    <input class="contentformulaire" id="createAccount" type="submit" value="Create new account" required="required">

    <span>or<a id="returnStore" href="index.php"> Return to Store</a></span>

</form>

</body>

</html>