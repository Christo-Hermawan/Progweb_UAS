<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
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
        <img src="image/titleService.png" alt="" class="title">
        <div class="service">
        <form method="post" action="submit2.php">
            <div class="gantiOli">
                <div class="imgCover coverOli">
                </div>
                <img src="image/ganti oli.png" alt=""><br>
                <button type="submit" class="btnPilih" name="btnPilih" value="Ganti Oli">PILIH</button>
            </div>
            <div class="gantiOli">
                <div class="imgCover coverRutin">
                </div>                
                <img src="image/service rutin.png" alt=""><br>
                <button type="submit" class="btnPilih" name="btnPilih" value="Cover Rutin">PILIH</button>
            </div>
            <div class="gantiOli">
                <div class="imgCover lain">
                </div>                
                <img src="image/service lain.png" alt=""><br>
                <button type="submit" class="btnPilih" name="btnPilih" value="Service Lain">PILIH</button>
            </div>
        </form>
        </div>
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

.service{
    width: 100%;
    height: 380px;
    /* background-color: rgb(132, 0, 255); */
    position: absolute;
    margin-top: 25px;
}

.gantiOli:hover{
    background-color: #82652b;
    opacity: 1;

}

.gantiOli{
    width: 20%;
    height: 350px;
    margin: 0 auto;
    /* background-color: violet; */
    display: inline-block;
    margin-left: 40px;
    margin-top: 15px;
    text-align: center;
}

.btnPilih{
    width: 100px;
    height: 30px;
    color: white;
    background-color: #4a3915;
    padding: 3px;
    border-radius: 20px;
    border: 0px;
    cursor: pointer;
}

.imgsrv{
    width: 150px;
}

.imgCover{
    width: 200px;
    height: 200px;
    /* background-color: aqua; */
    margin: 0 auto;
    background-size: cover;
}

.imgCover:hover{
    background-size: cover;
}

.coverOli{
    background-image: url(image/oli1.png);
}

.coverOli:hover{
    background-image: url(image/oli2.png);
}

.coverRutin{
    background-image: url(image/rutin1.png);
}

.coverRutin:hover{
    background-image: url(image/rutin2.png);
}

.tuneUp{
    background-image: url(image/tune\ up1.png);
}

.tuneUp:hover{
    background-image: url(image/tune\ up2.png);
}

.lain{
    background-image: url(image/lain1.png);
}

.lain:hover{
    background-image: url(image/lain2.png);
}

.title{
    margin-top: 100px;
}
</style>
</html>