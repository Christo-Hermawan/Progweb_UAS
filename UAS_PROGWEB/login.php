<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['email'])) {
}

if (isset($_POST['btnLogin'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

    $res=mysqli_query($conn, "SELECT * FROM user where email='$email' AND password='$password'");
    $row = mysqli_fetch_assoc($res);
        if(($row['user_type'] == 'user') && ($row['email'] == $email)) {
            $_SESSION['email']=$row['email'];
                header("location: first_page.php");
        }
        else if(($row['user_type'] == 'admin') && ($row['email'] == $email)) {
            $_SESSION['email']=$row['email'];
                header("location: first_admin.php");
        }
    
        else {
            echo "<script>
            alert('Email field or Password incorrect');
            window.location.href='login.php';
            </script>";
            

        }
    }
// 	$result = mysqli_query($conn, $sql);
// 	if ($result->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($result);
// 		$_SESSION['email'] = $row['email'];
// 		header("Location: first_page.php");
// 	} else {
// 		echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
// 	}
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>LOGIN</h1>
            <span>Hello Our Customer!</span>
            <div class="form">
                <form action="" method="post">
                    <h3>Email</h3>
                    <input type="text" name="email" id="email">
                    <h3>Password</h3>
                    <input type="password" name="password" id="password">
                    <br>
                    <input type="submit" value="SUBMIT" class="btnSubmit" id="btnLogin" name="btnLogin">
                </form>
                <p><a href="register.php">Don't have account?</a></p>
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
        width: 450px;
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
    #password {
        border: 0;
        width: 350px;
        outline: 0;
        border-bottom: 2px solid #a58037;
    }

    .btnSubmit {
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

    .btnSubmit:hover {
        background-color: rgb(249, 250, 251);
    }

    .btnSubmit:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .btnSubmit:focus-visible {
        box-shadow: none;
    }

    p {
        float: right;
        margin-right: 50px;
        color: #a58037;
        margin-top: 120px;
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
</style>

</html>