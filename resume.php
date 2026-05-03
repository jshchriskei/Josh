<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1><?php echo $name; ?></h1>
        <p>
            Email: <?php echo $email; ?> |
            Phone: <?php echo $phone; ?> |
            Location: <?php echo $location; ?>
        </p>
    </div>
    <div class="container">
        <div class="left">
            <div class="section-title">Profile</div>
            <div class="card">
                <p>
                    Second-year BS Information Technology student focused on web development and software engineering.
                    Builds responsive websites and develops systems using PHP, JavaScript, Python, and C++.
                    Strong problem-solving skills and experience working on academic projects.
                </p>
            </div>
            <div class="section-title">Education</div>
            <div class="card">
                <h3>BS Information Technology</h3>
                <small>FEU Institute of Technology | 2024 - Present</small>
                <p>Relevant coursework: Data Structures, Web Development, Programming, Databases</p>
            </div>
            <div class="section-title">Projects</div>
            <div class="card">
                <h3>Portfolio Website</h3>
                <small>HTML, CSS, PHP</small>
                <p>Designed and developed a multi-page responsive portfolio website with navigation and clean UI.</p>
            </div>
            <div class="card">
                <h3>Python GUI Dashboard</h3>
                <small>Python (CustomTkinter)</small>
                <p>Created a desktop dashboard with sidebar navigation and interactive components.</p>
            </div>
            <div class="card">
                <h3>Data Structures System</h3>
                <small>C++</small>
                <p>Implemented linked lists, stacks, and queues with file handling for data storage.</p>
            </div>
            <div class="section-title">Experience</div>
            <div class="card">
                <h3>Student Developer</h3>
                <small>FEU Tech | 2024 - Present</small>
                <p>Develops academic software and web projects. Applies programming concepts in real applications.</p>
            </div>
        </div>

        <div class="right">
            <div class="section-title">Skills</div>
            <div class="card">
                <p><b>Languages:</b> Java, Python, JavaScript, HTML, CSS, PHP, C++</p>
                <p><b>Frameworks:</b> Basic Laravel, React</p>
                <p><b>Tools:</b> Git, MySQL, VS Code</p>
            </div>
            <div class="section-title">Certifications</div>
            <div class="card">
                <p>Java Programming Certification</p>
                <p>Python Programming Certification</p>
                <p>JavaScript Fundamentals Certification</p>
            </div>
            <div class="section-title">Achievements</div>
            <div class="card">
                <p>Completed multiple academic programming projects with high evaluation scores</p>
                <p>Consistent performance in programming and IT-related subjects</p>
            </div>
            <div class="section-title">Interests</div>
            <div class="card">
                <p>Web Development</p>
                <p>UI/UX Design</p>
                <p>Software Development</p>
                <p>Technology Trends</p>
            </div>
        </div>
    </div>
</body>
</html>