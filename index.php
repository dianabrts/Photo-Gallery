<?php 
	require 'funciones.php';

	$fotosPorPagina = 8;

	$paginaActual = isset($_GET['p']) ? (int)$_GET['p'] : 1 ;

	$inicio = ($paginaActual > 1 ) ? ($paginaActual * $fotosPorPagina - $fotosPorPagina) : 0;

	$conexion = conexion('galeria','root','');

	if (!$conexion) {
		die();
	}

	$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotosPorPagina");

	$statement->execute();
	$fotos = $statement->fetchAll();

	if (!$fotos) {
		header('Location: index.php');
	}

	$statement = $conexion->prepare("SELECT FOUND_ROWS() AS totalFilas");
	$statement->execute();
	$totalPost = $statement->fetch()['totalFilas'];

	$totalPaginas = ceil($totalPost / $fotosPorPagina);

	require 'Views/index.view.php';
?>