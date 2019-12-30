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
<?php foreach ($books as $books_value) { ?>
<h3>Diako Hostels Group_Confirmation</h3>
    <h4>[<?= $books_value->books_id; ?>]</h4>
    <p style="text-align: center"><b>Dear [Mr. Slim] Hello!</b><br>

        This is our confirmation for your reservation at Diako Hostel in Tehran (Mehr Hotel). <br>If you decide to cancel your reservation, please inform us 2 days in advance, <br>otherwise you will make other people lose the chance of accommodation here.
        <br>
        Kind regards,<br>
        Diako Hostels Groupbr <br></p>
<table style="text-align: center" align="center" cellpadding = "5" border="0">
    <thead>
    <tr>
        <th>Booking Code :</th>
        <th><?= $books_value->books_id; ?></th>
    </tr>
    <tr>
        <th>Full Name :</th>
        <th><?= $books_value->book_first_name; ?> &nbsp; <?= $books_value->book_last_name; ?></th>
    </tr>
    <tr>
        <th>Gender  :</th>
        <th><?= $books_value->book_gender; ?></th>
    </tr>
    <tr>
        <th>Check in  :</th>
        <th><?= $books_value->book_check_in_date; ?></th>
    </tr>
    <tr>
        <th>Check out :</th>
        <th><?= $books_value->book_check_out_date; ?></th>
    </tr>
    <tr>
        <th>Night/s :</th>
        <th><?= $books_value->book_length_of_day; ?></th>
    </tr>
    <tr>
        <th>Room Details :</th>
        <th><?= $books_value->books_id; ?></th>
    </tr>
    <tr>
        <th>Approximate time of arrival :</th>
        <th><?= $books_value->book_approximate; ?></th>
    </tr>
    <tr>
        <th>Nationality :</th>
        <th><?= $books_value->book_nationality_of_residence; ?></th>
    </tr>
    <tr>
        <th>Email :</th>
        <th><?= $books_value->book_email; ?></th>
    </tr>
    <tr>
        <th>Hosteĺ s name :</th>
        <th>City <?= $books_value->cities_title; ?> Hostels <?= $books_value->hostels_title; ?></th>
    </tr>
    <tr>
        <th>The cost of your accommodation :</th>
        <th><?= $books_value->hostels_minmum_price; ?></th>
    </tr>
    <tr>
        <th>Address (En) :</th>
        <th>City <?= $books_value->hostels_address_en; ?> Hostels <?= $books_value->hostels_title; ?></th>
    </tr>
    <tr>
        <th>Address (Fa) :</th>
        <th><?= $books_value->hostels_address_fa; ?></th>
    </tr>
    </thead>


</table>
    <table style="text-align: center" align="center" cellpadding = "5" border="0">
        <thead>
        <tr>
            <th><img src="<?= site_url('') ?>assets/img/confirmation/address.PNG"><p>Serajolmolk Alley, Amir Kabir St.,<br> Sarcheshmeh Cros., Baharestan Sq., Tehran, Iran</p>
            </th>
            <th>            <img src="<?= site_url('') ?>assets/img/confirmation/tel.PNG"><p>+982133996532</p>
            </th>
        </tr>
        <tr>
            <th>            <img src="<?= site_url('') ?>assets/img/confirmation/email.PNG"><p>Diakohostels@gmail.com</p>
            </th>
            <th>            <img src="<?= site_url('') ?>assets/img/confirmation/website.PNG"><p>www.Diakohostels.com</p>
            </th>
        </tr>
        </thead>


    </table>
<div class="center">
        <img src="<?= site_url('') ?>assets/uploads/files/<?= $books_value->hostels_image; ?>" alt="">
<p>
    Tips <br>
    Nearest Metro stations to us :<br>
    Mellat (2 min by foot)/ Imam Khomeini (7 min by foot)/ Baharestan (7 min by foot)<br>

    Nearest Attractions to us :<br>
    Grand Bazaar of Tehran/ Golestan Palace/ Treasury of National Jewels<br>/ National Museum of Iran/ Masoudieh Palace/ Ebrat Museum</p>

</div>





<?php } ?>
</body>
</html>





