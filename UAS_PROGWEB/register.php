<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['email'])) {
    header("Location: login.php");
}
 
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $gender = $_POST['gender'];
    $birthdate = date('Y-m-d',strtotime($_POST['birthdate']));
    $user_type = "user";

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (email, fullname, password, gender, birthdate,user_type)
                    VALUES ('$email', '$fullname','$password','$gender','$birthdate','$user_type')";
                    
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: login.php");

            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>REGISTRASI</h1>
            <span>Hello Our New Customer!</span>
            <div class="form">
                <form action="" method="post">
                    <table cellpadding="0" cellspacing="5">
                        <tr>
                            <td><h3>Full Name</h3></td>
                            <td><h3>Email</h3></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="fullname" id="fullname"></td>
                            <td><input type="text" name="email" id="email" ></td>
                        </tr>
                        <tr>
                            <td><h3>Gender</h3></td>
                            <td><h3>Password</h3></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="gender"  value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                            </td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td><h3>Birthdate</h3></td>
                            <td><h3>Confirm Password</h3></td>
                        </tr>
                        <tr>
                            <td><input type="date" name="birthdate" id="birthdate"></td>
                            <td><input type="password" name="cpassword" id="cpassword"></td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="SUBMIT" class="btnSubmit" id="register" name="register">
                    <input type="reset" value="RESET" class="btnReset">
                </form>
                <p><a href="login.php">Back</a></p>
            </div>
        </div>
    </div>
</body>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url(image/bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        width: 850px;
        height: 600px;
        background-color: rgb(255, 255, 255);
        margin: 0 auto;
        margin-top: 50px;
        border-radius: 15px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        text-align: center;
    }

    .login {
        padding-top: 50px;
        color: #a58037;
    }

    .form {
        text-align: left;
        padding-left: 50px;
    }

    #email,
    #password, #fullname, #cpassword {
        border: 0;
        width: 350px;
        outline: 0;
        border-bottom: 2px solid #a58037;
    }

    .btnSubmit, .btnReset {
        margin-top: 20px;
        background-color: #FFFFFF;
        border: 0;
        border-radius: .5rem;
        box-sizing: border-box;
        color: #a58037;
        font-family: "Inter var", ui-sans-serif, system-ui, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: .875rem;
        font-weight: 600;
        line-height: 1.25rem;
        padding: .75rem 1rem;
        text-align: center;
        text-decoration: none #D1D5DB solid;
        text-decoration-thickness: auto;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        cursor: pointer;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .btnSubmit:hover, .btnReset:hover {
        background-color: rgb(249, 250, 251);
    }

    .btnSubmit:focus, .btnReset:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .btnSubmit:focus-visible, .btnReset:focus-visible {
        box-shadow: none;
    }

    .btnReset{
        margin-left: 20px;
    }

    p {
        float: right;
        margin-right: 50px;
        color: #a58037;
        margin-top: 50px;
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

    table{
        width: 750px;
        /* border: solid black 1px; */
    }

    #birthdate{
        color: #a58037;
        font-family: Arial, Helvetica, sans-serif;
        width: 150px;
        border: 0;
        border-bottom: #a58037 2px solid;
    }
</style>
</html>