<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Ejercicio 1.</h1>";
        for ($a=1;$a<=100;$a++){
            $x[$a]=$a;
        }
        var_dump($x);
        echo "<br/>";
        echo "<h1>Ejercicio 2.</h1>";
        $k=2;
        for ($i=0;$k<=100;$i++){
            $p[$i]=$k;
            $k=$k+2;
        }
        var_dump($p);
        echo "<br/>";
        echo "<h1>Ejercicio 3.</h1>";
        $b=1;
        for ($i=0;$b<=100;$i++){
            $p[$i]=$b;
            $b=$b+2;
        }
        var_dump($p);
        echo "<br/>";
        echo "<h1>Ejercicio 4.</h1>";
        $edades=array("lola"=>6, "Pedro"=>19, 28=>"Rut", 30=>"Pedro", "Sara"=>50);
        foreach ($edades as $resultado){
            echo "$resultado ";
        }
        echo "<br/>";
        foreach ($edades as $indice=>$result){
            echo "$indice $result, ";
        }

    ?>
</body>
</html>