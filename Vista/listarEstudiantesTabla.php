<br><br><?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Estudiante.php";
$objEstudiante=new Estudiante();
$Estudiantes=$objEstudiante->consultarEstudiantes();
?>
<h1 align="center">LIST OF STUDENTS</h1>
<table class="table" align="center">
  <tr align="center" bgcolor="orange" class="texto">
    <td>Identification</td>
    <td>Name</td>
    <td>LastName</td>
    <td>Address</td>
    <td>Phone</td>
    <td>Level</td>
  </tr>
 <?php
while($registro=$Estudiantes->fetch_object())
{
?>
  <tr align="center">
    <td><?php echo $registro->Identification?></td>
    <td><?php echo $registro->Name?></td>
    <td><?php echo $registro->LastName?></td>
    <td><?php echo $registro->Address?></td>
    <td><?php echo $registro->Phone?></td>
    <td align="left">
      <?php 
      $id = $registro->Level;
      $sql = "SELECT * FROM `level` WHERE `idLevel` = $id";
      $val = $objConexion->query($sql);
      $resul = $val->fetch_array(MYSQLI_NUM);
      echo "( ".$registro->Level." ) ";
      echo $resul[1];
      ?>
      </td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>







