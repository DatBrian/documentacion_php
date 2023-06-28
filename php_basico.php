<?php
/*
? Arreglos, Arreglos asociativos y funciones para arreglos:

?En PHP, hay diferentes tipos de arreglos pero todos son estructuras para el almacenamiento de datos
*/
//! Arreglos
//*Los arreglos en PHP son estructuras de datos que permiten almacenar múltiples valores en una sola variable. Los elementos de un arreglo se pueden acceder mediante un índice numérico que representa su posición como se muestra en le siguiente ejemplo:

$frutas = array("manzana", "naranja", "plátano");
echo $frutas[0];

//! Arreglos asociativos
//*Los arreglos asociativos son una variante de los arreglos en PHP en los que los elementos se acceden mediante claves en lugar de índices numéricos. Cada elemento del arreglo asociativo está compuesto por una clave y un valor asociado como se muestra en el siguiente ejemplo:

$edades = array("Juan" => 25, "María" => 30, "Pedro" => 35);
echo $edades["María"];

/*
! Funciones para arreglos:

? PHP proporciona varias funciones para trabajar con arreglos y algunas de las funciones mas comunes son:

*count(): Devuelve la cantidad de elementos en un arreglo.
*array_push(): Agrega uno o más elementos al final de un arreglo.
*array_pop(): Elimina y devuelve el último elemento de un arreglo.
*array_merge(): Combina dos o más arreglos en uno nuevo.
*array_keys(): Devuelve un arreglo con todas las claves de un arreglo asociativo.
*array_values(): Devuelve un arreglo con todos los valores de un arreglo asociativo.

*/

?>