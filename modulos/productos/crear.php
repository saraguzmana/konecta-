<?php 
include("../../bd.php");


if (isset($_POST['insert'])) {
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $fecha = $_POST['fecha'];

    $insert = "INSERT INTO productos(nombre, referencia, precio, peso, categoria, stock, fecha) VALUES('$nombre','$referencia','$precio', '$peso', '$categoria', '$stock', '$fecha'
    )";

    $insert1 = mysqli_query($con, $insert);

}



?>

<?php 
$ROOT = '../../';
include("../../templates/header.php");
?>
<br>

<div class="card">

    <div class="card-header">
        Datos del producto
    </div>
    <div class="card-body">
        <form action="crear.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Pan">
             
            </div>

            <div class="mb-3">
              <label for="referencia" class="form-label">Referencia</label>
              <input type="text"
                class="form-control" name="referencia" id="referencia" aria-describedby="helpId" placeholder="12345">
             
            </div>

            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="text"
                class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="12000">
             
            </div>

            <div class="mb-3">
              <label for="peso" class="form-label">Peso (en gramos)</label>
              <input type="text"
                class="form-control" name="peso" id="peso" aria-describedby="helpId" placeholder="170">
             
            </div>

            <div class="mb-3">
              <label for="categoria" class="form-label">Categoria</label>
              <input type="text"
                class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="Salado">
             
            </div>

            <div class="mb-3">
              <label for="stock" class="form-label">Stock</label>
              <input type="text"
                class="form-control" name="stock" id="stock" aria-describedby="helpId" placeholder="666">
             
            </div>


            <div class="mb-3">
              <label for="fecha" class="form-label">Fecha de creación</label>
              <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="emailHelpId" placeholder="Fecha de creación">
            </div>

            

            <button type="submit" name="insert" class="btn btn-success">Agregar registro</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>
</div>

<?php 
$ROOT = '../../';
include("../../templates/footer.php");
?>