<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Principal</title>
<script src="Js/menu.js"> </script>
<link rel="stylesheet" href="Css/index.css">
<link rel="stylesheet" href="Css/estiloMenu.css">
<link rel="stylesheet" href="Css/estilos.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
<div id="divContenedor">
	<div id="divContenido">
		<?php include "Vista/iniciarSesion.php" ?>
	</div>
    <div id="divContenido" class="id">
    	<?php include "Vista/piePagina.php"?> 
    </div>
</div>

	
</body>
</html>