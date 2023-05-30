<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_booking   = $_GET['id_booking'];
// query SQL untuk insert data
$query="DELETE from booking where id_booking='$id_booking'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:first_admin.php");
?>