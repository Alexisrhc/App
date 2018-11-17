<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Vocabulario.php";
//Creamos el objeto Vocabulario
$objVocabulario = new Vocabulario();

if ($_FILES['Audio']['size'] > 0) {
	$dir = "../Recursos/audio/";
	opendir($dir);
	$destino = $dir . $_FILES['Audio']['name'];
	copy($_FILES['Audio']['tmp_name'],$destino);
	$nombreAud = $_FILES['Audio']['name'];
	}else{
		$nombreAud = 'SIN AUDIO';
	}
if ($_FILES['Imagen']['size'] > 0) {
	$dir = "../Recursos/image/";
	opendir($dir);
	$destino = $dir . $_FILES['Imagen']['name'];
	copy($_FILES['Imagen']['tmp_name'],$destino);
	$nombreImg = $_FILES['Imagen']['name'];
	}else{
		$nombreImg = 'SIN IMAGEN';
	}
	
$resultado = $objVocabulario->CrearVocabulario(
	$_REQUEST['name'],
	$_REQUEST['descripcion'],
	$nombreImg,
	$nombreAud,
	$_REQUEST['categoria'],
	$_REQUEST['sub_categoria']
	);


if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarVocabulario&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarVocabulario&msj=2");
?>