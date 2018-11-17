<br><br><?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Categoria.php";
$objCategoria=new Categoria();
$Categorias=$objCategoria->consultarCategorias();
?>
<h1 align="center">LISTADO DE CATEGORIAS</h1>
<table class="table" align="center">
  <tr align="center" bgcolor="orange" class="texto">
    <td>Name</td>
    <td>Name</td>
  </tr>
 <?php while($registro=$Categorias->fetch_object()){?>
  <tr align="center">   
  	<td><?php echo $registro->idCategory?></td>
    <td><?php echo $registro->Name?></td>
  </tr>  
 <?php
}  //cerrando el ciclo while
?>
</table>


  



