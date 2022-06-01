<?php
session_start();
require '../model/modelRes.php';
try
{
    $docname = $_POST['docname'];
    $doctype = $_POST['doctype'];
    $docid = $_POST['docid'];
    $horaires_tmp = array("09:30:00","10:00:00","10:30:00","11:00:00","11:30:00","12:00:00","12:30:00","13:00:00","13:30:00","14:00:00","14:30:00","15:00:00","15:30:00","16:00:00","16:30:00","17:00:00","17:30:00","18:00:00");
    if(isset($_COOKIE['dateStr'])) {
        $datime = $_COOKIE['dateStr'];
        $h = getResTimes($datime, $docid);
        $horaires_reserved = array();
        while($line = $h -> fetch()) {
            array_push($horaires_reserved, $line['ctime']);
        }
        $horaires = array_diff($horaires_tmp, $horaires_reserved);
    }
}
catch(Exception $e)
{
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

    :root{
        --orange:#537ED7;
        --text-color-1:#444;
        --text-color-2:#666;
        --bg-color-1:#fff;
        --bg-color-2:#eee;
        --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    }

    *{
        font-family: 'Poppins', sans-serif;
        margin:0; padding:0;
        box-sizing: border-box;
        outline: none; border:none;
        text-decoration: none;
        text-transform: capitalize;
        /*transition:all .2s linear;*/
    }

    html{
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-padding-top: 7rem;
        scroll-behavior: smooth;
    }

    html::-webkit-scrollbar{
        width:.8rem;
    }

    html::-webkit-scrollbar-track{
        background:transparent;
    }

    html::-webkit-scrollbar-thumb{
        background:var(--orange);
        border-radius: 5rem;
    }

    body{
        background:var(--bg-color-2);
    }

    body.active{
        --text-color-1:#fff;
        --text-color-2:#eee;
        --bg-color-1:#333;
        --bg-color-2:#222;
        --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.4);
    }

    #blob {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: -1;
    }

    #back-home{
        position: absolute;
        top:2.5rem; left:2.5rem;
        width: 5rem;
        height: 5rem;
    }

    #back-home button {
        width: 5rem;
        height: 5rem;
        color: #537ED7;
        border-radius: .5rem;
        transition:all .3s linear;
    }

    #back-home button:hover {
        color: #eee;
        background-color: #537ED7;
    }

    #back-home button i {
        transform: scale(1.8);
    }

    .container{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section{
        padding:2rem 7%;
    }

    .heading{
        text-align: center;
        padding-bottom: 2rem;
        color:var(--text-color-1);
        font-size: 4rem;
    }

    .heading span{
        position: relative;
        z-index: 0;
    }

    .heading span::before{
        content: '';
        position: absolute;
        bottom: 1rem; left: 0;
        z-index: -1;
        background: var(--orange);
        height: 100%;
        width: 100%;
        clip-path: polygon(0 90%, 100% 83%, 100% 100%, 0% 100%);
    }

    .btn{
        margin-top: 1rem;
        display: inline-block;
        padding:.8rem 3rem;
        font-size: 1.7rem;
        color:#fff;
        background:var(--orange);
        border-radius: .5rem;
        cursor: pointer;
        transition:all .2s linear;
    }

    .btn:hover{
        letter-spacing: .2rem;
    }

    .contact form{
        width: 70rem;
        /*max-width: 70rem;*/
        margin: 0 auto;
        text-align: center;
    }

    .contact form .inputBox{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .contact form textarea,
    .contact form .inputBox input,
    #doctors-selection{
        width: 100%;
        padding:1rem;
        font-size: 1.6rem;
        color:var(--text-color-1);
        margin:.7rem 0;
        background: var(--bg-color-1);
        box-shadow: var(--box-shadow);
        text-transform: none;
        border-radius: .5rem;
    }

    .contact form textarea{
        height: 20rem;
        resize: none;
    }

    .contact form .inputBox input{
        width: 49%;
    }

    @media screen and (max-width: 700px){
        .contact form{
            width: 100%;
        }   
    }

</style>

<form id="back-home" action="../controller/consultationController.php" method="post">
    <input name="doctype" type="text" value="<?php echo  $doctype ?>" style="display: none;">
    <button type="submit"><i class="fa-solid fa-backward-step"></i></button>
</form>

<img id="blob" src="../public/images/wave.svg" alt="svg shape">

<div class="container">
    <!-- consultation form section starts  -->
    <section class="contact" id="contact">
        <h1 class="heading"> <span>Réserver</span> un créneau </h1>
        <form action="../controller/reserveController.php" method="post">
            <div class="inputBox">
                <input name="" type="text" placeholder="<?php echo $docname ?>" style="text-align: center;" disabled>
                <?php if(!isset($_COOKIE['dateStr'])) { ?>
                    <input name="datime" id="datetime-rdv" placeholder="crénau" required>
                <?php } else { ?>
                    <input name="datime" id="datetime-rdv" placeholder="<?php echo $_COOKIE['dateStr'] ?>" required>
                <?php } ?>
            </div>
            <div class="inputBox">
                <select id="doctors-selection" name="restime" required>
                    <option disabled selected>horaire</option>
                    <?php
                        foreach ($horaires as &$time) {
                            echo "<option>$time</option>";
                        }
                    ?>
                </select>
            </div>
            <textarea name="message" placeholder="donnez nous quelques indiquations..." id="" cols="30" rows="10" required></textarea>
            <input name="docid" type="text" value="<?php echo  $docid ?>" style="display: none;">
            <input name="resdate" type="text" value="<?php if(isset($_COOKIE['dateStr'])) {echo  $_COOKIE['dateStr'];} ?>" style="display: none;">
            <input type="submit" value="réserver" class="btn">
        </form>
    </section>
    <!-- consultation form section ends -->
</div>

<script src="https://kit.fontawesome.com/60b8c52223.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- custom js file link  -->
<script>
    config = {
        /*basic param*/
        minDate: "today",
        /*display date time param*/
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",

        onClose: function(selectedDates, dateStr, instance){
            document.cookie = `dateStr=${dateStr}`;
            window.location.reload();
        }
    }
    flatpickr("#datetime-rdv", config);
</script>
</body>
</html>