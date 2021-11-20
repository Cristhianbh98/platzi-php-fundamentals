<?php
echo "<!DOCTYPE html>\n";

# Acceder a un carácter de un string mediante un corchete

$data = 'Estudio PHP';

echo $data[0];

echo '<br/>';

# Extraer un texto de un string mediante el método substr()

$post = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error amet assumenda distinctio sapiente, animi optio ipsam reprehenderit repudiandae magni aspernatur';

$extract = substr($post, 0, 20); //Elegimos la variable, el inicio y el final

echo "$extract... [ver más]";

# Convertir un string en un array con el método explode()

$data = 'javascript, php, laravel'; //campo tags de mi formulario

$tags = explode(', ', $data); //Elegir cada que ', ' agregar al array

echo "<pre>";

var_dump($tags); //Imprimir el array completamente

echo "</pre>";

/*
----Output-----
array(3) {
  [0]=>
  string(10) "javascript"
  [1]=>
  string(3) "php"
  [2]=>
  string(7) "laravel"
}
*/

#Convertir un array en texto con el comando implode()

$courses = ['javascript', 'PHP', 'Laravel'];

echo implode(', ',$courses); //Imprimir el array y entre medio imprimir ', '

# Borrar los espacios antes y después del texto en los string con la función trim()

$course = "    Cursos de PHP       ";

$course = trim($course); //Quitar los espacios anteriores y posteriores también se puede usar ltrim() y rtrim()

echo '<pre>';

echo "Quiero aprender $course, y otro texto";

echo '</pre>';

?>