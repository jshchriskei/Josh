<?php
$rank = "";
$grade = "";
$name = "";

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $grade = $_POST['grade'];

    if ($grade >= 93 && $grade <= 100)  $rank = "A";
    elseif ($grade >= 90)               $rank = "A-";
    elseif ($grade >= 87)               $rank = "B+";
    elseif ($grade >= 83)               $rank = "B";
    elseif ($grade >= 80)               $rank = "B-";
    elseif ($grade >= 77)               $rank = "C+";
    elseif ($grade >= 73)               $rank = "C";
    elseif ($grade >= 70)               $rank = "C-";
    elseif ($grade >= 67)               $rank = "D+";
    elseif ($grade >= 63)               $rank = "D";
    elseif ($grade >= 60)               $rank = "D-";
    else                                $rank = "F";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f9; display: flex; justify-content: center; padding: 50px; }
        .container { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 400px; }
        h2 { margin-top: 0; color: #333; }
        form { margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #5cb85c; border: none; color: white; border-radius: 4px; cursor: pointer; }
        
        .result { margin-top: 20px; border-top: 2px solid #eee; padding-top: 20px; }
        .name { font-weight: bold; margin-bottom: 15px; font-size: 1.2rem; }
        .boxes { display: flex; gap: 10px; justify-content: space-between; }
        .box { flex: 1; background: #f8f9fa; border: 1px solid #ddd; padding: 10px; text-align: center; border-radius: 5px; }
        .box p { margin: 0; font-size: 0.8rem; color: #666; text-transform: uppercase; }
        .box h3 { margin: 5px 0 0 0; color: #333; }
        .picture { background: #e9ecef; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; color: #999; }
    </style>
</head>
<body>

<div class="container">
    <h2>Grade Ranking System</h2>
    
    <form method="post">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="number" name="grade" placeholder="Enter Grade" min="0" max="100" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if ($rank != ""): ?>
        <div class="result">
            <div class="name">Student: <?php echo $name; ?></div>
            <div class="boxes">
                <div class="box">
                    <p>Rank</p>
                    <h3><?php echo $rank; ?></h3>
                </div>
                <div class="box">
                    <p>Grade</p>
                    <h3><?php echo $grade; ?></h3>
                </div>
                <div class="box picture">
                    [Photo]
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
