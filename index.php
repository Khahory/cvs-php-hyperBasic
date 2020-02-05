<?php
$lista = [];

$linea = 0;
//Abrimos nuestro archivo
$archivo = fopen("deve.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true)
{
    $num = count($datos);
    $linea++;
    array_push($lista, $datos);
}
//Datos a mosrar
foreach ($lista as $item) {
    echo '<br>';
    echo $item[0].'<br>';
    echo $item[1].'<br>';
    echo $item[2].'<br>';
}
//Cerramos el archivo
fclose($archivo);
?>
