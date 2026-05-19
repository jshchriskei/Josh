<!DOCTYPE html>
<html>
<head>
    <title>Fruit Directory</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1{
            text-align: center;
            color: #333;
        }

        table{
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #ffd966;
        }

        img{
            width: 120px;
            height: 100px;
        }

        tr:nth-child(even){
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

<h1>My Fruits</h1>

<?php

$fruits = array(

    array(
        "image" => "apple.png",
        "name" => "Apple",
        "description" => "Color Red",
        "facts" => "Apples are rich in fiber and vitamin C."
    ),

    array(
        "image" => "banana.png",
        "name" => "Banana",
        "description" => "Color Yellow",
        "facts" => "Bananas give energy and contain potassium."
    ),

    array(
        "image" => "Cherry.webp",
        "name" => "Cherry",
        "description" => "Color Red",
        "facts" => "Cherries contain antioxidants that help the body."
    ),

    array(
        "image" => "Grapes.png",
        "name" => "Grapes",
        "description" => "Color Purple",
        "facts" => "Grapes help improve heart health."
    ),

    array(
        "image" => "Lemon.png",
        "name" => "Lemon",
        "description" => "Color Yellow",
        "facts" => "Lemons are rich in vitamin C."
    ),

    array(
        "image" => "Mango.png",
        "name" => "Mango",
        "description" => "Color Orange",
        "facts" => "Mangoes are known as the national fruit of the Philippines."
    ),

    array(
        "image" => "Orange.webp",
        "name" => "Orange",
        "description" => "Color Orange",
        "facts" => "Oranges strengthen the immune system."
    ),

    array(
        "image" => "Papaya.png",
        "name" => "Papaya",
        "description" => "Color Orange",
        "facts" => "Papayas help digestion because of enzymes."
    ),

    array(
        "image" => "Pineapple.png",
        "name" => "Pineapple",
        "description" => "Color Yellow",
        "facts" => "Pineapples contain bromelain which helps digestion."
    ),

    array(
        "image" => "Watermelon.png",
        "name" => "Watermelon",
        "description" => "Color Green and Red",
        "facts" => "Watermelons contain high water content for hydration."
    )
);

usort($fruits, function($a, $b){
    return strcmp($a['name'], $b['name']);
});

echo "<table>";
echo "<tr>";
echo "<th>Image</th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<th>Facts</th>";
echo "</tr>";

foreach($fruits as $fruit){

    echo "<tr>";

    echo "<td>
            <img src='".$fruit['image']."' alt='".$fruit['name']."'>
          </td>";

    echo "<td>".$fruit['name']."</td>";

    echo "<td>".$fruit['description']."</td>";

    echo "<td>".$fruit['facts']."</td>";

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>