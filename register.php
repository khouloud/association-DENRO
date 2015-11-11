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

    <div class="nav-nav">
        <div id="logo"><img id="logo2" src="images/logo.png" alt="logo DENRO"/>
        </div>


        <nav id="nav">
            <ul>
                <li><a href="#header">Accueil</a>
                </li>
                <li><a href="#about">A propos</a>
                </li>
                <li><a href="#work">Actualite</a>
                </li>
                <li><a href="#contact">Contact</a>
                </li>
                <li><a href="don.php">Faire un Don</a>
                </li>

            </ul>

        </nav>

    </div>


</header>

<!--    formulaire inscription-->

<form method="post" action="doRegister.php">

    <h3>Create New Account</h3>

    <input type="text" class="contentformulaire titreformulaire" placeholder="First Name" name="fistname"
           required="required">

    <input type="text" class="contentformulaire titreformulaire" placeholder="Last Name" name="lastname"
           required="required">

    <input type="text" class="contentformulaire" placeholder="Email" name="email" required="required">

    <input id="password" class="contentformulaire" type="password" name="pwd" placeholder="Password"
           required="required">

    <input class="contentformulaire" id="createAccount" type="submit" value="Create new account" required="required">

    <span>or<a id="returnStore" href="index.php"> Return to Store</a></span>

</form>


<!--        ///////////////////////////-->



<!-- Footer-->
<footer id="footer">
    <ul class="lists">
        <li><a href="#"><span class="label">Twitter</span></a></li>
        <li><a href="#"><span class="label">Facebook</span></a></li>
        <li><a href="#"><span class="label">Instagram</span></a></li>
        <li><a href="#"><span class="label">Dribbble</span></a></li>
        <li><a href="#"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
        <li>&copy; Untitled</li>
        <li>Design: <a href="">KHOULOUD</a></li>
    </ul>
</footer>
<!-- end Footer-->
</body>

</html>