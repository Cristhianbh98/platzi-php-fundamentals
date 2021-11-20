<?php

# Expresiones regulares

/*
 * '/' -> Inicia y finaliza la expreción
 * '[]' -> Dentro contiene el patrón de la expresión 
 * '{}' -> Dentro contiene las condiciones
 * '-' -> Define el rango
 * '^' -> Indica que la expresión debe coincidir desde el prinicipio del string
 * '$' -> Indica qie la expresión debe coincidir el final del string.
 */

$password = '123456789';

$test = preg_match('/^[0-9]{6,9}$/', $password); //Devuelve un interger

$test = (bool)preg_match('/^[0-9]{6,9}$/', $password); //Devuelve un boolean

var_dump($test);

?>