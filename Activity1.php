<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #333;
        }
        .result {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            color: #0275d8;
        }
        .dice {
            font-size: 30px;
            margin: 10px;
        }
        .winner {
            color: green;
        }
        .tie {
            color: orange;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Dice Rolling Game</h1>
    <?php
        $point1 = 0;
        $point2 = 0;
        echo "<div class='dice'>";
        for ($i = 0; $i < 6; $i++) {
            $count1 = rand(1,6);
            $count2 = rand(1,6);
            echo "🎲 User 1: <strong>$count1</strong> vs User 2: <strong>$count2</strong><br>";

            if ($count1 > $count2) {
                $point1++;
            } elseif ($count1 < $count2) {
                $point2++;
            }
        }
        echo "</div>";

        echo "<div class='result'>";
        if ($point1 > $point2) {
            echo "<span class='winner'>🎉 User 1 wins!</span>";
        } elseif ($point1 < $point2) {
            echo "<span class='winner'>🎉 User 2 wins!</span>";
        } else {
            echo "<span class='tie'>🤝 It's a tie!</span>";
        }
        echo "</div>";
    ?>
</div>

</body>
</html>

