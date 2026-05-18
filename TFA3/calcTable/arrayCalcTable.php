<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Operations</title>

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

<h1>Array Operations using PHP</h1>

<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

// Addition
$sum = array_sum($numbers);

// Subtraction
$subtract = $numbers[0];

for($i = 1; $i < count($numbers); $i++){
    $subtract -= $numbers[$i];
}

// Multiplication
$product = array_product($numbers);

// Division
$division = $numbers[0];

for($i = 1; $i < count($numbers); $i++){
    $division /= $numbers[$i];
}

?>

<div class="table-container">

<table>

    <tr>
        <th colspan="2">
            Array List:
            <?php echo implode(", ", $numbers); ?>
        </th>
    </tr>

    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>

    <tr>
        <td>Subtraction</td>
        <td><?php echo $subtract; ?></td>
    </tr>

    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>

    <tr>
        <td>Division</td>
        <td><?php echo $division; ?></td>
    </tr>

</table>

</div>

</body>
</html>
