<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Profesor.php";

$objProfesor=new Profesor();
$profesores=$objProfesor->consultarProfesor($_REQUEST['idTeacher']);
$profesor = $profesores->fetch_object();
?>



<form id="form1" name="form1" method="post" action="../Controlador/validarEditarProfesor.php">
   <table class="table" align="center" BGCOLOR="orange">
        <tr bgcolor="orange" class="texto">
        <td colspan="2" align="center">UPDATE TEACHER</td>
      </tr>
      <tr>
        <td align="right" class="label"><label >Identification</label></td>
        <td width="72%"><label for="identification"></label>
        <input class="form-control" name="identification" type="text" id="identification" size="40"  required 
               value="<?php echo $profesor->Identification; ?>" readonly="readonly" /></td>
      </tr>
      <tr>
        <td align="right" >Name</td>
        <td><input class="form-control" name="name" type="text" id="name" size="40" required 
                   value="<?php echo $profesor->Name ?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Lastname</td>
        <td><input class="form-control" name="lastname" type="text" id="lastname" size="40" required
                   value="<?php echo $profesor->LastName?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Address</td>
        <td><input class="form-control" name="address" type="text" id="address" size="40" required
                   value="<?php echo $profesor->Address?>"/></td>
      </tr>
      <tr>
        <td height="25" align="right" >Phone</td>
        <td><input class="form-control" name="phone" type="tel" id="phone" size="40" required
                   value="<?php echo $profesor->Phone?>"/></td>
      </tr>
      
      <tr  class="texto">
        <td colspan="2" align="center">
            <input class="btn btn-success" type="submit" name="button" id="button" value="Enviar" style="width: 300px;" />
        </td>
      </tr>
    </table>
  </form>


<?php
    if ($msj==1)
            echo '<p align="center" >The Teacher has been Updated Correctly';
    if ($msj==2)
            echo '<p align="center"> Problems when updating the Teacher, please review';
?>
