<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnes Santé</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap');

    *{
        font-family: 'Poppins', sans-serif;
    }

    body {
        text-align: center;
        padding: 40px 0;
        background: #eee;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        color: #537ED7;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #444;
        font-size: 20px;
        font-weight: 500;
        margin: 0;
    }

    i {
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: #fff;
        padding: 60px;
        border-radius: .5rem;
        box-shadow:0 .5rem 1.5rem rgba(0,0,0,.4);
        display: inline-block;
        margin: 0 auto;
    }
</style>

<body>
    <div class="card" data-aos="fade-up">
        <div style="border-radius:200px; height:200px; width:200px; background: #537fd752; margin:0 auto;">
            <i class="checkmark" style="color: #537ED7;">✓</i>
        </div>
        <h1>Modification éffectuée!</h1>
        <p> vous allez être redirigé...</p>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    var obj = 'window.location.replace("../view/admin.php");';
    setTimeout(obj,3200);
</script>

<script>
    AOS.init({
        duration:500,
        delay:200
    });
</script>

</html>