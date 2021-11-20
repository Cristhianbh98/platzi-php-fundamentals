<?php

$name = 'Cristhian';

#Comillas simples

echo '<h1>Comillas simples</h1>';

echo 'La comillas simples sirven para imprimir un texto plano.<br/>';

echo 'En estás comillas no podemos usar variables como \'$name\' porque imprimirán la variable como texto. <br/>';

echo 'Podemo usar un \\ (backslash), para poder imprimir como texto plano comillas u otros backslashs.<br/>';

echo 'Para poder concatenar ' . 'texto podemos usar el \'.(punto)\'';

# Comillas compuestas

echo '<h1>Comillas compuestas</h1>';

echo 'Estas comillas son dinámicas por ende podemos imprimir variables dentro de estás comillas como: <br/>';

echo "Mi nombre es $name <br/>";

echo 'En este caso la variable $name ha impreso su valor: ' . $name . '<br/>';

# Creación de una variable compleja
$courses = 
[   
    'backend' => 
    [
        'PHP',
        'Symfony'
    ]
];

# Creación de una clase
class User
{
    public $name = 'Cristhian';
} 

$user = new User;

echo 'Para imprimir variables complejas necesitamos las llaves {} como en el ejemplo de acontinuación: <br/>';

echo "$user->name quiere aprender {$courses['backend'][0]} para poder usar el framework de: {$courses['backend'][1]}. <br/>";

function getTeacher()
{
    return 'teacher';
}

$teacher = 'Cristhian';

$Cristhian = 'PHP';

$PHP = 'Symfony';

echo "${getTeacher()} quiere aprender ${$teacher} para poder usar el framework de: {${${${getTeacher()}}}}. <br/>";

?>