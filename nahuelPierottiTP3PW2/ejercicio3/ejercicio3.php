<?php
$ruta="../";
include($ruta.'header.php');
?>
    <div class="w3-container">
<?php
    $num1= rand(1, 6);
    $num2= rand(1,6);
    $suma= $num1 + $num2;


?>
<br>
<form id='form1' name='form1' method='post' action='#'>
    <div class="w3-row w3-center">
        <div id="1" class="qqq" >
            <img class="img_dado" src="<?php echo $ruta.'imagenes/dado'.$num1.'.png';?>" alt="<?php echo $num1;?>" title="<?php echo $num1;?>">
        </div>
        <div id="2" class="qqq" >
            <img class="img_dado" src="<?php echo $ruta.'imagenes/dado'.$num2.'.png'?>" alt="<?php echo $num2;?>" title="<?php echo $num2;?>">
        </div>
        <br><br>
        <div class="w3-row">La suma de los dados es: <?php echo $suma;?>
        <br><br>
        <div class="w3-row">
            <label>
                <input class="w3-btn w3-gray" type='submit' name='button' id='button' value='Lanzar Dados'/>
            </label>
        </div>
    </div>
</form>
<br>
    </div>
<?php
include($ruta."footer.php");
