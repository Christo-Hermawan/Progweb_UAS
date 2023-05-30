<?php
session_start();


include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $_SESSION['plat'] = $_POST['plat'];
    $_SESSION['kilometer'] = $_POST['kilometer'];
    $_SESSION['merek_mobil'] = $_POST['merek_mobil'];

    header("Location: new_service.php");
}

?>