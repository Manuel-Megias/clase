<?php
    function mostrar_resul ($num1, $num2, $num3){
        echo "<br/>La suma es ". ($num1+$num2+$num3);
        echo "<br/>La multiplicacion es ". ($num1*$num2*$num3);
    }

    
    function intercambia ($s,$t){
        $s=3;
        $t=8;
        $c=$s;
        $s=$t;
        $t=$c;
        echo "$s, $t";
    }

    function crea_array (){
        $r=mt_rand (1,10);
        for($i=0;$i<=$r;$i++){
            $a1[]=mt_rand(1,200);
        }
        return $a1;
    }


    function muestra_array ($x){
        foreach ($x as $i=>$c){
            if(is_array($x[$i])){
                echo "<p>Indice $i Contenido Array.</p>";
                foreach ($c as $in=>$co){
                    echo "<p style='color:red; margin-left:50px;'>Indice $in Contenido $co.</p>";
                }
            }else{
                echo "<p>Indice $i Contenido $c.</p>";
            }
        }

    }


    function multiplica_array ($q){
        $r=1;
        foreach ($q as $ind=>$con){
            $r=$r*$con;
        }
        return $r;
    }
    function factorial ($y){
        for ($a=$y-1;$a>0;$a--){
            $y*=$a;
        }
        return $y;
    }

    function fibonacci ($x){ 
        $array[0]=0;
        $array[1]=1;
        for ($a=2;$a<=$x;$a++){
            $array[$a]=$array[$a-1]+$array[$a-2];
        }
        return $array;
    }

    function muestra_array_inv ($x){
        $c=count ($x)-1;
        for ($m=$c;$m>=0;$m--){
            echo "Indice $m Con $x[$m].";
            echo "<br/>";
        }

    }


    function intercambia_ref (&$s,&$t){
        $c=$s;
        $s=$t;
        $t=$c;
    }


    function crea_regiones(){
        $regiones=array(
            "Andalucia" => array(
                0=>"Granada",
                1=>"Málaga",
                2=>"Cordoba",
                3=>"Sevilla",
                4=>"Almeria",
                5=>"Huelva",
                6=>"Jaén",
                7=>"Cádiz",
            ),
            "Extremadura" => array(
                0=>"Cáceres",
                1=>"Badajoz",
            ),
            "Galicia" => array(
                0=>"Lugo",
                1=>"Ourense",
                2=>"Pontevedra",
                3=>"Coruña",
            ),
        );
        return $regiones;
    }
        function cuenta_provincias($regiones){
            $cont=0;
            foreach ($regiones as $val){
                    $cont=$cont+count($val);
                }
            return "$cont";
        }
        function elige_num_jugadores(){
            $num=rand(1,5);
            return $num;
        }

        function muestra_array_BJ ($x){
            foreach ($x as $i=>$c){
                echo "El Jugador $i tiene:";
                echo "<br/>";
                    foreach ($c as $co){
                        echo "$co,";
                        echo "<br/>";
                    };
            };
            echo "<br/>";

        }
        function reparte($jugadores){
            $baraja=array("As",2,3,4,5,6,7,8,9,10,"J","Q","K");
            for ($i=0; $i<=$jugadores; $i++){
                for ($x=0; $x<=2;$x++){
                    $carta[$x]=$baraja[rand(0,12)];
                    };
                $player[$i]=$carta;
            };
            muestra_array_BJ($player);
            return $player;
         }
         function contar_puntos($c){
            $punto=array();
            foreach ($c as $i=>$x){
                $s=0;
                foreach ($x as $co){
                    switch ($co){
                        case "As":
                            $s=$s+11;
                            break;
                        case "Q":
                            $s=$s+10;
                            break;
                        case "J":
                            $s=$s+10;
                            break;
                        case "K":
                            $s=$s+10;
                            break;
                        default:
                        $s=$s+$co;
                    };
                };
                $punto[$i]=$s;
            };
            print_r($punto);
            return $punto;
        }
        function elegir_ganador($p){
            $mayor=0;
            $ju=100;
            foreach ($p as $i=>$c){
                if ($c<22){
                    if($c==$mayor){
                        $ju=404;
                    };
                    if($c>$mayor){
                        $mayor=$c;
                        $ju=$i;
                    };
                };
            };
            echo "</br>";
            if($ju==404){
                echo "Los jugadores";
                foreach ($p as $i=>$c){
                    if($c==$mayor){
                        echo " $i ";
                    };
                };
                echo "han empatado.";
            }elseif($ju==100){
                echo "No hay ganador";
            }else{
                echo "El ganador es el jugador $ju";
            };
        }

?>