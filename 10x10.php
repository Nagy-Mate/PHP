<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10x10 Tábla</title>
    <style>
         td{
            border: 1px solid ;
            width: 22px;
            height:22px;
            text-align: center;
        }
        .color{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <?php
    echo "<table> <tr>";
    for($i = 1; $i <= 100; $i++){
        if($i % 10 == 0){
            echo "<td>$i</td> </tr>";
        }else if($i % 10 == 1){
            echo "<tr> <td>$i</td>";
        }else if($i % 11 == 1){
            echo "<td class = color > $i</td>";
        }
        else{
            echo "<td> $i</td>";
        }

    }
    echo "</table> ";
    ?>
</body>
</html>