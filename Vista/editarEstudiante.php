<br><br><?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";

$objEstudiante=new Estudiante();
$estudiantes=$objEstudiante->consultarEstudiante($_REQUEST['idStudent']);
$estudiante = $estudiantes->fetch_object();
?>



<form id="form1" name="form1" method="post" action="../Controlador/validarEditarEstudiante.php">
   <table class="table" align="center">
        <tr bgcolor="orange" class="texto">
        <td colspan="2" align="center">UPDATE STUDENT</td>
      </tr>
      <tr>
        <td align="right" >Identification</td>
        <td ><label for="identification"></label>
        <input class="form-control" name="identification" type="text" id="identification" size="40"  required 
               value="<?php echo $estudiante->Identification; ?>" readonly="readonly" /></td>
      </tr>
      <tr>
        <td align="right" class="col-form-label">Name</td>
        <td><input class="form-control" name="name" type="text" id="name" size="40" required 
                   value="<?php echo $estudiante->Name ?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Lastname</td>
        <td><input class="form-control" name="lastname" type="text" id="lastname" size="40" required
                   value="<?php echo $estudiante->LastName?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Address</td>
        <td><input class="form-control" name="address" type="text" id="address" size="40" required
                   value="<?php echo $estudiante->Address?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Phone</td>
        <td><input class="form-control" name="phone" type="tel" id="phone" size="40" required
                   value="<?php echo $estudiante->Phone?>"/></td>
      </tr>
	   
	   <tr>
        <td height="25" align="right" >Level</td>
        <td><input class="form-control" name="level" type="tel" id="level" size="40" required
                   value="<?php echo $estudiante->Level?>"/></td>
      </tr>
      
      <tr class="texto">
        <td colspan="2" align="center" >
            <input class="btn btn-success" type="submit" name="button" id="button" value="Enviar" style="width: 300px;" />
        </td>
      </tr>
    </table>
  </form>


<?php
    if ($msj==1)
            echo '<p align="center" >The Student has been Updated Correctly';
    if ($msj==2)
            echo '<p align="center"> Problems when updating the Student, please review';
?>
