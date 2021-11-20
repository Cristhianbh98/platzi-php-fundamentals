<?php
/* Array Simple */

$courses = 
[
    'JS',
    10 => 'PHP',
    'VueJS'
];

echo '<pre>';

var_dump($courses);

echo '</pre>';

/*Array Complejo*/

$courses = 
[
    'Frontend' => 'JS',
    'Framework' => 'Laravel',
    'Backend' => 'PHP'
];

echo '<pre>';

var_dump($courses);

echo '</pre>';


foreach ($courses as $course)
{
    echo "$course <br/>";
}

echo "<hr/>";

function upper($course, $key)
{
    echo strtoupper($course).":$key<br/>";
}

array_walk($courses, 'upper');

/**
 * array_key_exists('fronted', $courses);
 * in_array('JS', $courses);
 * array_keys($courses);
 * array_values($courses);
 */




var_dump(array_values($courses));



/*Funciones del lenguaje php*/
/*
$courses = 
[
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];


krsort($courses);

echo "<pre>";

//var_dump($courses);
*/

$courses =['php', 'javascript', 'laravel'];

$courses = 
[
    'backend' => 'php', 
    'frontend' => 'javascript'
];


echo "<pre>";

var_dump(array_flip($courses));


//array_shift($courses); // ['javascript', 'laravel',] Elimina el primer elemento y lo retorna

//array_pop($courses); // ['php', 'javascript'] Elimina el último elemento y lo retorna

//array_unshift();  Agrega un elemento al principio

//array_push(); Agrega al final

//array_flip();

/**
 * Estas son algunas de las funciones de PHP utilizadas para los arrays:
 * sort: Ordena un array.
 * rsort: Ordena un array en orden inverso.
 * ksort: Ordena un array por clave.
 * krsort: Ordena un array por clave en orden inverso.
 * array_slice: Extrae una parte de un array.
 * array_chunk: Divide un array en fragmentos.
 *  array_shift: Quita un elemento del principio del array.
 * array_pop: Extrae el último elemento del final del array.
 * array_unshift: Añadir al inicio de un array uno a más elementos.
 * array_push: Inserta uno o más elementos al final de un array.
 * array_flip: Intercambia todas las claves de un array con sus valores asociados.
 */

/*Comparación*/

$courses = ['javascript', 'php'];

$whishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";

//var_dump(array_diff($whishes, $courses)); //Eliminalos datos repetidos entre arrays en este caso solo muestra lod datos de wishes


$arrayA = [1,2,3,4,5];

$arrayB = [3,4,5,6,7];

var_dump(array_diff($arrayB, $arrayA)); //Elima los datos repetidos entre el arrayB y arrayA y muestra B

//array_diff_assoc: valores, keys

$coursesA = 
[
    'backend' => 'php', 
    'frontend' => 'javascript'
];

$coursesB =
[
    'frontend' => 'javascript'
];

var_dump(array_diff_assoc($coursesA, $coursesB));

/*Unión*/

$frontent = [
	'frontend' => 'javascript'
];

$backend = [
	'backend' => 'php', 
	'framework' => 'laravel'
];

echo "<pre>";
var_dump($frontent + $backend);

#array_merge()
//Combina dos o más arrays
$frontent1 = ['javascript'];
$backend1 = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontent1, $backend1));

echo "<br>";
//Ejemplo con los mismo key
#array_merge_recursive
//Une dos o más arrays recursivamente
$frontent3 = [
	'a' => 'javascript'
];

$backend3 = [
	'a' => 'php', 
	'b' => 'laravel'
];

echo "<pre>";
var_dump(array_merge_recursive($frontent3, $backend3));
//Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
//resultado
/* 
array(2) {
  ["a"]=>
  array(2) {
    [0]=>
    string(10) "javascript"
    [1]=>
    string(3) "php"
  }
  ["b"]=>
  string(7) "laravel"
}
*/

echo "<br>";
//Ejemplo con los mismo key
#array_combine
//Crea un nuevo array, usando una matriz para las claves y otra para sus valores
$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));