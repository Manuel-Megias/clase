<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        for ($x=1;$x<=10;$x++){
            echo 9*$x. "<br/>";
        }
        echo "<br/>";
        echo"<br/>";
        for ($i=1;$i<=3;$i++){
            for ($y=1;$y<=2;$y++)
            echo $i. ",". $y. "<br/>";
        }
        echo "<br/>";
        echo"<br/>";
        for ($i=10;$i>=0;$i-=2){
            echo $i. "-> ";
            for ($y=$i;$y>=0;$y-=2){
                echo $y." ";
            }
             echo "<br/>";
        }
        echo "<br/>";
        echo"<br/>";
        for ($i=10;$i>=0;$i--){
            echo $i. "-> ";
            for ($y=$i;$y>=0;$y-=2){
                echo $y." ";
            }
             echo "<br/>";
        }
        echo "<br/>";
        echo"<br/>";
        for ($i=1;$i<=25;$i+=5){
            for ($y=0;$y<=4;$y++){
                $x=$i+$y;
                echo $x." ";
            }
             echo "<br/>";
        }
        echo "<br/>";
        echo"<br/>";
        for($i=1;$i<=5;$i++){
            echo "$i ";
            if($i == 1){
                for($j=1;$j<=4;$j++){
                    $a = $i + $j;
                    echo "$a ";
                }
            }
            else{
                for($j=2;$j<=5;$j++){
                    $a = $i + $j;
                    echo "$a ";
                }
            }
            echo"<br/>";
        }
        echo"<br/>";
        echo"<br/>";

        for ($i=1;$i<=9;$i++){
            for ($y=1;$y<=9;$y++){
                $a=$y*$i;
                echo $a." ";
            }
             echo "<br/>";
        }
        echo "<br/>";


    ?>

</body>
</html>