<?php
$ruta="../";
include($ruta.'header.php');
$entrada = isset($_POST['entrada']) ? $_POST['entrada'] : "No selecciono entrada";
$plato = isset($_POST['plato']) ? $_POST['plato'] : "No selecciono plato principal";
$acompaniamiento = isset($_POST['acompa']) ? $_POST['acompa'] : "No selecciono acompañamiento";
$postre = isset($_POST['postre']) ? $_POST['postre'] : "No selecciono postre";


function escribirArchivoIni($entrada,$plato,$acompaniamiento,$postre)
{
    $salida = "entrada" . ' = "' . $entrada . '"' . "\r\n";
    $salida .= "plato_principal" . ' = "' . $plato . '"' . "\r\n";
    $salida .= "acompañamiento" . ' = "' . $acompaniamiento . '"' . "\r\n";
    $salida .= "postre" . ' = "' . $postre . '"' . "\r\n";
    $puntero_archivo = fopen("menu.ini", "w");
    fwrite($puntero_archivo, $salida);
    fclose($puntero_archivo);

}

function recuperarMenu(){
    echo '<h2>MENU</h2><br>';
    $array_ini=parse_ini_file('menu.ini', true);
    print_r($array_ini);
}
echo escribirArchivoIni($entrada,$plato,$acompaniamiento,$postre);
echo recuperarMenu();
include($ruta."footer.php");