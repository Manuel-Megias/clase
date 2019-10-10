<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frutas</title>
</head>
<body>
    <?php
    $fruta="azul";
        switch ($fruta){
            case "verde":
            echo "Es una manzana.";
            break;
            case "rojo":
            echo "Es una manzana.";
            break;
            case "amarillo":
            echo "Es una pera.";
            break;
            case "blanco":
            echo "Es una pera.";
            break;
            case "morado":
            echo "Es una mora.";
            break;
            default:
            echo "Te has equivocado.";
            break;
        }
    ?>           
</body>
</html>