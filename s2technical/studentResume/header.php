<?php
$name = "Joshua Christian De Leon";
$email = "jcdeleon@feutech.edu.ph";
$phone = "+63-915-746-4453";
$location = "Quezon City, Philippines";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resume</title>
    <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) == '/Josh/s2technical/studentResume/pages' ? '../style.css' : 'style.css'; ?>">
</head>
<body>

<div class="navbar">
    <h2>Student Resume</h2>

    <ul>
    <li><a href="/Josh/s2technical/studentResume/index.php">Home</a></li>

    <li><a href="/Josh/s2technical/studentResume/pages/objective.php">Career Objective</a></li>

    <li><a href="/Josh/s2technical/studentResume/pages/personal.php">Personal Info</a></li>

    <li><a href="/Josh/s2technical/studentResume/pages/education.php">Education</a></li>

    <li><a href="/Josh/s2technical/studentResume/pages/skills.php">Skills</a></li>

    <li><a href="/Josh/s2technical/studentResume/pages/affiliation.php">Affiliation</a></li>

    <li><a href="/Josh/s2technical/studentResume/pages/experience.php">Experience</a></li>
</ul>
</div>