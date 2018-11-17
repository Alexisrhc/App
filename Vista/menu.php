<?php 
//session_start();
$rol = $_SESSION['user_rol'];
?>

<div class="col-sm-12">
	<ul class="nav nav-pills menu_new">
		<?php //MENU PROFESORES ?>
		<li class="nav-item dropdown menu_new_item">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Teachers</a>
			<div class="dropdown-menu">
		    	<a class="dropdown-item" href="index2.php?pag=insertarProfesor">Add</a>
		    	<a class="dropdown-item" href="index2.php?pag=listarProfesoresTabla">Consult</a>
		    	<a class="dropdown-item" href="index2.php?pag=listarProfesoresEditarTabla">Update</a>
		    </div>
		</li>
		<?php //MENU ESTUDIANTES ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Students</a>
			<div class="dropdown-menu">
		    	<a class="dropdown-item" href="index2.php?pag=insertarEstudiante">Add</a>
		    	<a class="dropdown-item" href="index2.php?pag=listarEstudiantesTabla">Consult</a>
		    	<a class="dropdown-item" href="index2.php?pag=listarEstudiantesEditarTabla">Update</a>
		    </div>
		</li>
		<?php //MENU VOACVULARIO ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vocabulary</a>
			<div class="dropdown-menu">
		    	<?php if ($rol == 1):?>
		            <a class="dropdown-item" href="index2.php?pag=insertarVocabulario">Add</a>		
		        <?php endif;?>
		            <a class="dropdown-item" href="index2.php?pag=listarVocabulariosTabla">Consult</a>
		    </div>
		</li>
		<?php //MENU DIAGNOSTICO ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Diagnosis</a>
			<div class="dropdown-menu">
		    	<a class="dropdown-item" href="index2.php?pag=insertarDiagnostico">Add</a>
				<a class="dropdown-item" href="index2.php?pag=listarDiagnosticosTabla">Consult</a>
				<a class="dropdown-item" href="index2.php?pag=actualizarDiagnostico">Update</a>	
		    </div>
		</li>
		<?php //MENU GRAMATICA ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grammar</a>
			<div class="dropdown-menu">
		    	<a class="dropdown-item" href="index2.php?pag=insertarGramatica">Add</a>
				<a class="dropdown-item" href="index2.php?pag=listarGramaticasTabla">Consult</a>
				<a class="dropdown-item" href="index2.php?pag=actualizarGramatica">Update</a>	
		    </div>
		</li>
		<?php //MENU JUEGOS ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Game</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="index2.php?pag=Game">Play</a>
		    	<!--
		    	<a class="dropdown-item" href="index2.php?pag=insertarJuego">Add</a>
				<a class="dropdown-item" href="index2.php?pag=listarJuegosTabla">Consult</a>
				<a class="dropdown-item" href="index2.php?pag=actualizarJuego">Update</a>
				-->
		    </div>
		</li>
		<?php //MENU CATEGORIAS ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
			<div class="dropdown-menu">
		    	<?php if ($rol == 1):?>
			        <a class="dropdown-item" href="index2.php?pag=insertarCategoria">Add</a>
			    <?php endif;?>
			        <a class="dropdown-item" href="index2.php?pag=listarCategoriasTabla">Consult</a>
		    </div>
		</li>
		<?php //MENU SUB-CATEGORIAS ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SubCategory</a>
			<div class="dropdown-menu">
		    	<?php if ($rol == 1):?>
			        <a class="dropdown-item" href="index2.php?pag=insertarSubcategoria">Add</a>
			    <?php endif;?>
			        <a class="dropdown-item" href="index2.php?pag=listarSubcategoriasTabla">Consult</a>
		    </div>
		</li>
		<?php //MENU EVALUACION ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Evaluation</a>
			<div class="dropdown-menu">
		    	<a class="dropdown-item" href="index2.php?pag=insertarEvaluacion">Add</a>
				<a class="dropdown-item" href="index2.php?pag=listarEvaluacionTabla">Consult</a>
				<a class="dropdown-item" href="index2.php?pag=actualizarEvaluacion">Updates</a>	
		    </div>
		</li>
		<?php //MENU REPORTES ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="../pdf/gen_profesores.php" target="_blank">Profesores</a>
	            <a class="dropdown-item" href="../pdf/gen_estudiantes.php" target="_blank">Estudiantes</a>
		    </div>
		</li>
		<?php //MENU SALIR ?>
		<li class="nav-item">
			<a class="nav-link btn-danger exit" href="salir.php">Exit</a>
		</li>
	</ul>
</div>
