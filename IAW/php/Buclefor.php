<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1> De 100 a 1 Pares.</h1>";
        for ($i=100; $i>2; $i-=2){
            echo $i.", ";
        }
        echo $i;
        echo "<br/>";
        echo "<h1>For anidados.</h1>";
        for ($x=0;$x<4;$x++){
            for ($y=1;$y<5;$y++){
                echo "$x, $y <br/>";
            }
        }
    ?>
</body>
</html>