<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

include "db.php";

$message = "";
$success = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_SESSION["username"];
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if($currentPassword != $user["password"]){

        $message = "Current password is not the same with the old password.";

    }elseif($newPassword != $confirmPassword){

        $message = "New password and Re-Enter new password should be the same.";

    }else{

        $update = $conn->prepare("UPDATE users SET password=? WHERE username=?");
        $update->bind_param("ss",$newPassword,$username);

        if($update->execute()){

            $success = "Password successfully updated.";

        }else{

            $message = "Unable to update password.";

        }

        $update->close();
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

<title>Reset Password</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

<div class="left">

<h1>JoshApp</h1>

<p>
Reset your account password securely.
</p>

</div>

<div class="container">

<h2>Reset Password</h2>

<form method="POST">

<label>Current Password</label>
<input type="password" name="currentPassword" required>

<label>New Password</label>
<input type="password" name="newPassword" required>

<label>Re-Enter New Password</label>
<input type="password" name="confirmPassword" required>

<button type="submit">Reset Password</button>

</form>

<?php

if($message!=""){
    echo "<div class='error'>$message</div>";
}

if($success!=""){
    echo "<div class='success'>$success</div>";
}

?>

<br>

<div class="login-link">
<a href="home.php">Back to Home</a>
</div>

</div>

</div>

</body>

</html>