<?php
session_start();

if(isset($_SESSION["username"])){
    header("Location: home.php");
    exit();
}

include "db.php";

$username = "";
$password = "";
$message = "";

if(isset($_COOKIE["username"])){
    $username = $_COOKIE["username"];
}

if(isset($_COOKIE["password"])){
    $password = $_COOKIE["password"];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if(isset($_POST["remember"])){

        setcookie("username",$username,time()+3600);
        setcookie("password",$password,time()+3600);

    }else{

        setcookie("username","",time()-3600);
        setcookie("password","",time()-3600);

    }

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){

        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();

    }else{

        $message = "Invalid Username or Password.";

    }

    $stmt->close();
    $conn->close();

}
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

    <div class="left">

        <h1>JoshApp</h1>

        <p>
            Login to continue using your PHP
            Session, Cookies, and MySQL System.
        </p>

    </div>

    <div class="container">

        <h2>Login</h2>

        <form method="POST">

            <label>Username</label>

            <input
                type="text"
                name="username"
                value="<?php echo htmlspecialchars($username); ?>"
                required>

            <label>Password</label>

            <input
                type="password"
                name="password"
                value="<?php echo htmlspecialchars($password); ?>"
                required>

            <div class="checkbox-group">

                <input
                    type="checkbox"
                    id="remember"
                    name="remember"
                    <?php if(isset($_COOKIE["username"])) echo "checked"; ?>>

                <label for="remember">Remember Me</label>

            </div>

            <button type="submit">
                Login
            </button>

            <div class="register-link">

                <p>Don't have an account?</p>

                <a href="register.php">
                    Register Here
                </a>

            </div>

        </form>

        <?php

        if($message!=""){

            echo "<div class='error'>$message</div>";

        }

        ?>

    </div>

</div>

</body>

</html>