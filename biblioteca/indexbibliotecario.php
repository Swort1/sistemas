
<?php 
	
	include('../dbconexion.php');
	/*$id = $_GET["id"];*/
	session_start();
	$id = $_SESSION["idb"];
	$query= "SELECT Nombres, Apellidos, Nro_Carnet FROM bibliotecario wHERE CodBibliotecario = '$id'";
	$resultado = $cnmysql->query($query);
	$fila = mysqli_fetch_array($resultado);
	$nombre = $fila['Nombres'];
	$apellidos = $fila['Apellidos'];
	$carnet  = $fila['Nro_Carnet'];
	$texto = "Bibliotecario: " .$nombre ." " .$apellidos ." | " ."Nro Carnet: " .$carnet;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
	<script type="text/javascript" src="js/funcionesBibliotecario.js"></script>
	<script type="text/javascript" src="js/funcionesLector.js"></script>
	<script type="text/javascript" src="js/funcioneslibro.js"></script>
	<script type="text/javascript" src="js/funcionesAutor.js"></script>
	<script type="text/javascript" src="js/funcionesEditorial.js"></script>
	<script type="text/javascript" src="js/funcionesGenero.js"></script>
	<script type="text/javascript" src="js/funcionesAccionesLector.js"></script>

<script type="text/javascript" src="js/funcionesPrestamo.js"></script>
	<link rel="stylesheet" href="css_l/hoja_index_bibliotecario.css">
	<link rel="stylesheet" href="fonts.css">
	<title>Sistema de Bibliotecaria</title>
</head>
<body onload="VistaInicio()">
	<div id="contenedor">
		<header>
			<div id="titulo">
				<h1>SISTEMA LIBRARY V1......PANEL ADMINISTRADOR BIBLIOTECARIO</h1> 
				<h3><?php echo $texto;?></h3>
			</div>	
			<div id="captura">
				<div><img src="img_l/captura.png" width="1000" height="300"></div>	
			</div>
		</header>
		<br>
		<hr>
		<nav>
		<center>
			<ul id="menu">
				<li><a onclick="VistaInicio();"><span class="icon-home"></span>INICIO</a></li>
                <li><a><span class="icon-users"></span>USUARIOS</a> 
					<ul>
						<li><a onclick="VistaBibliotecario();"><span class="icon-user"></span>BIBLIOTECARIO</a></li>
						<li><a onclick="VistaLector();"><span class="icon-users"></span>LECTORES</a></li>
					</ul>
				</li>
				<li><a onclick="VistaPrestamo(<?php echo $id ?>);"><SPAN class="icon-folder-open"></SPAN>PRESTAMO DE LIBROS</a></li>
				<li><a onclick="VistaLibro();"><span class="icon-stack"></span>LIBROS</a></li>
                <li><a><span class="icon-cogs"></span>REPORTES</a> 
					<ul>
						<li><a onclick="VistaLibrosPrestados();">Reporte Prestamo </a></li>
						<li><a onclick="VistaLibrosReservadosBi();">Libros Reservados</a></li>
						<li><a onclick="VistaLibrosRetornados();">Reporte Devolucion </a></li>
					</ul>
				</li>
				<li><a href="../index.php"><span class="icon-lock"></span>SALIR</a></li>
			</ul>
		</center>
		</nav>
		<section>
			<div id="contenido">
			</div>
		</section>
		<footer>
			<p>Autor: Quinto Contreras Nilton | SISTEMA LIBRARY V1 de la Municipalidad Provincial de Tayacaja | MPT</p>
		</footer>	
	</div>
</body>
</html>