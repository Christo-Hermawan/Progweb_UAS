<?php
session_start();


include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $_SESSION['lain'] = $_POST['lain'];


    header("Location: new_date.php");
}
?>