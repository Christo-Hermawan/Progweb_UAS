<?php

session_start();
$email = $_SESSION['email'];

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

<body>
    <div class="header">
        <a href="first_page.php">
        <h1>DAESAN AUTOCARE</h1>
        </a>

        <div class="account">
            <span class="name"><?php if (isset($_SESSION['email'])) {
                                   echo $_SESSION['email'];
                                }?></span>
        </div>
        </a>
    </div>

    <div class="center">
        <img src="image/booking.png" alt="" class="centerTitle">
        <br>
        <?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM booking where email='$email'");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table border="1px">
	  <tr>
	  <td>ID</td>
		<td>Plat Mobil</td>
		<td>Merek Mobil</td>
		<td>Kilometer</td>
		<td>Tanggal</td>
    <td>Waktu</td>
		<td>Service</td>
        <td>Keterangan</td>

    <td>Email</td>
    <form action="logout.php">
         <input type="submit" class="btnLogout" value="LOG OUT">
    </form>

	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	      <td><?php echo $row["id_booking"]; ?></td>
		    <td><?php echo $row["plat"]; ?></td>
		    <td><?php echo $row["merek_mobil"]; ?></td>
		    <td><?php echo $row["kilometer"]; ?></td>
		    <td><?php echo $row["date"]; ?></td>
        <td><?php echo $row["waktu"]; ?></td>
		    <td><?php echo $row["service"]; ?></td>
            <td><?php echo $row["keterangan"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>

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

table{
    margin: 0 auto;
    width: 900px;
    margin-top: 30px;
    border-radius: 10px;
    ;
}

table, th, td{
    border: 1px solid #4a3915;
}

th{
    color: white;
    padding: 5px;
    background-color: #4a3915;
}

td{
    color: #a58037;
    padding: 5px;
    background-color: white;
}
</style>
</html>