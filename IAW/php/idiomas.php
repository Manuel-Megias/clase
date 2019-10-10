<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saludos</title>
</head>
<body>
    <?php
    $lenguage="";
        switch ($lenguage){
            case "Español":
            echo "El saludo es 'Hola, buenos dias'.";
            break;
            case "Ingles":
            echo "El saludo es 'Hello, good morning'.";
            break;
            case "Frances":
            echo "El saludo es 'Bonjour'.";
            break;
            case "Aleman":
            echo "El saludo es, 'Hallo, guten morgen'.";
            break;
            case "Holandes":
            echo "El saludo es, 'Hallo goedemorgen'.";
            break;
            default:
            echo "El idioma no esta registrado.";
            break;
        }
    ?>           
</body>
</html>