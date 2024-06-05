<!DOCTYPE html><html>
    <head>
        <title>Ejemplo</title>
        <meta charset="UTF-8">

        <style type="text/CSS">
            body {color:  rgb(215, 65, 252) ;}
           
            header{
            background-color: rgb(239, 213, 179);
            color: white;
            padding: 12px ;
            text-align: center;
            bottom: 0;
            width: 100%;
           
        }
        </style>
    </head>
    <body>
        <header>
    <em><h2 align="center">FUNCIONES </h2></em><br>
    <em><h3 align="center">ejercicio 1,2,3,4,5</h3></em><br>
    </header>
        <?php

function añobisiesto($año){
   
    $raño=$año%4;

    if($raño==0){
        echo"el año ".$año. " es bisiesto";
    
    }else{
        echo"el año ".$año. " NO es bisiesto";
    }
}
echo añobisiesto(2019);
?>
<br>
<em><p align="center">El año 2019 no es bisiesto porque tiene 256 dias</p></em><br>
<br>
<hr>
<em><p align="center">Para ser un alumno aprobado, debe acomular mas de 60 puntos</p></em><br>
<?php
 function alumnoaprobado($cal){
    if($cal>=60){
        echo"el alumno esta aprobado";
    }elseif ($cal<60){
        echo"el alumno esta reprobado";
    }
}
echo alumnoaprobado(39);
?>
<em><p align="center">El alumno no pudo obtener los 60 puntos necesarios para aprobar</p></em><br>
<hr>
<em><p align="center">El numero negativo es menor que cero</em><br>
<br>
<em><p align="center">El numero positivo es mayor que cero</p></em><br>
<?php
function numeros_neg_posi($num){
    if($num<0){
        return"El numero $num es negativo <br>";
    }else if ($num==0){
        return"El numero $num es igual que 0 <br>";
    } else {
        return"El numero $num es positivo <br>";
    }
}
echo numeros_neg_posi(5);
?>
<hr>
<br>
<em><p align="center">Cada dia de la semana se le asigno un numero</p></em><br>
<?php
function numerodia($dia){
    switch($dia){
        case"1";
        echo"lunes es el numero".$dia;
        break;
        case"2";
        echo"martes es el numero".$dia;
        break;
        case"3";
        echo"miercoles es el numero".$dia;
        break;
        case"4";
        echo"jueves es el numero".$dia;
        break;
        case"5";
        echo"viernes es el numero".$dia;
        break;
        case"6";
        echo"sabado es el numero".$dia;
        break;
        case"7";
        echo"domingo es el numero".$dia;
        break;
        default:
            echo "El número ingresado no corresponde a ningún día de la semana."; 
    }
}

echo numerodia(7);
?>
<hr>
<br>
<em><p align="center">Es mayor de edad si tiene 18 años o mas </p></em><br>
<br>
<em><p align="center">Es menor de edad si tiene menos de 18 años</p></em><br>
<?php

function mayor_menor_edad($edad){
if($edad>=18){
    return" Es mayor de edad <br>";
}else{
    return" Es menor de edad <br>";
}
}

echo mayor_menor_edad(17);
?>



<hr>
</body>
</html>

