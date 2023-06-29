<?php
/*
? include, require, include_once, require_once:

? Las funciones include, require, include_once, require_once se utilizan para incluir archivos externos, aunque todas cumplen esta función cada una tiene sus diferencias las cuales se exponen a continuación.
*/

// ! include y include_once:
//* Ambas funciones sirven para incluir un archivo, include lo traerá todas las veces que sea mientras que include_once solo lo utilizará una vez.

include "archivo.php";

include_once "archivo.php";

// ! require y require_once:
//* Ambas funciones sirven para incluir una archivo externo en el proyecto, de la misma forma require lo traerá todas las veces que sean necesarias mientras que require_once solo lo utilizará una vez; la diferencia entre require y include es que al utilizar require si el archivo no existe se detendrá la ejecución del programa.

require "archivo.php";

require_once "archivo.php";

?>