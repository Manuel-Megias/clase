<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <?php
         echo "<br/>";
         echo "<h1>Ejercicio 1. (22/10)</h1>";
         $ejemplo[] ="A";
         $ejemplo[1] = "E";
         $ejemplo[2] = array ("R","B","C","D");
         $ejemplo[] = 8;
         print_r ($ejemplo);
         echo "<br/> Voy a sacar una ". $ejemplo[0];
         echo "<hr/>";
 
         echo "<br/>";
         echo "<h1>Ejercicio 2. (22/10)</h1>";
         $otroarray = array (0 => "R",
                             1 => "B",
                             2 => array ("D", "C", "B", "R"),
                             3 => 8,);
         print_r ($otroarray);
         echo "<br/> Voy a sacar una ". $otroarray[2] [0];
         echo "<hr/>";

         echo "<br/>";
         echo "<h1>Ejercicio colores.</h1>";
         $colores = array ( "Warm" => array ("Red" => "#FF0000",
                                            "Orange" => "#FFCC00",
                                            "Yellow" => "#FFFF66"),
                            "Cold" => array ("Blue" => "#0000FF",
                                            "Green" => "#00FF00",
                                            "Purple" => "#9900CC")
                            );
         echo "<br/> El color es ". $colores["Warm"] ["Red"];            
         echo "<table>";
            foreach ($colores as $ind=>$cont)
                            if (is_array($cont)){
                                echo "<tr>";
                                    foreach ($cont as $ind2=>$col){
                                        echo "<td style='border:1px solid black; background-color:$col;'> $col </td>";
                                    }
                                echo "</tr>";
                            }
         echo "</table>";
         echo "<hr/>";

         echo "<br/>";
         echo "<h1>Ejercicio .</h1>";

        ?>
</body>
</html>