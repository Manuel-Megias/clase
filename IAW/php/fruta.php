<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frutas</title>
</head>
<body>
    <?php
        $color="blanco";

        if (($color=="verde") or ($color=="rojo")){
            echo "Es una manzana.";
        }

        elseif (($color=="amarillo") or ($color=="blanco")) {
            echo "Es una pera.";
        } 
        elseif ($color=="morado"){
            echo "Es una mora.";
        }
        else {
            echo "Te has equivocado.";
        }
    ?>           
</body>
</html>