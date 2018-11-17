<br><br><?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Vocabulario.php";
require "../Modelo/Categoria.php";
require "../Modelo/Subcategoria.php";
$objCategoria=new Categoria();
$Categorias=$objCategoria->consultarCategorias();
$objSubcategoria=new Subcategoria();
$Subcategorias=$objSubcategoria->consultarSubcategorias();
?>

<h1 align="center">PLAY GAMER LETTER'S SOUP</h1>
<br>
<h4>SELECCIONE LOS CAMPOS Y EMPIECE A JUGAR</h4>
<br>
<div class="row">
  <div class="col-sm-6">
    <select name="idsubcategory_category" id='Categoria_id' class="custom-select">
      <option value="0">Seleccione una Categoria</option>
      <?php while($registro=$Categorias->fetch_object()){ echo "<option value=".$registro->idCategory.">".$registro->Name."</option>";}?>
    </select>
  </div>
  <div class="col-sm-6">
    <select class="custom-select" id="Sub_categoria" name="sub_categoria">
      <option value="0">Seleccione una Sub-Categoria</option>
    </select>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-sm-12 resp_table">
  
  </div>
</div>
<script>

  $('#Sub_categoria').change(function(){
    var id_sub_cat = $('#Sub_categoria').val();
    $.ajax({
        url: '../Controlador/consultarVocabularios_cat_sub_cat.php',
        type: 'POST',
        data: {id_sub_cat:id_sub_cat},
      })
      .done(function(resp) {
        console.log(resp);
        if (resp == '') {
          $('.resp_table').html('<option>Sin respuesta sigue buscando</option>');
        }else{
          $('.resp_table').html(resp);
        }
      })
      .fail(function() {
        //console.log("error");
      })
      .always(function() {
        //console.log("complete");
      });
  })
  
</script>