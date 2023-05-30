<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="header">
        <a href="first_page.php">
        <h1>DAESAN AUTOCARE</h1>
        </a>
        <a href="account.php">

<div class="account">
    <span class="name"><?php if (isset($_SESSION['email'])) {
                           echo $_SESSION['email'];
                        }?></span>
</div>
</a>
    </div>

    <div class="center">
        <img src="image/titleDate.png" alt="" class="centerTitle">
        <p class="desc top">Silahkan Pilih Tanggal Sesuai Dengan Tanggal Dan Jam Yang Tersedia!</p>
        <br>
        <form method="post" action="submit4.php">
        <input type="date" name="date" id="date">
        <select name="waktu" id="waktu">
            <option value="8:00">08:00</option>
            <option value="9:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="16:00">16:00</option>
        </select>
        <br>
        <button class="btnBook" name="submit">BOOK NOW</button>
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

#date, #waktu{
    width: 120px;
    height: 30px;
    border-radius: 15px;
    padding: 5px;
    border: 2px solid #4a3915;
}
#waktu{
    width: 80px;
    height: 45px;
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
</html>