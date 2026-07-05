<?php
session_start();

if(isset($_SESSION["username"])){
    header("Location: home.php");
    exit();
}

$firstname = "";
$middlename = "";
$lastname = "";
$username = "";
$password = "";
$confirmPassword = "";
$birthday = "";
$email = "";
$contact = "";

$message = "";
$success = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $firstname = trim($_POST["firstname"]);
    $middlename = trim($_POST["middlename"]);
    $lastname = trim($_POST["lastname"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $birthday = $_POST["birthday"];
    $email = trim($_POST["email"]);
    $contact = trim($_POST["contact"]);

    if($password == $confirmPassword){

    include "db.php";

    $sql = "INSERT INTO users
    (firstname, middlename, lastname, username, password, birthday, email, contact)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssssss",
        $firstname,
        $middlename,
        $lastname,
        $username,
        $password,
        $birthday,
        $email,
        $contact
    );

    if($stmt->execute()){

        $success = true;

    }else{

        $message = "Registration failed.";

    }

    $stmt->close();
    $conn->close();

}else{

    $message = "Password and Confirm Password are not the same.";

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Account</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

    <div class="left">

        <h1>JoshApp</h1>

        <p>
            Create your account and start using
            the PHP Session, Cookies, and
            MySQL Login System.
        </p>

    </div>

    <div class="register-container">

        <h2>Create Account</h2>

        <form method="POST">

            <div class="two-column">

                <div>
                    <label>First Name</label>
                    <input
                        type="text"
                        name="firstname"
                        value="<?php echo htmlspecialchars($firstname); ?>"
                        required>
                </div>

                <div>
                    <label>Middle Name</label>
                    <input
                        type="text"
                        name="middlename"
                        value="<?php echo htmlspecialchars($middlename); ?>"
                        required>
                </div>

                <div class="full">
                    <label>Last Name</label>
                    <input
                        type="text"
                        name="lastname"
                        value="<?php echo htmlspecialchars($lastname); ?>"
                        required>
                </div>

                <div class="full">
                    <label>Username</label>
                    <input
                        type="text"
                        name="username"
                        value="<?php echo htmlspecialchars($username); ?>"
                        required>
                </div>

                <div>
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        required>
                </div>

                <div>
                    <label>Confirm Password</label>
                    <input
                        type="password"
                        name="confirmPassword"
                        required>
                </div>

                <div>
                    <label>Birthday</label>
                    <input
                        type="date"
                        name="birthday"
                        value="<?php echo htmlspecialchars($birthday); ?>"
                        required>
                </div>

                <div>
                    <label>Contact Number</label>
                    <input
                        type="tel"
                        name="contact"
                        value="<?php echo htmlspecialchars($contact); ?>"
                        required>
                </div>

                <div class="full">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        value="<?php echo htmlspecialchars($email); ?>"
                        required>
                </div>

            </div>

            <button type="submit">Register</button>

            <div class="login-link">
                <p>Already have an account?</p>
                <a href="login.php">Login Here</a>
            </div>

        </form>

        <?php

        if($message!=""){

            echo "<div class='error'>$message</div>";

        }

        ?>

        <?php if($success){ ?>

            <hr style="margin:25px 0;">

            <div class="success">

                <h3>Registration Successful!</h3>

            </div>

            <div class="result">

                <p><strong>First Name:</strong> <?php echo htmlspecialchars($firstname); ?></p>

                <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($middlename); ?></p>

                <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lastname); ?></p>

                <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>

                <p><strong>Birthday:</strong> <?php echo htmlspecialchars($birthday); ?></p>

                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

                <p><strong>Contact Number:</strong> <?php echo htmlspecialchars($contact); ?></p>

            </div>

        <?php } ?>

    </div>

</div>

</body>

</html>