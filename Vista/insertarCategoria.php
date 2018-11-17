<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4" id="img_post">
      <img src="../Recursos/cot.png"/>
    </div>
    <div class="col-sm-8">
      <form id="form1" name="form1" method="post" action="../Controlador/validarInsertarCategoria.php">
  <table class="table" align="center" >
    <tr bgcolor="orange" class="texto">
      <td colspan="2" align="center" class="label">INSERTAR CATEGORIA</td>
    </tr>
    <tr>
       <td class="label" width="28%" align="right" >Name</td>
          <td>
          <input class="form-control input" name="name" type="text" id="name" size="40"  required /></td>
        </tr>
        <tr class="texto">
          <td class="label" colspan="2" align="center" >
            <input class="btn btn-success" type="submit" name="button" id="button" value="Enviar" style="width: 300px;" />
          </td>
        </tr>
           
      </table>
    </form>      
    </div>
  </div>
</div>
<?php
if ($msj==1)
	echo '<p align="center" class="success">Se ha Agregado la Categoria Correctamente';
if ($msj==2)
	echo '<p align="center" class="danger"> Problemas al Agregar la Categoria, favor Revisar';


  // aqui va el codigo php
    if(isset($_POST['btn1']))
    {
      include("../Modelo/conexionBasesDatos.php");

      $cotCodigo=$_POST['name'];
      

      $conexion->query("INSERT INTO $categories (name) values ('$name)");

    }
  ?>

<br>
<br>





