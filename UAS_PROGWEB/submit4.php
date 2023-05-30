<?php
session_start();


include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$plat = $_SESSION['plat'];
$kilometer = $_SESSION['kilometer'];
$merek_mobil = $_SESSION['merek_mobil'];
$btnPilih = $_SESSION['btnPilih'];
$lain = $_SESSION['lain'];
$date = date('Y-m-d',strtotime($_POST['date']));
$waktu = $_POST['waktu'];
$email = $_SESSION['email'];

$result = mysqli_query($conn, "SELECT * FROM booking WHERE date = '$date' AND waktu = '$waktu'");
if ($result->num_rows > 0) {
    // There is already a booking for the specific date and time
    // echo "Sorry, the date and time you selected is not available.";
    echo "<script>
    alert('Sorry ! The date and time you selected is unavailable.');
    window.location.href='new_date.php';
</script>";
} else {
    // The specific date and time is available for booking
    mysqli_query($conn, "INSERT INTO booking (plat, kilometer, merek_mobil, service, date, waktu, email, keterangan)
    VALUES ('$plat', '$kilometer', '$merek_mobil', '$btnPilih', '$date', '$waktu', '$email', '$lain')");
    echo "";
    echo "<script>
    alert('The date and time you selected is available.');
    window.location.href='new_berhasil.php';
</script>";
}
$conn->close();

?>