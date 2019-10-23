<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tema 3</title>
</head>
<body>
    <?php
        for ($x=5; $x>0; $x--){
            echo "Hola ";
        }
        echo "<br/>";
        for ($i=10; $i>=0;$i--){
            echo $i." ";
        }
        echo "<br/>";
        $y=10;
        do{
            echo $y. " ";
            $y--;
        } while ($y>=0);
    ?>

    
</body>
</html>