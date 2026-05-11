<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: #eef3f8;
            text-align: center;
        }

        h1{
            color: #0d3b66;
            margin-top: 40px;
            font-size: 45px;
        }

        table{
            margin: 30px auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
        }

        td{
            width: 55px;
            height: 55px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            border: 2px solid white;
        }

        .blue{
            background-color: #0d6efd;
            color: white;
        }

        .white{
            background-color: white;
            color: #0d3b66;
        }

    </style>
</head>
<body>

<h1>Multiplication Table</h1>

<table>

<?php

for($row = 0; $row <= 10; $row++){

    echo "<tr>";

    for($col = 0; $col <= 10; $col++){

        $value = $row * $col;

        if(($row + $col) % 2 == 0){
            $color = "white";
        }
        else{
            $color = "blue";
        }

        echo "<td class='$color'>$value</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>