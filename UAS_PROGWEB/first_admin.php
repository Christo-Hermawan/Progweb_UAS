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
    <title>Admin Page</title>
</head>

<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
        <p><b>Hello, Admin <?php if (isset($_SESSION['email'])) {
                                   echo $_SESSION['email'];
                                }?>!</b></p>
        <form action="logout.php">
        <input type="submit" value="Sign Out" class="btnSearch">
        </form>
    </div>
   
    <div style="overflow-y: scroll; height: 450px; margin-top: 25px;">
    <?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM booking");
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
    <td>Action</td>



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
        <td><a href="delete.php?id_booking=<?php echo $row["id_booking"]; ?>">Cancel</a></td>
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
      </div>
</body>
<style>
    body{
        background-image: url(image/bg3.jpg);
        background-size: cover;
        
    }
    table {
        width: 80%;
        border-radius: 5px;
        margin: 0 auto;
    }
    thead {
        position: sticky;
        top: 0;
        background-color: #a58037;
        color: white;
    }
    .header{
        text-align: center;
        color: #a58037;
    }
    a:link {
        color: #a58037;
        background-color: transparent;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    a:visited {
        color: #a58037;
        background-color: transparent;
        text-decoration: none;
    }
    .filter{
        padding-top: 20px;
        width: 70%;
        margin: 0 auto;
        text-align: center;
        /* display: inline-block; */
        /* background-color: #a58037; */
    }
    #cari, #filt, #date {
        border: 0;
        width: 300px;
        outline: 0;
        border-bottom: 2px solid #a58037;
        background-color: transparent;
    }
    #cari::placeholder{
        color: #968157;
    }
    #filt,#date{
        color: #a58037;
        width: 120px;
    }

    .btnSearch, .btnOK {
        background-color: #a58037;
        border: 0;
        border-radius: .5rem;
        box-sizing: border-box;
        color: white;
        font-family: "Inter var", ui-sans-serif, system-ui, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: .875rem;
        font-weight: 600;
        line-height: 1.25rem;
        padding: .25rem 1rem;
        text-align: center;
        text-decoration: none #D1D5DB solid;
        text-decoration-thickness: auto;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        cursor: pointer;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }
    .btnSearch:hover, .btnOK:hover {
        background-color: #55411a;
    }

    .btnSearch:focus, .btnOK:focus {
        outline: 2px solid transparent;

        
        outline-offset: 2px;
    }

    .btnSearch:focus-visible, .btnOK:focus-visible {
        box-shadow: none;
    }
</style>
</html>