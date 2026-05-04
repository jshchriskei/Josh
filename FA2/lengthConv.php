<?php
$result = "";
// Define conversion rates relative to 1 meter
$rates = [
    "cm" => 0.01,
    "m"  => 1,
    "km" => 1000,
    "in" => 0.0254,
    "ft" => 0.3048,
    "yd" => 0.9144
];

if (isset($_POST["convert"])) {
    $value = floatval($_POST["value"]);
    $from  = $_POST["from"];
    $to    = $_POST["to"];

    // Convert input to meters, then meters to target
    if (isset($rates[$from]) && isset($rates[$to])) {
        $meters = $value * $rates[$from];
        $result = $meters / $rates[$to];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length Converter</title>
    <link rel="stylesheet" href="style.css">
    <style> 
        body { font-family: sans-serif; background: #f4f4f9; display: flex; justify-content: center; padding: 50px; }
        .container { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        form { display: flex; gap: 10px; align-items: center; margin-bottom: 20px; flex-wrap: wrap; }
        input, select, button { padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        .result { margin: 20px 0; padding: 15px; background: #e7f3ff; color: #004085; border-radius: 4px; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { text-align: left; padding: 8px; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>

<div class="container">
    <h2>Length Conversion</h2>
    
    <form method="post">
        <input type="number" step="any" name="value" placeholder="Value" value="<?= htmlspecialchars($_POST['value'] ?? '') ?>" required>
        
        <select name="from">
            <?php foreach ($rates as $unit => $rate): ?>
                <option value="<?= $unit ?>" <?= (isset($_POST['from']) && $_POST['from'] == $unit) ? 'selected' : '' ?>>
                    <?= ucfirst($unit) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <span>to</span>

        <select name="to">
            <?php foreach ($rates as $unit => $rate): ?>
                <option value="<?= $unit ?>" <?= (isset($_POST['to']) && $_POST['to'] == $unit) ? 'selected' : '' ?>>
                    <?= ucfirst($unit) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" name="convert">Convert</button>
    </form>

    <?php if ($result !== ""): ?>
        <div class="result">
            Result: <?= number_format($result, 4) ?> <?= htmlspecialchars($to) ?>
        </div>
    <?php endif; ?>

    <h3>Common Conversions</h3>
    <table>
        <thead>
            <tr>
                <th>Metric</th>
                <th>Equivalent</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1 meter</td><td>100 centimeters</td></tr>
            <tr><td>1 kilometer</td><td>1000 meters</td></tr>
            <tr><td>1 inch</td><td>2.54 centimeters</td></tr>
            <tr><td>1 foot</td><td>12 inches</td></tr>
            <tr><td>1 yard</td><td>3 feet</td></tr>
        </tbody>
    </table>
</div>

</body>
</html>
