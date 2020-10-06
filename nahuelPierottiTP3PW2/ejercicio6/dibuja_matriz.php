<?php
$ruta="../";
include($ruta.'header.php');

$dimension=isset($_POST['dimension'])?$_POST['dimension']:"no ingreso dimension";

function crearMatriz($dimension){
    $m[][]=null;
    $a=0;
    for($i=0;$i<$dimension;$i++){
        for($j=0;$j<$dimension;$j++){
            $m[$i][$j]=$a;
            $a++;
        }
    }
    return $m;
}
function imprimirMatriz($matriz,$dimension){
    $suma=0;
    for($i=0;$i<$dimension;$i++){
        for($j=0;$j<$dimension;$j++) {
            echo $matriz[$i][$j].'  ';
            $suma+=$matriz[$i][$j];
        }
        echo '<br>';
    }
    return $suma;
}

function recorrerUnSoloForDiagonalPpal($matriz,$dimension){
    $diagonal=0;
    for($i=0,$j=0;$i<$dimension;){
        if($i==$j||($i==0 && $j==0)){
            echo $matriz[$i][$j].' ';
            $diagonal+=$matriz[$i][$j];
        }
        if ($j == $dimension - 1) {
            $i++;
            echo '<br>';
            $j = 0;
        } else {
            $j++;
        }

    }
    return $diagonal;
}
function recorrerUnSoloForDiagonalSec($matriz,$dimension){
    $diagonal=0;
    for($i=0,$j=0;$i<$dimension;){
        if($i+$j==$dimension - 1){
            echo $matriz[$i][$j].' ';
            $diagonal+=$matriz[$i][$j];
        }
        if ($j == $dimension - 1) {
            $i++;
            echo '<br>';
            $j = 0;
        } else {
            $j++;
        }

    }
    return $diagonal;
}

$matriz=crearMatriz($dimension);
?>
<div class="w3-container w3-center">
<?php
echo '<h4>La matriz de dimension '.$dimension.' es:</h4>';
$sumaMatriz=imprimirMatriz($matriz,$dimension);
echo '<h4>Diagonal ppal: </h4>';
$diagonal=recorrerUnSoloForDiagonalPpal($matriz,$dimension);
echo '<h4>La suma diagonal ppal es: '.$diagonal.'</h4>';
echo '<h4>Diagonal Sec: </h4>';
$diagonalSec=recorrerUnSoloForDiagonalSec($matriz,$dimension);
echo '<h4>La suma diagonal secundaria es: '.$diagonalSec.'</h4>';
echo '<br><h4>La suma total de los valores de la matriz es: '.$sumaMatriz.'</h4>'
?>
</div>
<?php
include($ruta . "footer.php");