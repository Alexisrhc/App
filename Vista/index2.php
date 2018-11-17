<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:../index.php?x=2");//x=2 significa que no han iniciado sesión
if (!isset($_REQUEST['pag']))
	$pag='contenido';
	
if (!isset($_REQUEST['msj']))
	$msj=0;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Principal</title>
<link rel="stylesheet" type="text/css" href="../Css/estilos.css">
<link rel="stylesheet" type="text/css" href="../Css/estiloMenu.css" >


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">





</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
	    	<?php include "encabezado.php"; ?>
			</div>
		</div>
		<div class="row">
			<?php include "menu.php";?> 
		</div>
		<div class="row">
			<div class="col-sm-12">
			<html>
			
			<link rel="stylesheet" type="text/css" href="../Css/estiloMenu.css" >
			</head>
			<body>
			<?php include $pag.".php"; ?> 
			</div>
		</div>
	</div>
	<div class="container-fluid" id="footer_general">
		<?php include "piePagina.php"?>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





    <script>
     	$('#Categoria_id').change(function(){
     		var Id_categoria = $('#Categoria_id').val();
     		//alert(Id_categoria);
     		$.ajax({
				url: '../Controlador/consultarCaterogia.php',
				type: 'POST',
				data: {Id_categoria:Id_categoria},
			})
			.done(function(resp) {
				//console.log(resp);
				if (resp == '') {
					$('#Sub_categoria').html('<option>Sin respuesta sigue buscando</option>');
				}else{
					$('#Sub_categoria').html(resp);
				}
			})
			.fail(function() {
				//console.log("error");
			})
			.always(function() {
				//console.log("complete");
			});
	      	});
     </script>
     <script>
	$(function(){
		//alert('documento listo');
	});
</script>
</body>
</html>