<?php
session_start();


include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['btnPilih'])){
    $_SESSION['btnPilih'] = $_POST['btnPilih'];


    header("Location: new_service_lain.php");
}
?>