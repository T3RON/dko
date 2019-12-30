<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
    <link rel="icon" type="image/png" sizes="56x56" href="<?=base_url('')?>assets/img/logo/logo.png">

    <!-- main css -->
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/style.css">


</head>
<body>
<style>
    body {
        font-family: "Josefin Sans",sans-serif;

    }
    p {
        font-size: 12pt;
        text-align: left;
        font-family: "Josefin Sans",sans-serif;
        font-weight: 700;
        color: #080100;
    }
    h3
    {
        text-align: center;
        font-family: "Josefin Sans",sans-serif;
        font-weight: 700;
        color: #05364d;
    }
    h4
    {
        font-size: 12pt;
        text-align: center;
        font-family: "Josefin Sans",sans-serif;
        font-weight: 700;
        color: #ff1800;
    }

    table{
        color:black;
        font-size: 12pt;
        font-style: normal;
        font-weight: bold;
        text-align:left;
        border-collapse: collapse;
    }
    .ff {
        margin: 0 auto;
        text-align: left;
        margin-top: 20px;
        margin-bottom: 20px;

    }
    .center {
        margin: 0 auto;
        text-align: left;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 400px;
        height: 300px;
    }
    .center img {
        width: 400px;
        height: 300px;
    }
    .logo {
        height: 8rem;
        width: 8rem;
        margin: 3rem auto;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
        overflow: hidden;
    }
    .logo img {
        vertical-align: middle;
        border-style: none;
        max-height: 8rem;
    }
</style>
<div class="logo">
    <a href="index.html">
        <img src="<?=base_url('')?>assets/img/logo/logo-footer.png">
    </a>
</div>

<div class="center">

<h3>Please Chack Your Email ... ! </h3>
<h4>
<?= $email; ?>

</h4>
</div>






</body>
</html>





