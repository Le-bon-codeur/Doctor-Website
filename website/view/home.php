<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnes Santé</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>

<!-- header section starts  -->

<header class="header">
    <a href="./home.php" class="logo"> <i class="fa fa-heartbeat" aria-hidden="true"></i> Omnes Santé </a>
    
    <form action="" class="search-form" id="searchbar">
        <input type="search" name="" placeholder="votre recherche..." id="searchBox">
        <label for="searchBox" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-moon" id="theme-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <nav class="navbar">
        <a href="#home">accueil</a>
        <a href="#packages">tout parcourir</a>
        <a href="#services">infos utiles</a>
        <a href="#blogs">les actus</a>
        <a href="#contact">nous contacter</a>
        <?php if(isset($_SESSION["IS_ADMIN"])) { if($_SESSION["IS_ADMIN"] === "1") {?>
        <a href="../view/admin.php" style="color: #42c43b;">dashboard</a>
        <?php }} ?> 
    </nav>

    <?php if(!isset($_SESSION["LOGGED_USER"])) { ?>
    <form action="../controller/loginController.php" class="login-form" method="post">
        <div class="inputBox">
            <span>nom d'utilisateur</span>
            <input name="name" type="text" placeholder="entrez votre nom d'utilisateur" required>
        </div>
        <div class="inputBox">
            <span>mot de passe</span>
            <input name="pw" type="password" placeholder="entrez votre mot de passe" required>
        </div>
        <?php if(isset($_SESSION["ERROR"])) { ?>
        <div class="remember">
            <label for="login-remember"><span style="color: #de5533;">erreur: </span><?php echo $_SESSION["ERROR"] ?></label>
        </div>
        <?php } ?>
        <input type="submit" class="btn" value="connexion">
        <div class="noAcc">
            <label for=""><a href="#footer" style="color: #537ED7;">Je n'ai pas de compte!</a></label>
        </div>
    </form>
    <?php } else { ?>
    <form action="../controller/unlogController.php" class="login-form" method="post">
        <div class="inputBox">
            <span>Connecté: <span style="color: #42c43b;"><?php echo $_SESSION["LOGGED_USER"] ?></span></span>
        </div>
        <input name="profile" type="submit" class="btn" value="mon profil" style="text-align: center;">
        <input name="disconnect" type="submit" class="btn" value="déconnexion" style="text-align: center;">
    </form>
    <?php } ?> 

  </header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image" data-aos="fade-down">
        <img src="../public/images/home-img.svg" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3>Stay Safe, Stay Healthy</h3>
        <p>
            Omnes Santé est une plateforme de prise de rendez-vous en ligne. Trouvez votre spécialiste,
            regardez ses disponibilité et contactez le! Tout simplement...
        </p>
        <a href="#services" class="btn">Mais encore...</a>
    </div>

</section>

<!-- home section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> nos <span>services</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-1.jpg" alt="">
                <h3> Généraliste </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Generaliste" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-2.jpg" alt="">
                <h3> Addictologie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Addictologie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-3.jpg" alt="">
                <h3> Andrologie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Andrologie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-4.jpg" alt="">
                <h3> Cardiologie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Cardiologie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-5.jpg" alt="">
                <h3> Dermatologie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Dermatologie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-6.jpg" alt="">
                <h3> Gastro-Hépato-Entérologie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Gastro-Hepato-Entérologie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-7.jpg" alt="">
                <h3> Gynécologie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Gynecologie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-8.jpg" alt="">
                <h3> I.S.T. </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="I.S.T." style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doc-9.jpg" alt="">
                <h3> Ostéopathie </h3>
            </div>
            <div class="content">
                <?php if(isset($_SESSION["LOGGED_USER"])) { ?>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                    <form action="../controller/consultationController.php" method="post">
                        <input name="doctype" type="text" value="Osteopathie" style="display: none;">
                        <input type="submit" value="voir plus" class="btn">
                    </form>
                <?php } else { ?>
                    <p><span style="color: #537ED7;">Connectez vous</span> pour pouvoir voir nos spécialistes et prendre rendez-vous!</p>
                    <input type="submit" value="voir plus" class="btn" disabled>
                <?php } ?>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"><span> informations </span> utiles </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fa fa-ambulance" aria-hidden="true"></i>
            <h3>Locaux parfaits</h3>
            <p>Nos locaux sont modernes et très bien équipés. Situées au centre de paris!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>02</span>
            <i class="fa fa-blind" aria-hidden="true"></i>
            <h3>Acces simple</h3>
            <p>nos locaux sont facilement accessible de tout l'ile de france.</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>03</span>
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <h3>medecins qualifiés</h3>
            <p>Nos docteurs sont durement séléctionnez pour vous offrir les meilleurs soins!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>04</span>
            <i class="fa fa-id-card" aria-hidden="true"></i>
            <h3>suivit personnel</h3>
            <p>votre compte avec tout votre historique est facilement accessible en ligne!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>05</span>
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <h3>les rendez-vous</h3>
            <p>trouver le spécialiste qu'il vous faut n'as jamais été aussi simple!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>06</span>
            <i class="fa fa-globe" aria-hidden="true"></i>
            <h3>payment en ligne</h3>
            <p>Toutes vos consultations réglables en ligne avec votre carte vitale reliée </p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- blog section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> les <span>actus</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/blog-1.svg" alt="">
            </div>
            <div class="content">
                <h3>le covid, un simple virus passagé ?</h3>
                <a href="#" class="btn">lire plus</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jun, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by m@teo21 </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/blog-2.svg" alt="">
            </div>
            <div class="content">
                <h3>bonnes et mauvaises pratiques au quotidien..</h3>
                <a href="#" class="btn">lire plus</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jun, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by m@teo21 </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/blog-3.svg" alt="">
            </div>
            <div class="content">
                <h3>que faire de nos vieux médicaments ?</h3>
                <a href="#" class="btn">lire plus</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jun, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by m@teo21 </a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- blog section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contactez</span> nous </h1>

    <form action="../controller/contactController.php" method="post" data-aos="zoom">

        <div class="inputBox">
            <input name="name" type="text" placeholder="nom" data-aos="fade-up" maxlength="40" required>
            <input name="email" type="email" placeholder="email" data-aos="fade-up" maxlength="50" required>
        </div>

        <div class="inputBox">
            <input name="number"  type="number" placeholder="numéro" data-aos="fade-up" maxlength="15" required>
            <input name="subject"  type="text" placeholder="sujet" data-aos="fade-up" maxlength="60" required>
        </div>

        <textarea name="message" placeholder="votre message" id="" cols="30" rows="10" data-aos="fade-up" required></textarea>
        
        <input type="submit" value="envoyer" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <h3>nos locaux</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Paris </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> London </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>accès rapide</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> Accueil </a>
            <a href="#packages"> <i class="fas fa-chevron-right"></i> Tout Parcourir </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Rendez-vous </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Votre Compte </a>
            <a href="#contact"> <i class="fas fa-chevron-right"></i> Nous contacter </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> Les Actus </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>nous contacter</h3>
            <a href="#"> <i class="fas fa-phone"></i> +01 39 57 87 99 </a>
            <a href="#"> <i class="fas fa-phone"></i> +33 7 88 19 45 17 </a>
            <a href="#"> <i class="fa fa-paper-plane" aria-hidden="true"></i> omnessante@edu.ece.fr </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france, paris - 75015 </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>nos résaux</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> réalisé pour <span>l'ECE Paris</span> | tous droits réservés </div>

</section>

<!-- footer section ends -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../public/js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>