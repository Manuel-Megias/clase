<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    for($x=0; $x<=9;$x++){
        $numero=rand(3,60);
        $array[$x]=$numero;
    }
    print_r ($array);
    for($m=0;$m<=$x;$m++){
        for($y=0;$y<$x-1;$y++){
            if ($array[$y]>=$array[$y+1]){
                $n=$array[$y];
                $array[$y]=$array[$y+1];
                $array[$y+1]=$n;
            }
        }
    }
    echo "<br/>";
    echo "<br/>";
    print_r ($array);

    ?>
</body>
</html>