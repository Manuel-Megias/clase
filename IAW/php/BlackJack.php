<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("libreria.php");
        $jugadores=elige_num_jugadores();
        $cartas=reparte($jugadores);
        $puntos=contar_puntos($cartas);
        elegir_ganador($puntos);
    ?>
</body>
</html>