<?php
ob_start();
//var_dump($_POST);
session_start();
//include du header
//include 'form_contact_validation.php';
define('PINSCRI', 'inscri');
define('PNOM', 'nom');
define('PEMAIL', 'email');
define('PASS', 'mdp');
require_once 'form_contact_validation.php';
include 'formcontact.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <title>Association Denro</title>

    <!-- link style css -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Js -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/smooth_scroll.js"></script>
    <script src="js/map.js"></script>
    <script src="js/formulaire.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?AIzaSyDA4KnALkrt2vsBlyOh9xO_te8a-kCPodc"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>

<!--home-->
<section id="home">

    <!-- header navigation -->
    <header id="header">
        <div id="barreHeader"></div>
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
                    <li><a href="login.php">Faire un Don</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="slider">
        <ul>
            <li><img class="size" src="images/fond/slider1.jpg" alt=""/></li>
            <li><img class="size" src="images/fond/slider2.jpg" alt=""/></li>
            <li><img class="size" src="images/fond/slider3.jpg" alt=""/></li>
            <li><img class="size" src="images/fond/slider4.jpg" alt=""/></li>
            <li><img class="size" src="images/fond/slider5.jpg" alt=""/></li>
            <!--<li><img class="size" src="images/fond/slider6.jpg" alt=""/></li>-->
        </ul>
    </div>
    <!-- end header navigation -->


</section>
<!--end home-->

<!-- about Section -->
<section id="about">
    <!-- scolarité-->


    <div class="main-col">


        <div class="row">

            <div class="col-sm-10 ">
                <h3>Qui Somme Nous?</h3>

                <p>
                    L'association Denro, créée le 29 janvier 2012 à Koudougou, Burkina Faso, est une
                    organisation apolitique
                    et à but non lucratif qui s'appuie sur un partenariat fort entre le Burkina Faso, la
                    France et le Québec.
                    Fondée par monsieur Romuald Yaméogo, joueur professionnel et entraîneur de football
                    reconnu dans la ville de Koudougou,
                    mais également en France et au Québec, l’association a su développer des partenariats
                    solides avec des professionnels
                    français et canadiens impliqués dans les domaines de l’éducation, de l’intervention
                    sociale et de la coopération internationale.
                    Ces partenaires sont aujourd’hui membres de l’Association DENRO.

                </p>
            </div>


            <div class="col-sm-10">
                <h3>Notre Mission</h3>

                <p>
                    L'association a pour visée sociale la promotion de l'éducation de la jeunesse défavorisée du Burkina
                    Faso au travers l'éducation formelle,
                    le sport et l'apprentissage d'un métier en vue d’une meilleure insertion de ces jeunes dans la
                    société
                    et le marché du travail burkinabé.
                    Le projet Boomerang par le sport, axé sur la mise en place d’une école sport-études à Koudougou, est
                    aujourd’hui le projet-pivot
                    de l’Association DENRO pour l’accomplissement de sa mission.
                </p>
            </div>
            <div class="col-sm-10 ">
            <h3>Fondateurs</h3>

            <ul id="person">
                <li>
                    <figure>
                        <img src="images/equipe/p1.png" alt="" />
                        <figcaption>Romuald Yaméogo</figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/equipe/p2.png" alt="" />
                        <figcaption>Julien Tougouri </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/equipe/p3.png" alt="" />
                        <figcaption>Paul Lavoie</figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/equipe/p4.png" alt="" />
                        <figcaption>Denise Fernandez </figcaption>
                    </figure>
                </li>
            </ul>
</div>
</div>
        </div>


    </div>

<!--zbouuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuub-->
    <!-- item end -->
    <!-- main-col end -->
    <!-- End Education -->

    <!--  Skills -->


    <!-- End skills -->
</section>

<!-- Work section -->
<section id="work">
    <div class="row work">

        <div class="header-col">
            <h1><span>Actualite</span></h1>
        </div>


        <div class=" main-col">

            <ul class="works-container triggerAnimation animated" data-animate="bounceIn">

                <li class="work-post identity">

                    <img alt="1ère Rentrée Scolaire" src="images/upload/work1.jpg">
                    <a href="scolaire.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>1ère Rentrée Scolaire</h2>
                                <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post web-design web-development">
                    <img alt="" src="images/upload/work2.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>L'école se construit</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post graphic-design">
                    <img alt="" src="images/upload/work3.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Pose 1ère pierre</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post web-design">
                    <img alt="" src="images/upload/work4.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>les équipes de foot</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post identity">
                    <img alt="" src="images/upload/work5.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Démarches du printemps<br>en France</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post graphic-design">
                    <img alt="" src="images/upload/work6.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Départ du 1er camion</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post web-development">
                    <img alt="" src="images/upload/work7.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Les soutiens se multiplient<br> en France</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post identity web-design">
                    <img alt="" src="images/upload/work8.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Rencontre fructueuse avec<br>François Loncle</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post identity web-design">
                    <img alt="" src="images/upload/work9.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Assemblée générale annuelle</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

                <li class="work-post identity web-design">
                    <img alt="" src="images/upload/work10.jpg">
                    <a href="project-single.html" class="hover-box">
                        <div class="inner-hover">
                            <h2>Studio du Lac</h2>
                            <span>Detail</span>
                        </div>
                    </a>
                </li>

            </ul>

        </div>
    </div>

    <!-- End Work section -->

</section>

<!-- Contact section -->
<section id="contact">

    <div class="row contact">

        <div class="header-col">
            <h1><span>Contact</span></h1>
        </div>
        <!-- Formulaire-->
        <div class="contact-container">

            <div class="form-wrapper">
                <form>
                    <div class="form-item">
                        <label for="name"></label>
                        <input id="name" name="name" placeholder="Nom" required="required" class="form-control input-lg requiredField" type="text" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                        <?php echo "<p class='text-danger'>$Name</p>";?>
                    </div>
                    <div class="form-item">
                        <label for="email"></label>
                        <input id="email" name="email" placeholder="Email" required="required" class="form-control input-lg requiredField" type="email"  value="<?php echo isset($_POST['email']) ? $_POST['email']:''; ?>">
                        <?php echo "<p class='text-danger'>$Email</p>";?>
                    </div>
                    <div class="form-item">
                        <label for="Message"></label>
                        <textarea id="message" name="message"  placeholder="message" required="required" class="form-control input-lg requiredField" rows="6"><?php echo isset($_POST['message']) ? $_POST['message']:'';?></textarea>
                        <?php echo "<p class='text-danger'>$Message</p>";?>
                    </div>
                    <div class="button-panel">
                        <input type="submit" class="button" title="Envoyez" value="Envoyez">
                    </div>
                </form>
            </div>

            <!-- Google Map-->
            <div id="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2795.4817636847333!2d-73.56964574868773!3d45.5205099954886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sca!4v1440010239923"
                        frameborder="0" style="border:0" allowfullscreen></iframe>


            </div>

        </div>
    </div>

</section>
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


<!-- Scrolltotop-->

<a href="#home" class="scrollToTop"><i class="fa fa-chevron-up"></i>
</a>
<!-- EndScrolltotop-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script>
<script src="js/vertical.news.slider.js"></script>
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-1965499-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>

</html>