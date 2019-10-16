<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td{border:1px solid black; padding:5px}
        table{border-collapse: collapse}
    </style>
</head>
<body>
    <?php
        echo "<h1>Ejercicios 1.</h1>\n";
        for ($x=2;$x>=0;$x--){
            for ($y=3;$y>=1;$y--){
                echo "$x, $y <br/>";
            }
        }

        echo "<br/>\n";

        echo "<h1>Ejercicios 2.</h1>\n";
        for ($x=2;$x>=0;$x--){
            for ($y=0;$y<=3;$y++){
                echo "$x, $y <br/>";
            }
        }

        echo "<br/>\n";

        echo "<h1>Ejercicios 3.</h1>\n";
        for ($x=5;$x>=1;$x--){
            for ($y=1;$y<=$x;$y++){
                echo $y." ";
            }
            echo "<br/>";
        }

        echo "<br/>\n";

        echo "<h1>Tabla</h1>\n";
        echo "<table>\n";
            for ($z=1; $z<=3; $z++){
                echo "<tr>\n";
                for ($p=1;$p<=4;$p++){
                    $l=$z+$p;
                    echo "<td>$l</td>";
                }
                echo "\n</tr>\n";
            }
        echo "</table>\n";

        echo "<br/>\n";

        echo "<h1>Ejercicios 2 CLASE.</h1>\n";

        for ($x=30;$x>=1;$x--){
            for ($y=1;$y<=$x;$y++){
                echo $y." ";
            }
            echo "<br/>";
        }

        echo "<br/>\n";

        echo "<h1>Ejercicios 3 y 4 CLASE.</h1>\n";
        $n="Guillermo";
        $m=strlen($n);
        for ($x=0;$x<=$m-1;$x++){
            for ($y=0;$y<=$m-1;$y++){
                if ($x==$y){
                    echo $n[$x]." ";
                }else{
                    echo "*";
                }
                  
            }
            echo "<br/>";
        }

        echo "<br/>\n";

        echo "<h1>Ejercicios 2, 3 y 4 CLASE (WHILE).</h1>\n";
        $q=10;
        while ($q>=0){
            $w=1;
            while ($w<=$q){
                echo $w." ";
                $w++;
            }
            echo "<br/>";
            $q--;
        }
            
    ?>
</body>
</html>