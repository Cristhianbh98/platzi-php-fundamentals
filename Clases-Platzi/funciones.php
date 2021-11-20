<?php

/*----Función sin datos predefinidos---*/

function greetN($name)
{
    return "Hola, $name";
}

echo greetN('Cristhian')."<br/>";

/*---Función con referencias---*/

$course = 'PHP';

function path(&$course)
{
    $course = 'Laravel';
    echo $course."<br/>"; //Imprimir laravel y efectuar cambios
}

path($course); 

echo $course."<br/>";   //Imprimir Laravel

/*Función con datos predefinicos*/

function greet($name = 'Cristhian')
{
    return "Hola, $name";
}

echo greet()."<br/>";

echo greet('Abel')."<br/>";

/** Imprimir un array **/

function greetA()
{
    return ['PDF','Vista'];
}

echo '<pre>';

var_dump(greetA()); //Imprime un array

echo '</pre>';

//exit(); //Detiene el sistema

//return; //Retorna un valor

$test = ['H','B'];

echo '<pre>';

var_dump($test);

echo '</pre>';

/*Funciones anónimas*

/*
$greet = function ($name) //Se usa en variables que requieren lógica
{
    return "Hola, $name";
};

echo $greet('Cristhian');
*/

function greetAn(Closure $lang, $name)
{
    return $lang($name);
};

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};


echo greetAn($en, 'Cristhian'.'<br/>');

echo greetAn($es, 'Cristhian'.'<br/>');

?>