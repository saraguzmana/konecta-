<?php 
include("../../bd.php");

?>
<?php 
        if (isset($_POST["actualizar"])) 
        {
            $id = $_POST["id"];
            $nombre = $_POST['nombre'];
			$referencia= $_POST['referencia'];
			$precio = $_POST['precio'];
            $peso = $_POST['peso'];
            $categoria = $_POST['categoria'];
            $stock = $_POST['stock'];
            $fecha = $_POST['fecha'];
            $query = "UPDATE productos SET nombre = '$nombre', referencia = '$referencia', precio = '$precio', peso = '$peso', categoria = '$categoria', stock = '$stock', fecha = '$stock' WHERE id = $id";
            
            $resultado = mysqli_query($con, $query);

            if ($resultado) {
                echo 'Actualizado Correctamente';
            }
            else{
                echo "Ha ocurrido un error";
                echo "Error" . mysqli_connect_error() . PHP_EOL;
            }
            }else{
            $id = $_GET["id"];
            $query = "SELECT * FROM productos WHERE id = $id";
            $resultadoQuery = mysqli_query($con, $query);
            $usuario = mysqli_fetch_row($resultadoQuery);
        
            $nombre = $usuario[1];
            $referencia = $usuario[2];
            $precio = $usuario[3];
            $peso = $usuario[4];
            $categoria = $usuario[5];
            $stock = $usuario[6];
            $fecha = $usuario[7];
        }
?>
<?php 
$ROOT = '../../';
include("../../templates/header.php");
?>
<div class="card">

<div class="card-header">
    Datos del producto
</div>post
<div class="card-body">
    <form action="editar.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="ID" class="form-label">ID:</label>
          <input type="text" value="<?php echo $id;?> "
            class="form-control" readonly name="id" id="id" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text"
            class="form-control"  value="<?php echo $nombre;?> " name="nombre" id="nombre" aria-describedby="helpId" placeholder="Pan">
         
        </div>

        <div class="mb-3">
          <label for="referencia" class="form-label">Referencia</label>
          <input type="text"
            class="form-control"  value="<?php echo $referencia;?>" name="referencia" id="referencia" aria-describedby="helpId" placeholder="12345">
         
        </div>

        <div class="mb-3">
          <label for="precio" class="form-label">Precio</label>
          <input type="text"
            class="form-control"  value="<?php echo $precio;?>" name="precio" id="precio" aria-describedby="helpId" placeholder="12000">
         
        </div>

        <div class="mb-3">
          <label for="peso" class="form-label">Peso (en gramos)</label>
          <input type="text"
            class="form-control"  value="<?php echo $peso;?>" name="peso" id="peso" aria-describedby="helpId" placeholder="170">
         
        </div>

        <div class="mb-3">
          <label for="categoria" class="form-label">Categoria</label>
          <input type="text"
            class="form-control"  value="<?php echo $categoria;?>" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Salado">
         
        </div>

        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="text"
            class="form-control"  value="<?php echo $stock;?>" name="stock" id="stock" aria-describedby="helpId" placeholder="666">
         
        </div>


        <div class="mb-3">
          <label for="fecha" class="form-label">Fecha de creación</label>
          <input type="date"  value="<?php echo $fecha;?>" class="form-control" name="fecha" id="fecha" aria-describedby="emailHelpId" placeholder="Fecha de creación">
        </div>

        

        <button type="submit" name="actualizar" class="btn btn-success">Agregar registro</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>
</div>
</div>
<?php 
$ROOT = '../../';
include("../../templates/footer.php");
?>