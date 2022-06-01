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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>

<!-- header section starts  -->

<header class="header">
    <a href="../view/home.php" class="logo"> <i class="fa fa-heartbeat" aria-hidden="true"></i> Omnes Santé </a>
    
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
        <a href="../view/home.php#home">accueil</a>
        <a href="../view/home.php#packages">tout parcourir</a>
        <?php if(isset($_SESSION["IS_ADMIN"])) { if($_SESSION["IS_ADMIN"] === "1") {?>
        <a href="#" style="color: #42c43b;">dashboard</a>
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
        <img src="../public/images/home-img-2.svg" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3>Prendre rendez-vous..</h3>
        <p>
            la plateforme Omnes Santé vous propose de prendre rendez-vous avec des spécialistes de la santé.
            suivez les démarches et réservez un crénau facilement en moins d'une minute!
        </p>
        <a href="#services" class="btn">Les étapes</a>
    </div>

</section>

<!-- home section ends -->


<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> les <span>étapes</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <span>01</span>
            <i class="fa fa-globe" aria-hidden="true"></i>
            <h3>Se connecter</h3>
            <p>Se connecter avec son compte et toute ses informations préenregistrées</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>02</span>
            <i class="fa-solid fa-user-doctor"></i>
            <h3>le problème</h3>
            <p>Choisir le type de spécialistes le plus adapté à la situation</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>03</span>
            <i class="fa-solid fa-id-card-clip"></i>
            <h3>le docteur</h3>
            <p>séléctionner un spécialiste parmis ceux proposés. Leurs CV sont consultables!</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>04</span>
            <i class="fa-solid fa-calendar-check"></i>
            <h3>prendre rendez-vous</h3>
            <p>prenez votre rendez-vous en fonctions de vos disponibilités et celles du docteur</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>05</span>
            <i class="fa-solid fa-credit-card"></i>
            <h3>le payment</h3>
            <p>réglez en ligne et obtenez un remboursement facile via votre carte vitale</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <span>06</span>
            <i class="fa-solid fa-address-card"></i>
            <h3>le dossier</h3>
            <p>si vous désirez consulter votre dossier médicale, il est disponible en ligne! </p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> doctor's <span>review</span> </h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="../public/images/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
            </div>

            <div class="swiper-slide slide">
                <img src="../public/images/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
            </div>

            <div class="swiper-slide slide">
                <img src="../public/images/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
            </div>

            <div class="swiper-slide slide">
                <img src="../public/images/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- review section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> Drs. <span><?php echo $doctype . "s" ?></span> </h1>

    <div class="box-container">

        <?php while ($line = $res -> fetch()) { ?>
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="<?php echo $line['photopath'] ?>" alt="">
                <h3>
                    <?php if ($line["dispo"] === "1" ) { ?>
                        <i class="fa-solid fa-check" style="color: #42c43b;"></i>
                    <?php } else { ?>
                        <i class="fa-solid fa-xmark" style="color: #de5533;"></i>
                    <?php } ?>
                    <?php echo "Dr." . $line["lname"] . " " . $line["fname"] ?> 
                </h3>
            </div>
            <div class="content">
                <p><?php echo "Bonjour je suis docteur " . $line["speciality"] . ", n'hésitez pas à me contatcer sur le chat ou au " . $line["tel"] . "!" ?></p>
                <form action="" method="post"> <!-- TO DO -->
                    <input name="doctype" type="text" value="Generaliste" style="display: none;">
                    <input type="submit" value="voir le CV" class="btn">
                </form>
                <form action="../view/reserve.php" method="post">
                    <input name="doctype" type="text" value="<?php echo  $doctype ?>" style="display: none;">
                    <input name="docid" type="text" value="<?php echo  $line["userid"] ?>" style="display: none;">
                    <input name="docname" type="text" value="<?php echo "Dr." . $line["lname"] . " " . $line["fname"] ?>" style="display: none;">
                    <input type="submit" value="consulter" class="btn">
                </form>
            </div>
        </div>
        <?php } ?>

</section>

<!-- packages section ends -->

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



<script src="https://kit.fontawesome.com/60b8c52223.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- custom js file link  -->
<script src="../public/js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

<script>

    config = {
        /*basic param*/
        enableTime: true,
        time_24hr: true,
        minDate: "today",
        /*display date time param*/
        dateFormat: "Y-m-d H:i",
        altInput: true,
        altFormat: "F j, Y (H:i)",
        /*selection param*/
        defaultHour: 08,
        minuteIncrement: 30,
        /*disabled dates*/
        disable: ["2022-05-30","2022-05-31", "2022-06-21", "2022-06-08", new Date(2025, 4, 9) ],
    }

    flatpickr("#datetime-rdv", config);

</script>

</body>
</html>