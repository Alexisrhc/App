<div class="izquierda">
    <img src="../Recursos/estud.png"/>
  </div>

<form id="form1" name="form1" method="post" action="../Controlador/validarActualizarProfesor.php">
      <table border="2" align="center" BGCOLOR="#00FFBF">
        <tr bgcolor="#00FFBF" class="texto">
	       <br>
	       <br>
	        
          <td colspan="2" align="center" class="label">UPDATE TEACHER</td>
        </tr>
        
	 <tr>
          <td align="right" class="label">Identification</td>
          <td><input class="input" name="identification" type="text" id="identification" size="40" required /></td>
        </tr>     
	      
        <tr>
          <td align="right" class="label">Name</td>
          <td><input class="input" name="name" type="text" id="name" size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right" class="label">LastName</td>
          <td><input class="input" name="lastname" type="text" id="lastname" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" class="label">Address</td>
          <td><input class="input" name="address" type="text" id="address" style="width:270px" required/></td>
        </tr>
        <tr>
          <td align="right" class="label">Phone</td>
          <td><input class="input" name="phone " type="text" id="phone" style="width:270px" required/></td>
        </tr>
        
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#00FFBF" class="label"><input class="btn" type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
   <p style="align:center;margin-left: 30%;">*Enter the Teacher identification you want to update</p>
    <?php
if ($msj==1)
	echo '<p align="center" class="success">The Teacher has been Updated Correctly';
if ($msj==2)
	echo '<p align="center" class="danger"> Problems when updating the teacher, please review';
if ($msj==3)
	echo '<p align="center" class="danger"> There is no teacher with this identification: <strong class="success">'.$identification.'</strong>, please check';

?>

