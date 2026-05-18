<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Arrays using Grid Layout</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color: white;
    margin: 0;
    padding: 20px;
}

h1{
    text-align: center;
    margin-bottom: 20px;
}

.grid-container{
    display: grid;
    grid-template-columns: 60px 1fr 1fr 80px 1fr 1fr;
    width: 100%;
    margin: auto;
    border: 1px solid #333;
}

.grid-item{
    border: 1px solid #999;
    padding: 10px;
    text-align: center;
    font-size: 14px;

    display: flex;
    justify-content: center;
    align-items: center;
}

.header{
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
}

img{
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
}

</style>
</head>

<body>

<h1>Monkey Information using PHP Arrays</h1>

<?php
// Declare array with 10 records
$students = [
    [
        "name" => "Angela",
        "image" => "m1.jpg",
        "age" => 19,
        "birthday" => "January 10, 2005",
        "contact" => "09123456781",
    ],

    [
        "name" => "Bryan",
        "image" => "m2.jpg",
        "age" => 20,
        "birthday" => "February 14, 2004",
        "contact" => "09123456782",
    ],

    [
        "name" => "Carla",
        "image" => "m3.jpg",
        "age" => 18,
        "birthday" => "March 20, 2006",
        "contact" => "09123456783",
    ],

    [
        "name" => "Daniel",
        "image" => "m4.jpg",
        "age" => 21,
        "birthday" => "April 12, 2003",
        "contact" => "09123456784",
    ],

    [
        "name" => "Ella",
        "image" => "m5.jpg",
        "age" => 19,
        "birthday" => "May 05, 2005",
        "contact" => "09123456785",
    ],

    [
        "name" => "Francis",
        "image" => "m6.jpg",
        "age" => 20,
        "birthday" => "June 25, 2004",
        "contact" => "09123456786",
    ],

    [
        "name" => "Grace",
        "image" => "m7.jpg",
        "age" => 18,
        "birthday" => "July 18, 2006",
        "contact" => "09123456787",
    ],

    [
        "name" => "Henry",
        "image" => "m8.jpg",
        "age" => 22,
        "birthday" => "August 30, 2002",
        "contact" => "09123456788",
    ],

    [
        "name" => "Isabel",
        "image" => "m9.jpg",
        "age" => 19,
        "birthday" => "September 11, 2005",
        "contact" => "09123456789",
    ],

    [
        "name" => "John",
        "image" => "m10.jpg",
        "age" => 20,
        "birthday" => "October 08, 2004",
        "contact" => "09123456790",
    ],
];

// Sort names alphabetically
usort($students, function ($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>

<div class="grid-container">

<!-- Header -->
<div class="grid-item header">No.</div>
<div class="grid-item header">Name</div>
<div class="grid-item header">Image</div>
<div class="grid-item header">Age</div>
<div class="grid-item header">Birthday</div>
<div class="grid-item header">Contact Number</div>

<?php
$no = 1;

foreach ($students as $student) {
    echo "<div class='grid-item'>$no</div>";
    echo "<div class='grid-item'>" . $student["name"] . "</div>";
    echo "<div class='grid-item'>
<img src='" .
        $student["image"] .
        "' alt='Profile'>
</div>";
    echo "<div class='grid-item'>" . $student["age"] . "</div>";
    echo "<div class='grid-item'>" . $student["birthday"] . "</div>";
    echo "<div class='grid-item'>" . $student["contact"] . "</div>";

    $no++;
}
?>

</div>

</body>
</html>