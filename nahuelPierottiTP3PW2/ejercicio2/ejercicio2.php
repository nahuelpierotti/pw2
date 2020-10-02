<?php
$ruta="../";
include($ruta.'header.php');
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

include($ruta."footer.php");

