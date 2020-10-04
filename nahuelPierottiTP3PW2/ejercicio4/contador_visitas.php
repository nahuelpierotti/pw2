<?php
$ruta="../";
include($ruta.'header.php');

$nombre=isset($_POST["visitante"])?$_POST["visitante"]:"no ingresado";
$planeta=isset($_POST["planeta"])?$_POST["planeta"]:"no ingresado";

function guardarVisitaArchivo($n,$p){

        $archivo = fopen("visitas.txt", "a");
        $datos = $n . "|" . $p.PHP_EOL;
        fwrite($archivo, $datos);
        fclose($archivo);
}
function contadorVisitasNoTerricolas($array_visitas)
{
    $contador = 0;
    foreach ($array_visitas as $visita) {
        list($nomb, $planet) = $visita;
        if ($planet != "tierra") {
            $contador++;
        }
    }
    return $contador;
}
function leerVisitasArchivo(){
    $lines = array();
    $array_visitas=array();
    $fopen = fopen('visitas.txt', 'r');
    while (!feof($fopen)) {
        $line=fgets($fopen);
        $line=trim($line);
        $lines[]=$line;

    }
    fclose($fopen);

    foreach ($lines as $string)
    {
        $row = explode("|", $string);
        array_push($array_visitas,$row);
    }
    $eliminar=count($array_visitas)-1;
    unset($array_visitas[$eliminar]);
    return $array_visitas;
}
function imprimir($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";

}
echo guardarVisitaArchivo($nombre,$planeta);
$arrayVisitas=leerVisitasArchivo();
//imprimir($arrayVisitas);
echo 'Cant. Visitas no Terricolas: '.contadorVisitasNoTerricolas($arrayVisitas);

include($ruta . "footer.php");
