<?php
$ruta="../";
include($ruta.'header.php');
?>
<div class="w3-container">

<h2>Menu</h2>
<br>
    <form class="w3-card-4" method="post" action="orden.php">
        <div class="w3-row">
            <h4>Entrada</h4>
            <input class="w3-check" type="checkbox" name="entrada" value="empanadas">Empanadas
            <input class="w3-check" type="checkbox" name="entrada" value="picada">Picada
            <input class="w3-check" type="checkbox" name="entrada" value="rabas">Rabas
        </div>
        <div class="w3-row">
            <h4>Plato Principal</h4>
            <input class="w3-check" type="checkbox" name="plato" value="asado">Asado
            <input class="w3-check" type="checkbox" name="plato" value="filet">Filet
            <input class="w3-check" type="checkbox" name="plato" value="mila">Milanesa
        </div>
        <div class="w3-row">
            <h4>Acompañamiento</h4>
            <input class="w3-check" type="checkbox" name="acompa" value="ensalada">Ensalada
            <input class="w3-check" type="checkbox" name="acompa" value="pure">Pure
            <input class="w3-check" type="checkbox" name="acompa" value="papas">Papas Fritas
        </div>
        <div class="w3-row">
            <h4>Postre</h4>
            <input class="w3-check" type="checkbox" name="postre" value="helado">Helado
            <input class="w3-check" type="checkbox" name="postre" value="frutilla">Frutillas con Crema
            <input class="w3-check" type="checkbox" name="postre" value="flan">Flan
        </div>
        <br>
        <button class="w3-btn w3-round w3-gray">Enviar Pedido</button>
    </form>
<?php
include($ruta."footer.php");
