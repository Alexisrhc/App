<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-4" id="img_post">
      <img src="../Recursos/teacher.jpg"/">
    </div>

    <div class="col-sm-8">
      <form id="form1" name="form1" method="post" action="../Controlador/validarInsertarProfesor.php">
  <table class="table">
    <tr bgcolor="orange">
      <td colspan="2" align="center" class="label">INSERT TEACHER</td>
    </tr>
          
    <tr>
      <td width="28%" align="right" class="label">Identification</td>
      <td width="72%">
        <input class="input form-control" name="identification" type="text" id="identification" size="40"  required />
      </td>
    </tr>     
    <tr>
      <td class="label" align="right">Name</td>
      <td>
        <input class="input form-control" name="name" type="text" id="name" size="40" required />
      </td>
    </tr>
    <tr>
      <td class="label" height="25" align="right">LastName</td>
      <td>
        <input class="input form-control" name="lastname" type="text" id="lastname" size="40" required/>
      </td>
    </tr>
    <tr>
      <td class="label" align="right">Address</td>
      <td>
        <input class="input form-control" name="address" type="text" id="address" style="width:270px" required/>
      </td>
    </tr>
    <tr>
      <td class="label" height="25" align="right">Phone</td>
      <td>
        <input class="input form-control" name="phone" type="text" id="phone" size="40" required/>
      </td>
    </tr>
    <tr class="texto">
      <td colspan="2" align="center" class="label">
        <input class="btn btn-success" type="submit" name="button" id="button" value="Send" />
      </td>
    </tr>
  </table>
</form>
    </div>
  </div>
</div>


    
    <?php
if ($msj==1)
	echo '<p align="center" >Teacher has been added correctly';
if ($msj==2)
	echo '<p align="center">Problems when adding the teacher, please review';

?>