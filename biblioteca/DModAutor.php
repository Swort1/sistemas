<?php
include('../dbconexion.php');


$dcod = $_POST['vcod'];
$dautor = $_POST['vautor'];



if (!empty($dautor) && !empty($dcod)) {

	

		$query = "  
		UPDATE autor
		SET
		Descripcion = '$dautor'
		WHERE
		CodAutor = '$dcod'
		";

		$resultado = $cnmysql->query($query);

		if ($resultado){

			echo "<p
			style='	background-color: #8FE397;
					padding: 10px;
					box-sizing: border-box;
					color: #1D7034;
					border:2px dotted #4DA459;'
			><strong>Exito!</strong> Autor Fue Modificado</p>";

		}else{

			echo "<p
			style='	background-color: #EE9393;
					padding: 10px;
					box-sizing: border-box;
					color: #E33E3E;
					border:2px dotted #E33E3E;'
			><strong>Error!</strong> Autor No Fue Modificado</p>";

		}


}else{

	echo "<p
		style='	background-color: #EE9393;
				padding: 10px;
				box-sizing: border-box;
				color: #E33E3E;
				border:2px dotted #E33E3E;'
		><strong>Error!</strong> Ingrese un Codigo y un Autor para Modificar</p>";
}


?>