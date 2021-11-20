<?php

/**
 * Programa para contar la cantidad de palabras en un texto
 */

$text = "Los “arrays complejos” son llamados de igual forma “arrays asociativos”, donde prácticamente al valor le poner un nombre, eso es todo, y lo interesante de esto es que actúa de la misma forma que una lista, así como actúa de la misma forma de un objeto JSON, tiene en lista el atributo clave/valor, esta es la forma más cómoda de trabajar con objetos JSON desde PHP, y claro que existen funciones para transformar un array asociativo en objetos JSON y viceversa. Por último, en la función array_walk fácilmente se pudo haber usado un Closure, lo menciono para que empiecen a darse una idea de cómo todo se conecta.";

$words = explode(' ',$text); //Separar todas las palabras entre espacios



function checkStr($word)
{
    $key_words = array(' ',',','"','“','”','!','¡','?','¿','.'); //Palabras claves a remplazar
    return mb_strtoupper(str_replace($key_words,'',$word));
}

$words_count; //Array del conteo de palabras

/*Proceder al conteo de palabras*/
foreach($words as $word)
{
    if(empty($words_count[checkStr($word)]))
    {
        $words_count[checkStr($word)] = 1;
    }
    else
    {
        $words_count[checkStr($word)]++;
    }
};

/*Proceder a mostrar el conteo*/

foreach($words_count as $key => $count)
{   
    echo "$key = $count <br/>";
}

?>