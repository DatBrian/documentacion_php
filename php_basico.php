<?php
/*
? Funciones definidas por el usuario:

? Las funciones definidas por el usuario en programación son bloques de código que se pueden llamar y ejecutar en cualquier parte del programa para realizar una tarea específica. Estas funciones hacen que el código sea modular y reutilizable, lo que facilita la programación y el mantenimiento, hay dos tipos de funciones generales en el lenguaje, las que no retornan algun valor y las que si lo hacecen; a continuación se muestran.
*/

// ! Funciones que no retornan valor (void):
//* En este caso la función saludar va a ejecutar un código específico pero no devolverá ningún valor
function saludar($nombre)
{
    echo "Hola, " . $nombre . "!";
}

saludar("Juan");


// ! Funciones que retornan algún valor::
//* En el caso de esta función ejecuta una suma pero a su vez retorna el resultado por lo que podremos almacenarlo en una variable

function sumar($num1, $num2)
{
    return $num1 + $num2;
}

$resultado = sumar(5, 3);
echo "El resultado es: " . $resultado;


?>