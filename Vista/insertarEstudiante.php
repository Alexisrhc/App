<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4" id="img_post">
      <img src="../Recursos/est.jpg"/>
    </div>
    <div class="col-sm-8">
      <form id="form1" name="form1" method="post" action="../Controlador/validarInsertarEstudiante.php">
      <table class="table" align="center">
        <tr BGCOLOR="orange" class="texto">
          <td colspan="2" align="center">INSERT STUDENT</td>
        </tr>
          
    <tr>
          <td align="right" >Identification</td>
          <td width="72%"><label for="id"></label>
          <input class="form-control input" name="identification" type="text" id="identification" size="40"  required /></td>
        </tr>     
              
        <tr>
          <td class="label" align="right">Name</td>
          <td><input class="form-control input" name="name" type="text" id="name" size="40" required /></td>
        </tr>
        <tr>
          <td class="label" height="25" align="right">LastName</td>
          <td><input class="form-control input" name="lastname" type="text" id="lastname" size="40" required/></td>
        </tr>
        <tr>
          <td class="label" align="right">Address</td>
          <td><input class="form-control input" name="address" type="text" id="address" style="width:270px" required/></td>
        </tr>
        
  <tr>
          <td class="label" height="25" align="right">Phone</td>
          <td><input class="form-control input" name="phone" type="text" id="phone" size="40" required/></td>
        </tr>
        
   <tr>
          <td class="label" height="25" align="right">Level</td>
          <td><input class="form-control input" name="level" type="text" id="level" size="40" required/></td>
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
	echo '<p align="center" >Student has been added correctly';
if ($msj==2)
	echo '<p align="center">Problems when adding the Student, please review';

?>