<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

include "db.php";

$username = $_SESSION["username"];

$sql = "SELECT * FROM users WHERE username = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Home</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

    <div class="left">

        <h1>JoshApp</h1>

        <p>
            Welcome back! You have successfully
            logged in using PHP Sessions,
            Cookies, and MySQL.
        </p>

    </div>

    <div class="home-container">

        <h2>Welcome, <?php echo htmlspecialchars($user["firstname"]); ?>!</h2>

        <p>You are now logged in.</p>

        <div class="user-info">

            <h3>User Information</h3>

            <p><strong>First Name:</strong> <?php echo htmlspecialchars($user["firstname"]); ?></p>

            <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($user["middlename"]); ?></p>

            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($user["lastname"]); ?></p>

            <p><strong>Username:</strong> <?php echo htmlspecialchars($user["username"]); ?></p>

            <p><strong>Email:</strong> <?php echo htmlspecialchars($user["email"]); ?></p>

            <p><strong>Birthday:</strong> <?php echo htmlspecialchars($user["birthday"]); ?></p>

            <p><strong>Contact:</strong> <?php echo htmlspecialchars($user["contact"]); ?></p>

        </div>


        <a href="resetpassword.php" class="logout-btn" style="background:#1877f2;">
    Reset Password
</a>

<br><br>
        

        <a href="logout.php" class="logout-btn">
            Logout
        </a>

    </div>

</div>

</body>

</html>