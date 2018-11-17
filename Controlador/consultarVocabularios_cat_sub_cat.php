<?php
	include ('../Modelo/conexionBasesDatos.php');
	$sub_cat = $_POST['id_sub_cat'];

	$sql = "SELECT * FROM vocabulary WHERE idvocabulary_idsubcategoria = $sub_cat";

	$datos = $objConexion->query($sql);
	$num = $datos->num_rows;
	if ($num < 0 ) {
		echo "NADA";
	}else
	{
		$html = '
		<table class="table" align="center">
		  <tr align="center" bgcolor="orange" class="texto">    
		    <td>image</td>
		    <td>audio</td>
		    <td>name</td>
		    <td>description</td>
		  </tr>
		';

		while ($row = $datos->fetch_array(MYSQLI_ASSOC)) {
			$html .= ' 
			<tr align="center" >    
				<td><img src="../Recursos/image/'.$row['image'].'" style="width: 150px;"></td>
			    <td>
			    <audio src="../Recursos/audio/'.$row['audio'].'" controls="controls" type="audio/mpeg">
				</audio>
			    </td>
			    <td>'.$row['Name'].'</td>
			    <td>'.$row['description'].'</td>
			</tr>
			';
		}
		$html .= '</table>';

		echo $html;
		
	}

?>

<table>
	<tr>
		<td ></td>
	</tr>
</table>