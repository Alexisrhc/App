<br><br><?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Categoria.php";
$objCategoria=new Categoria();
$Categorias=$objCategoria->consultarCategorias();
?>
<div class="container">
  <div class="row">
    <div class="col-sm-4" id="img_post">
      <img src="../Recursos/cot.png"/>
    </div>
    <div class="col-sm-8">
    <form id="form1" name="form1" method="post" action="../Controlador/validarInsertarSubcategoria.php">
    <table class="table" align="center" >
    <tr bgcolor="orange" class="texto">
      <td colspan="2" align="center" class="label">INSERTAR SUBCATEGORIA</td>
    </tr>

    <tr>
      <td class="label" align="right" >Category</td>
      <td>
        <select name="idsubcategory_category" class="custom-select">
          <option value="0">Seleccione una opcion</option>
          <?php while($registro=$Categorias->fetch_object()){ echo "<option value=".$registro->idCategory.">".$registro->Name."</option>";}?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="label" width="28%" align="right" >Name</td>
      <td><input class="form-control input" name="name" type="text" id="name" size="40"  required /></td>
    </tr>
    <tr class="texto">
      <td class="label" colspan="2" align="center">
        <input class="btn btn-success" type="submit" name="button" id="button" value="Enviar" style="width: 300px;" /></td>
      </tr>
      </table>
    </form>           
    </div>
  </div>
</div>
<?php
if ($msj==1)
	echo '<p align="center" class="success">Se ha Agregado la Subcategoria Correctamente';
if ($msj==2)
	echo '<p align="center" class="danger"> Problemas al Agregar la Subcategoria, favor Revisar';



          
	      
       

  // aqui va el codigo php
    if(isset($_POST['btn1']))
    {
      include("../Modelo/conexionBasesDatos.php");

      $cotCodigo=$_POST['idsubcategory_category,name'];
      

      $conexion->query("INSERT INTO $subcategories (idsubcategory_category,name) values ('$idsubcategory_category,$name)");

    }
  ?>

<br>
<br>





