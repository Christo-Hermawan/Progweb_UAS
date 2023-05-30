<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="header">
        <h1>DAESAN AUTOCARE</h1>
        <a href="account.php">

        <div class="account">
            <span class="name"><?php if (isset($_SESSION['email'])) {
                                   echo $_SESSION['email'];
                                }?></span>
        </div>
        </a>

    </div>

    <div class="center">
        <img src="image/titleDaesan2.png" alt="" class="centerTitle">
        <p class="desc top">Website untuk melakukan booking service pada Bengkel Daesan Autocare.</p>
        <p class="desc">Booking Sekarang !</p>
        <form action="new_form_booking.php">
        <button class="btnBook">BOOK NOW</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; Daesan Autocare</p>
    </div>
</body>
<style>
a{
    text-decoration: none;
}
a:visited {
        color: #a58037;
        background-color: transparent;
        text-decoration: none;
    }
.center{
    width: 100%;
    height: 620px;
    /* background-color: #a58037; */
    background-image: url(image/background.png);
    text-align: center;
}

.centerTitle{
    width: 400px;
    margin-top: 120px;
}

.desc{
    font-weight: bold;
    color: white;
}

.top{
    margin-top: 40px;
    border-radius: 25px;
}

.btnBook{
    width: 120px;
    margin-top: 40px;
    border: 1px solid #4a3915;
    border-radius: 20px;
    padding: 10px;
    background-color: white;
    cursor: pointer;
    color: #4a3915;
}

.btnBook:hover{
    background-color: #4a3915;
    color: white;
}

</style>
</html>