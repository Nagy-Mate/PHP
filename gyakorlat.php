<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td{
            border: 1px, solid, black;
        }
        div{
            border: 1px, solid, black;
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php

    echo "<table>";
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
        $sum += $i;
        echo "<tr><td> $i</td><td> $sum</td></tr>";
    }
    echo "</table><br>";



    for($i = 108; $i >= 20; $i -= 22){
        echo "<div style='width: {$i}px; height: {$i}px;'>";
    }
    for($i = 0; $i < 5; $i++){
        echo "</div>";
    }
    ?>
</body>
</html>