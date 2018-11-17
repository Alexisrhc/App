<br><br><?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Subcategoria.php";
$objSubcategoria=new Subcategoria();
$Subcategorias=$objSubcategoria->consultarSubcategorias();
?>
<h1 align="center">LISTADO DE SUBCATEGORIAS</h1>
<table class="table col-sm-" align="center">
  <tr align="center"  class="texto" bgcolor="orange">
    <td align="">Category</td>
    <td>Name</td>    
  </tr>
 <?php
while($registro=$Subcategorias->fetch_object())
{
?>
  <tr align="center">
    <td align="">

    <?php 
      $id = $registro->Level;
      $sql = "SELECT * FROM `categories` WHERE `idCategory` = $registro->idSubcategory_Category";
      $val = $objConexion->query($sql);
      $resul = $val->fetch_array(MYSQLI_NUM);
      //echo "( ".$registro->Level." ) ";
      echo $resul[1];
      ?>      
    <?php //echo $registro->idSubcategory_Category?>
    </td>
    <td><?php echo $registro->Name?></td>
   
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>


  



