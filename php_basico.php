<?php
/*
? json_encode y json_decode:

? Estas funciones sirven tanto para convertir en json como viceversa.
*/

// ! json_encode:
//* Sirve para convertir datos de PHP a formato JSON como se ve en el siguiente ejemplo.

$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'New York'
);

$jsonString = json_encode($data);
echo $jsonString;


// ! json_decode:
//* Al contario de json_encode esta funcion sirve para convertir datos en formato JSON en datos de PHP como se muestra en el siguiente ejemplo.

$jsonString = '{"name":"John Doe","age":30,"city":"New York"}';

$data = json_decode($jsonString);
echo $data->name;
echo $data->age;
echo $data->city;


?>