<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
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

.btnLogout{
    width: 300px;
    margin-top: 40px;
    border: 1px solid #4a3915;
    border-radius: 20px;
    background-color: white;
    cursor: pointer;
    color: #4a3915;
}

.btnLogout:hover{
    background-color: #4a3915;
    color: white;
}

input{
    border-radius: 25px;
    width: 350px;
    height: 35px;
    margin-top: 30px;
    text-align: center;
    color: #a58037;
    border: 1px solid #4a3915;
}

input::placeholder{
    color: #a58037;
}
</style>
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
        <img src="image/berhasil.png" class="centerTitle">
        <br>
        <form action="account.php">
            <input type="submit" class="btnLogout" value="MY BOOKING">
        </form>
        </div>
    <div class="footer">
        <p>&copy; Daesan Autocare</p>
    </div>
</body>
</html>