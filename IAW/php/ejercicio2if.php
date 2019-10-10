<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dias</title>
</head>
<body>
    <?php
    // 2 variables llamadas c y d con int.
    // Otras 2 booleanas, a y b.
    // Si las 2 booleanas son true hay que mostrar el resultado c y d
    // Si las 2 booleanas son false hay que mostrar c+d
    //Si a true y b false se muestra c-d
    //Si b es true y a false se muestra d-c 
        $a=true;
        $b=true;
        $c=2;
        $d=3;

        if ($a){
            if ($b){
                echo $c*$d;
            }
            else
            echo $c-$d;
        }
        else
            if ($b){
                echo $d-$c;
            }
            else
            echo $c+$d;
    ?>           
</body>
</html>