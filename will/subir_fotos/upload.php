<?php 	
	if(isset($_REQUEST['Subir'])){
	$date = $_POST['date'];
	$directorio = '../proyecto/fotos';//Declaramos un  variable con la ruta donde guardaremos los archivos

	//Validamos si la ruta de destino existe, en caso de no existir la creamos
	if(!file_exists($directorio)){
		mkdir($directorio, 0700);
	}
	$directorioGuarda = '../proyecto/fotos/'.$date;//Declaramos un  variable con la ruta donde guardaremos los archivos
	if(!file_exists($directorioGuarda)){
		mkdir($directorioGuarda, 0700);
	}	

	//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["archivo"]["name"][$key]) {
			$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			
			$target_path = $directorioGuarda.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				echo "<p>El archivo $filename se ha almacenado en forma exitosa.<br></p>";
				} else {	
				echo "<p>Ha ocurrido un error, por favor inténtelo de nuevo.<br></p>";
			}
		}
	}
}
?> 