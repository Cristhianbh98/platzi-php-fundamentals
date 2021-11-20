<?php

# Alterar String

$text = "PHP ES UN LENGUAJE DE PROGRAMACIÓN, AÑO 2020";

$text_wo_a = "TEXTO SIN ACENTO";

echo strtolower($text_wo_a) . "<br/>"; // El texto se pone en minúsculas para monobyte

echo mb_strtolower($text) . "<br/>"; // El texto se pone en minúscula para multibyte

echo strtoupper($text_wo_a) . "<br/>"; // El texto lo convierte en mayúscula para monobyte

echo mb_strtoupper($text) . "<br/>"; // El texto lo convierte en mayúscula para multibyte

echo ucfirst($text) . "<br/>"; //La primera letra la transforma en mayúscula

echo lcfirst($text) . "<br/>"; //La primera letra la transforma en minúscula

# Remplazar string

$slug = str_replace(' ', '-', $text); //Remplaza ' ' por '-'

echo $slug . "<br/>";

# Modificación

$code = 39;

echo str_pad($code, 8, '#', STR_PAD_LEFT) . "<br/>"; //Modifica el código llenando los caracters faltantes

# Quitar etiquetas

$text_w_tags = '<h1>Texto con etiquetas</h1>';

echo strip_tags($text_w_tags); //quita las etiquetas html


?>