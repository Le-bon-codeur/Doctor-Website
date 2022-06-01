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

<style>
    #wavy{
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: -1;
    }
</style>

<img id="wavy" src="../public/images/wave2.svg" alt="">

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

<div class="spacer" style="width: 100%; height: 100px; background: transparent;"></div>

<div class="container">
<section class="blogs" id="blogs">

    <h1 class="heading"> les <span>actions</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/user.svg" alt="">
            </div>
            <div class="content">
                <h3>gestion des utilisateurs</h3>
                <a href="../controller/adminController.php?action=add&subject=user" class="btn"><pre> ajouter </pre></a>
                <a href="../controller/adminController.php?action=del&subject=user" class="btn">supprimer</a>
                <div class="icons">
                    <a href="#blogs"> <i class="fa-solid fa-triangle-exclamation"></i> la suppression est irréversible. </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/doctor.svg" alt="">
            </div>
            <div class="content">
                <h3>gestion des docteurs</h3>
                <a href="../controller/adminController.php?action=add&subject=doc" class="btn"><pre> ajouter </pre></a>
                <a href="../controller/adminController.php?action=del&subject=doc" class="btn">supprimer</a>
                <div class="icons">
                    <a href="#blogs"> <i class="fa-solid fa-triangle-exclamation"></i> la suppression est irréversible. </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/labo.svg" alt="">
            </div>
            <div class="content">
                <h3>gestion des laboratoires</h3>
                <a href="../controller/adminController.php?action=add&subject=labo" class="btn"><pre> ajouter </pre></a>
                <a href="../controller/adminController.php?action=del&subject=labo" class="btn">supprimer</a>
                <div class="icons">
                    <a href="#blogs"> <i class="fa-solid fa-triangle-exclamation"></i> la suppression est irréversible. </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="../public/images/data-visualize.svg" alt="">
            </div>
            <div class="content">
                <h3>Visualiser les données</h3>
                <a href="../controller/adminController.php?action=show&subject=activity" class="btn">aller voir</a>
                <div class="icons">
                    <a href="#blogs"> <i class="fa-solid fa-network-wired"></i> visualisation du traffic </a>
                </div>
            </div>
        </div>

    </div>

</section>
</div>

<div class="spacer" style="width: 100%; height: 100px; background: transparent;"></div>
<script src="https://kit.fontawesome.com/60b8c52223.js" crossorigin="anonymous"></script>
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