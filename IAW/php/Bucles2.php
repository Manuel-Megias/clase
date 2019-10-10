<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $n=1;
        $x=11;
        echo "<h1> Bucle While de 1 al 100.</h1>";
        while ($n<=99){
            echo $n. ", ";
            $n++;
        }
        echo $n;
        echo "<br/>";

        echo "<h1> Bucle Do While de 100 a 0 (pares).</h1>";
        do {
            echo $n.", ";
            $n=$n-2;
        } while ($n>=2);
        echo $n;
        echo "<br/>";
        
        echo "<h1> Bucle While 11 hasta 0 (impares)</h1>";
        while ($x>2){
            echo $x. ", "; 
            $x=$x-2;
        }
        echo $x;

    ?>
</body>
</html>