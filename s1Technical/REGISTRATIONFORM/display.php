<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: #d9d9d9;
        }

        .container{
            width: 650px;
            margin: 20px auto;
            background-color: white;
            padding: 25px;
        }

        .header{
            background-color: #0d2b57;
            color: white;
            padding: 20px;
            font-size: 30px;
            font-weight: bold;
        }

        .header span{
            color: #3db7e4;
        }

        .section-title{
            background-color: #0d2b57;
            color: white;
            padding: 8px;
            margin-top: 25px;
            font-size: 14px;
            letter-spacing: 2px;
        }

        p{
            font-size: 14px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin: 18px 0;
        }

        .footer{
            font-size: 12px;
            margin-top: 30px;
            text-align: center;
            background-color: #0d2b57;
            color: white;
            padding: 10px;
            letter-spacing: 3px;
        }

        .signature{
            text-align: right;
            margin-top: 40px;
            font-style: italic;
            font-size: 28px;
        }

    </style>
</head>
<body>

<?php

    $name = "Joshua Christian De Leon";
    $father = "Michael De Leon";
    $birth = "December 20, 2005";
    $placeBirth = "Manila";
    $address = "Quiapo, Manila";
    $status = "Single";
    $nationality = "Filipino";
    $religion = "Christian";
    $email = "joshua@gmail.com";
    $gender = "Male";
    $height = "168 cm";
    $course = "BSIT WMA";
    $section = "TW22";
    $studentNumber = "202410531";

    echo "<div class='container'>";

    echo "<div class='header'>
            STUDENT REGISTRATION <span>FORM</span>
          </div>";

    echo "<p><b>Student Name:</b> $name &nbsp;&nbsp;&nbsp;&nbsp; <b>Father's Name:</b> $father</p>";

    echo "<p><b>Membership Type:</b> Regular</p>";

    echo "<div class='section-title'>PERSONAL INFORMATION</div>";

    echo "<p><b>Full Address:</b> $address</p>";

    echo "<p><b>Place of Birth:</b> $placeBirth &nbsp;&nbsp;&nbsp;&nbsp; <b>Date of Birth:</b> $birth</p>";

    echo "<p><b>Status:</b> $status</p>";

    echo "<p><b>Nationality:</b> $nationality</p>";

    echo "<p><b>Religion:</b> $religion</p>";

    echo "<p><b>Email:</b> $email</p>";

    echo "<p><b>Gender:</b> $gender</p>";

    echo "<p><b>Height:</b> $height</p>";

    echo "<p><b>Course:</b> $course</p>";

    echo "<p><b>Section:</b> $section</p>";

    echo "<p><b>Student Number:</b> $studentNumber</p>";

   

    echo "<div class='footer'>
        All information provided is true and correct to the best of my knowledge..
          </div>";

    echo "</div>";

?>

</body>
</html>