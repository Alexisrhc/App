  <form id="formulario" class="formulario" method="post" action="Controlador/validarInicioSesion.php">
    <div id="login_">
      <img src="Recursos/logolang.png" style="width: 100px;">
    </div>
      <hgroup>
        <center><h1>Welcome To LangApp</h1></center><br>
      </hgroup>
      <center>
        <table align="center">
          <tr bgcolor="#6A5ACD">
            <td width="400" colspan="2" align="center" class="texto" >LOGIN</td>
          </tr>
          <tr>
            <td class="label" align="right">USER</td>
            <td width="61%"><label for="login"></label>
            <input class="form-control input" name="login" type="text" id="login" size="40" required/></td>
          </tr>
          <tr>
            <td class="label" width="39%" align="right">PASSWORD</td>
            <td><label for="password"></label>
            <input class="form-control input" name="pass" type="password" id="pass" size="40" required/></td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#6A5ACD" id="bt">
              <input type="submit" name="button" id="button" class="btn btn-default" value="Enviar" style="width: 200px;" />
            </td>
          </tr>
        </table>
      </center>
  </form>
<?php

if ($x==1)
	echo "<br><p align='center' class='danger'> Unregistered user with the entered data, try again";
if ($x==2)
	echo "<br><p align='center' class='danger'> You must Login to be able to access the Application";
if ($x==3)
	echo "<br><p  align='center' class='success'> The User has closed the Session";
?>