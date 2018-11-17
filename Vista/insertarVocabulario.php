<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Categoria.php";
require "../Modelo/Subcategoria.php";
$objCategoria=new Categoria();
$Categorias=$objCategoria->consultarCategorias();
$objSubcategoria=new Subcategoria();
$Subcategorias=$objSubcategoria->consultarSubcategorias();
?>
<br>
<div class="row">
	<div class="col-sm-12 text-center">
		<h4 class="label_new">Formulario para agragar nuevo vocabulario</h4>
	</div>
</div>

<br>
<div class="row">
	<div class="col-sm-12">
		<form action="../Controlador/validarInsertarVocabulario.php" method="POST" enctype="multipart/form-data">
			<table class="table">
			    <tr>
			      <th scope="row" class="text-right">
			      	Name:
			      </th>
			      <td>
			      	<input name="name" type="text" class="form-control">
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" class="text-right">
			      	Description:
			      </th>
			      <td>
			      	<input name="descripcion" type="text" class="form-control">
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" class="text-right">
			      	Image:
			      </th>
			      <td>
			      	<input name="Imagen" type="file" class="form-control-file" id="">
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" class="text-right">
			      	Audio:
			      </th>
			      <td>
			      	<input name="Audio" type="file" class="form-control-file" id="image">
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" class="text-right">
			      	Category:
			      </th>
			      <td>
			      	<select class="custom-select" id='Categoria_id' name="categoria">
					    <option value="">SELECT...</option>
			      		<?php

							while($registro=$Categorias->fetch_object())
								{ 
									echo "<option value=".$registro->idCategory.">".$registro->Name."</option>";
								}
							?>
					</select>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" class="text-right">
			      	Sub_Category:
			      </th>
			      <td>
			      	<select class="custom-select" id="Sub_categoria" name="sub_categoria">
			      		<option selected value="">SELECT</option>
					</select>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row" class="text-right">
			      </th>
			      <td align="right">
			      	<input type="submit" class="btn btn-success" value="Add" style="width: 200px;">
			      </td>
			    </tr>
			</table>
		</form>
	</div>
</div>
<?php
if ($msj==1)
	echo '<p align="center" class="success">Se ha Agregado el vocabulario Correctamente';
if ($msj==2)
	echo '<p align="center" class="danger"> Problemas al Agregar el vocabulario, favor Revisar';
?>