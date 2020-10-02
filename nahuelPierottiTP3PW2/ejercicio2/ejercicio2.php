<?php
$ruta="../";
include($ruta.'header.php');
$folder_path = $ruta.'imagenes/';
?>
<div class="w3-container">
<?php
$num_files = glob($folder_path . "*.jpg", GLOB_BRACE);
$folder = opendir($folder_path);
if($num_files > 0){
    while(false !== ($file = readdir($folder)))  {
        $file_path = $folder_path.$file;
        $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
        if($extension=='jpg') {
            $info = pathinfo($file);
            $file_name =  basename($file,'.'.$info['extension']);
            ?>
            <div class="w3-row w3-center">
            <a class="w3-button w3-light-grey" href='<?php echo $file_path; ?>' target="_blank">
                <p><?php echo $file_name; ?></p>
            </a>
            <?php

        }
    }
}
closedir($folder);
?>
</div>
<?php
include($ruta."footer.php");

