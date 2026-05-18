<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function in PHP</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 20px;
        }

        h1{
            text-align: center;
        }

        .table-container{
            width: 100%;
            margin: auto;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th, td{
            border: 1px solid #999;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        th{
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>

<body>

<h1>User Defined Function using PHP</h1>

<?php

$num1 = 25;
$num2 = 13;
$num3 = 6;

function my_function($a, $b, $c){

    $addition = $a + $b + $c;
    $subtraction = $a - $b - $c;
    $multiplication = $a * $b * $c;
    $division = $a / $b / $c;

    echo "

    <div class='table-container'>

    <table>

        <tr>
            <th colspan='2'>
                My Parameter Values:
                $a, $b, $c
            </th>
        </tr>

        <tr>
            <td>Addition</td>
            <td>$addition</td>
        </tr>

        <tr>
            <td>Subtraction</td>
            <td>$subtraction</td>
        </tr>

        <tr>
            <td>Multiplication</td>
            <td>$multiplication</td>
        </tr>

        <tr>
            <td>Division</td>
            <td>$division</td>
        </tr>

    </table>

    </div>

    ";

}

my_function($num1, $num2, $num3);

?>

</body>
</html>
