<?php
$ruta="../";
include($ruta.'header.php');
?>
<div class="w3-container">
    <div class="form_ej_4">
    <form class="w3-container" method="post" action="dibuja_matriz.php">
        <h4>Ingrese dimension de la matriz: </h4>
        <br>
        <div class="w3-row">
            <input type="number" name="dimension" id="dimension" min="2" max="10" required>
        </div>
        <br>
        <div class="w3-row">
            <button class="w3-btn w3-round w3-gray">Enviar</button>
        </div>
    </form>
    </div>
</div>
<?php

include($ruta."footer.php");
