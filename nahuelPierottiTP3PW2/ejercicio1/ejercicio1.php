<?php
$ruta="../";
include($ruta.'header.php');


if(isset($_POST["submit"])) {
    $nombre_nuevo=$_POST["arch_nombre"];
    $dir_subida = $ruta."imagenes/";
    $fichero_subido = $dir_subida . basename($_FILES['fileToUpload']['name']);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fichero_subido);
    rename($dir_subida.$_FILES["fileToUpload"]["name"], $dir_subida.$nombre_nuevo.'.jpg');

}
?>
<div class="w3-container">
<?php
$folder_path = $ruta.'imagenes/';

$num_files = glob($folder_path . "*.jpg", GLOB_BRACE);
$folder = opendir($folder_path);
if($num_files > 0){
    while(false !== ($file = readdir($folder)))  {
        $file_path = $folder_path.$file;
        $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
        if($extension=='jpg') {
            ?>
              <div class="w3-row w3-center">
            <img class="tfoto" src="<?php echo $file_path; ?>" alt="Imagen de ejemplo" title="Imagen de ejemplo">
            <br>
            <?php
            $info = pathinfo($file);
            $file_name =  basename($file,'.'.$info['extension']);
            echo $file_name.'</div>';

        }
    }
}
closedir($folder);


?>
<br><br>
<div class="pull-left"><strong>Inline Form</strong></div>
<form class="form-inline" action="#" method="post" enctype="multipart/form-data">
<label for="nombre">Nombre:</label>
<input type="text" id="arch_nombre" name="arch_nombre">
<label for="archivo">Archivo:</label>
<input type="file" id="fileToUpload" name="fileToUpload">

<button class="w3-button w3-teal" type="submit" value="Upload Image" name="submit">Enviar</button>
</form>
</div>
<br>
<?php
include($ruta."footer.php");
?>
