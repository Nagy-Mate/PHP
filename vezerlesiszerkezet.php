<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérlési szekezetek</title>
    <style>
        table, td{
            border: 1px solid;
            
        }
    </style>
</head>
<body>
     <?php
    $v= 5;
    print("<p>{$v}</p>");
    if($v %2 == 0){
        echo "<p>Páros</p>";
    }else{
        echo "<p>Páratlan</p>";
    }
    $jegy = 4;
    switch($jegy){
        case 1:
            echo "<p>Elégtelen</p>";
            break;
        case 2: 
           echo "<p>Elégséges</p>";
           break;
        case 3:
            echo "<p>Közepes</p>";
            break;
        case 4:
            echo "<p>Jó</p>";
            break;
        case 5:
            echo "<p>Jeles</p>";
            break;
        default:
            echo "<p>Hiba</p>";
            break;
    }
    $month = 9;
    switch($month){
        case 12:
        case 1:
        case 2: 
            echo "<p>Tél</p>";
            break;
        case 3:
        case 4:
        case 5: 
            echo "<p>Tavasz</p>";
            break;
        case 6:
        case 7:
        case 8: 
            echo "<p>Nyár</p>";
            break;
        case 9:
        case 10:
        case 11: 
            echo "<p>Ősz</p>";
            break;                                       
    }

    $val = $v %2 == 0 ?"<p>Páros</p>": "<p>Páratlan</p>";
    echo $val;
    echo "<table><tr>";
    for($i = 1; $i <= 10; $i++ ){
        echo "<td>{$i}</td>";
    }
   echo "</tr></table> <br>";
    
   $i = 11;
   echo "<table><tr>";
    while($i <= 20){
        echo "<td>{$i}</td>";
        $i ++;
    }
    echo "</tr></table>";
    ?>
    <ol>
        <?php
        $i = 1;
        do{
            echo "<li>$i</li>";
            $i++;
        }while($i< 6);
        ?>
    </ol>
</body>
</html>