<?php 
if(isset($_REQUEST['Buscar'])){
$date = $_POST['date'];
    $ruta = 'fotos/'.$date; // Indicar ruta
    if (!file_exists($ruta)) {
        echo "<p>No se encontro ningun Archivo</p>";
    } else {
        $dirint=dir($ruta);
        while (($archivo = $dirint->read()) !== false)
        {
            if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(gif|GIF|jpg|JPG|png|PNG)#is",$archivo)){
                echo '<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><img src="'.$ruta."/".$archivo.'"></li>';
            }else{
                if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(mp4|MP4|)#is",$archivo)){
                echo '<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12"><video width="400" controls>
                <source src="'.$ruta."/".$archivo.'" type="video/mp4">
              <p>Your browser does not support the video tag.</p>
              </video></li>';
            }
            }
        }      
        $dirint->close();        
    }
}
?>