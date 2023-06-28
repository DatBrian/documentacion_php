<?php
/*
? isset() y empty():

? En PHP, las funciones isset() y empty() se utilizan para verificar el estado de una variable
*/

//* isset(): Esta función verifica si una variable está definida y tiene un valor asignado. Devuelve true si la variable existe y tiene un valor, y false si la variable no está definida o tiene un valor nulo como se muestra en el siguiente ejemplo:

$nombre = "Juan";

if (isset($nombre)) {
    echo "La variable \$nombre está definida y tiene un valor.";
} else {
    echo "La variable \$nombre no está definida o no tiene un valor.";
}

//* empty(): Esta función verifica si una variable está vacía. Devuelve true si la variable está vacía, es decir, si no tiene valor asignado, o si su valor se evalúa como falso (por ejemplo, una cadena vacía, el número 0 o el valor booleano false). Devuelve false si la variable tiene algún valor asignado y se evalúa como verdadero como se muestra en el siguiente ejemplo:

$edad = 0;

if (empty($edad)) {
    echo "La variable \$edad está vacía o se evalúa como falso.";
} else {
    echo "La variable \$edad tiene un valor asignado y se evalúa como verdadero.";
}


?>