<?php 

	include ('../Modelo/conexionBasesDatos.php');
	

	$cat = $_POST['Id_categoria'];


	$sql = "SELECT * FROM subcategories WHERE idSubcategory_Category = '$cat'";

	$datos = $objConexion->query($sql);
	$num = $datos->num_rows;
	if ($num < 0 ) {
		echo "NADA";
	}else
	{
		echo '<option value="0">Seleccione una Sub-Categoria</option>';
		while ($row = $datos->fetch_array(MYSQLI_ASSOC)) {
			echo "<option value=".$row['idSubcategory'].">".$row['Name']."</option>";
		}
	}
?>