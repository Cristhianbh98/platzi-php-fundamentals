<?php
$fullname = 'Cristhian Jossue Bacusoy Holguin';

$fullname = strtolower($fullname);

$fullname = str_replace(' ','',$fullname);

$letras = [];

# Busca la cantidad de letras

for($i = 0; $i < strlen($fullname); $i++)
{
    
    if(empty($letras[$fullname[$i]])) // Verifica si existe la letra, si no existe la crea, si existe la suma
    {
        $letras[$fullname[$i]] = 1;
    }
    else
    {
        $letras[$fullname[$i]] ++;
    }
    
}

# Imprimir el array

echo "<pre>";

var_dump($letras);

echo "</pre>";


?>