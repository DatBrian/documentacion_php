<?php
/*
? Estructuras condicionales en php:

? En PHP, las estructuras de control son utilizadas para controlar el flujo de ejecución de un programa. Estas estructuras permiten tomar decisiones, repetir bloques de código y realizar acciones condicionales.
*/

// ! Estructura if-else:
//* La estructura if-else se utiliza para tomar decisiones basadas en una condición. Si la condición es verdadera, se ejecuta un bloque de código; de lo contrario, se ejecuta otro bloque de código como se muestra en el siguiente ejemplo:

$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}

//! Estructura switch-case
//*La estructura switch-case se utiliza para realizar acciones diferentes según el valor de una expresión. Se compara la expresión con diferentes casos y se ejecuta el bloque de código correspondiente al caso que coincida como se muestra en el siguiente ejemplo:

$opcion = 2;

switch ($opcion) {
    case 1:
        echo "Seleccionaste la opción 1.";
        break;
    case 2:
        echo "Seleccionaste la opción 2.";
        break;
    case 3:
        echo "Seleccionaste la opción 3.";
        break;
    default:
        echo "Opción inválida.";
        break;
}

//! Estructura for
//*La estructura for se utiliza para repetir un bloque de código un número específico de veces. Se compone de una inicialización, una condición y una expresión de incremento como se muestra en el siguiente ejemplo:

for ($i = 1; $i <= 5; $i++) {
    echo "El valor de i es: " . $i . "<br>";
}


?>