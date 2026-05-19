<?php require 'header.php'; ?>

<div class="container">

    <div class="profile-card">
        <img src="im5.jpg" alt="Profile">

        <h1><?php echo $name; ?></h1>

        <p><?php echo $email; ?></p>
        <p><?php echo $phone; ?></p>
        <p><?php echo $location; ?></p>
    </div>

    <div class="content-card">
        <h2>Welcome</h2>

        <p>
            Second-year BS Information Technology student focused on
            web development and software engineering.
            Builds responsive websites and systems using PHP,
            JavaScript, Python, and C++.
        </p>

        <a href="pages/objective.php" class="btn">
            View Resume
        </a>
    </div>

</div>

<?php include 'footer.php'; ?>