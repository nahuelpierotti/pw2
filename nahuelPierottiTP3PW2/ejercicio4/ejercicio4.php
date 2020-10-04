<?php
$ruta="../";
include($ruta.'header.php');
?>
<div class="w3-container">
    <div class="form_ej_4">
    <form class="w3-container" method="post" action="contador_visitas.php">
        <div class="w3-row">
            <label class="w3-text-gray"><b>Nombre</b></label>
            <input class="w3-input w3-border w3-round" type="text" id="visitante" name="visitante" placeholder="Ingrese nombre" required>
        </div>
        <div class="w3-row">
            <label class="w3-text-gray"><b>Seleccione Planeta</b></label>
            <select class="w3-select w3-border w3-round" id="planeta" name="planeta">
                <option value="mercurio">Mercurio</option>
                <option value="tierra">Tierra</option>
                <option value="marte">Marte</option>
                <option value="jupiter">Jupiter</option>
                <option value="saturno">Saturno</option>
                <option value="urano">Urano</option>
                <option value="neptuno">Neptuno</option>
            </select>
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
