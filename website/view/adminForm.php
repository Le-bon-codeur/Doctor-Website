<?php
try {
    // action : add, del  // subject : doc, user, labo
    
} catch (Exception $e) {
    $_SESSION["ERROR"] = $e->getMessage();
    header('Location: ../view/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnes Santé</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">


</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap');

        :root {
            --orange: #537ED7;
            --text-color-1: #444;
            --text-color-2: #666;
            --bg-color-1: #fff;
            --bg-color-2: #eee;
            --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            /*transition:all .2s linear;*/
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 7rem;
            scroll-behavior: smooth;
        }

        html::-webkit-scrollbar {
            width: .8rem;
        }

        html::-webkit-scrollbar-track {
            background: transparent;
        }

        html::-webkit-scrollbar-thumb {
            background: var(--orange);
            border-radius: 5rem;
        }

        body {
            background: var(--bg-color-2);
        }

        body.active {
            --text-color-1: #fff;
            --text-color-2: #eee;
            --bg-color-1: #333;
            --bg-color-2: #222;
            --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .4);
        }

        #blob {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }

        #back-home {
            position: absolute;
            top: 2.5rem;
            left: 2.5rem;
            width: 5rem;
            height: 5rem;
        }

        #back-home button {
            width: 5rem;
            height: 5rem;
            color: #537ED7;
            border-radius: .5rem;
            transition: all .3s linear;
        }

        #back-home button:hover {
            color: #eee;
            background-color: #537ED7;
        }

        #back-home button i {
            transform: scale(1.8);
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section {
            padding: 2rem 7%;
        }

        .heading {
            text-align: center;
            padding-bottom: 2rem;
            color: var(--text-color-1);
            font-size: 4rem;
        }

        .heading span {
            position: relative;
            z-index: 0;
        }

        .heading span::before {
            content: '';
            position: absolute;
            bottom: 1rem;
            left: 0;
            z-index: -1;
            background: var(--orange);
            height: 100%;
            width: 100%;
            clip-path: polygon(0 90%, 100% 83%, 100% 100%, 0% 100%);
        }

        .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: .8rem 3rem;
            font-size: 1.7rem;
            color: #fff;
            background: var(--orange);
            border-radius: .5rem;
            cursor: pointer;
            transition: all .2s linear;
        }

        .btn:hover {
            letter-spacing: .2rem;
        }

        .contact form {
            width: 70rem;
            /*max-width: 70rem;*/
            margin: 0 auto;
            text-align: center;
        }

        .contact form .inputBox {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact form textarea,
        .contact form .inputBox input,
        #doctors-selection {
            width: 100%;
            padding: 1rem;
            font-size: 1.6rem;
            color: var(--text-color-1);
            margin: .7rem 0;
            background: var(--bg-color-1);
            box-shadow: var(--box-shadow);
            text-transform: none;
            border-radius: .5rem;
        }

        .contact form textarea {
            height: 20rem;
            resize: none;
        }

        .contact form .inputBox input {
            width: 49%;
        }

        @media screen and (max-width: 700px) {
            .contact form {
                width: 100%;
            }
        }
    </style>

    <form id="back-home" action="../view/admin.php" method="post">
        <button type="submit"><i class="fa-solid fa-backward-step"></i></button>
    </form>

    <img id="blob" src="../public/images/wave.svg" alt="svg shape">

    <div class="container">
        <section class="contact" id="contact">

            <?php if($action === "del") { ?>
                <h1 class="heading"> <span>Supprimer</span> un <?php echo $UserType ?> </h1>
            <?php } else if($action === "add") { ?>
                <h1 class="heading"> <span>Ajouter</span> un <?php echo $UserType ?> </h1>
            <?php } ?>

            <form action="../controller/modifyDbController.php" method="post" data-aos="zoom">

                <?php if($action === "add") { ?>

                    <?php if($subject === "user" ||  $subject === "doc") { ?>
                        <div class="inputBox">
                            <input name="fname" type="text" placeholder="prénom" data-aos="fade-up" maxlength="40" required>
                            <input name="lname" type="text" placeholder="nom" data-aos="fade-up" maxlength="40" required>
                        </div>

                        <div class="inputBox">
                            <input name="number" type="number" placeholder="numéro" data-aos="fade-up" maxlength="15" required>
                            <input name="email" type="email" placeholder="email" data-aos="fade-up" maxlength="50" required>
                        </div>

                        <?php if($subject === "user") { ?>
                            <div class="inputBox">
                                <input name="socialno" type="number" placeholder="numéro sécu sociale" data-aos="fade-up" maxlength="13" required>
                                <input name="address" type="text" placeholder="adresse" data-aos="fade-up" maxlength="50" required>
                            </div>
                        <?php } ?>

                        <?php if($subject === "doc") { ?>
                            <div class="inputBox">
                                <input name="speciality" type="text" placeholder="spécialitée" data-aos="fade-up" maxlength="40" required>
                                <input name="room" type="text" placeholder="bureau" data-aos="fade-up" maxlength="10" required>
                            </div>
                        <?php } ?>

                        <div class="inputBox">
                            <input name="dob" id="datetime" placeholder="date de naissance" required>
                        </div>
                    <?php } else if($subject === "labo") { ?>
                        <div class="inputBox">
                            <input name="type" type="text" placeholder="type de laboratoire" data-aos="fade-up" maxlength="40" required>
                            <input name="room" type="text" placeholder="numéro de salle" data-aos="fade-up" maxlength="10" required>
                        </div>
                    <?php } ?>
                    <input name="action" type="text" value="<?php echo $action ?>" style="display: none;">
                    <input name="subject" type="text" value="<?php echo $subject ?>" style="display: none;">
                    <input type="submit" value="Ajouter" class="btn">

                <?php } else if($action === "del") { ?>

                    <div class="inputBox">
                        <select id="doctors-selection" name="elem" required>
                            <option disabled selected>sélection</option>
                            <?php while ($line = $UserArray -> fetch()) {
                                if($subject === "doc") {
                                    echo "<option>" . $line['fname'] . " " . $line['lname'] . "</option>";
                                } else if($subject === "user") {
                                    echo "<option>" . $line['fname'] . " " . $line['lname'] . "</option>";
                                } else if($subject === "labo") {
                                    echo "<option>Labo " . $line['type'] . " - id: " . $line['laboid'] . "</option>";
                                }
                            } ?>
                            
                        </select>
                    </div>
                    <input name="action" type="text" value="<?php echo $action ?>" style="display: none;">
                    <input name="subject" type="text" value="<?php echo $subject ?>" style="display: none;">
                    <input type="submit" value="Supprimer" class="btn">

                <?php } ?>

            </form>

        </section>
    </div>

    <script src="https://kit.fontawesome.com/60b8c52223.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- custom js file link  -->
    <script>
        config = {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        }
        flatpickr("#datetime", config);
    </script>
</body>

</html>