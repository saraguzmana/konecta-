<?php
include("../../bd.php");
?>

<?php 
$ROOT = '../../';
include("../../templates/header.php");
?>
<br>
<br>
<div class="card">

<div class="card-header">
    Datos de la venta
</div>
<div class="card-body">
    <form action="crear.php" method="post" enctype="multipart/form-data">
    

        <select name="id" id="id" required>
        <label for="id" class="form-label">ID del producto a agregar</label>
                    <option class="form-control">Seleccione el producto...</option>
                     <?php
                    $consultaId = $con->query("SELECT * from productos");
                    while($fila=$consultaId->fetch_array()){
                        echo "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
                    }
                    ?>
                </select> 

        <div class="mb-3">
        </br>
            <label for="id" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId"
                placeholder="">
        </div>

        <button type="submit" name="vender" class="btn btn-ag">Realizar venta</button>
            <a name="" id="" class="btn btn-v" href="index.php" role="button">Cancelar</a>
    </form>


    <?php
      if (isset($_POST['vender'])) {
        $query = "SELECT * FROM productos INNER JOIN ventas ON id = id;";

        $resultado = mysqli_query($con, $query);
        $id = $_POST['id'];
        $cantidad_producto = $_POST['cantidad'];
        $precio = "SELECT precio from productos where id=$id";
        $resultado2 = mysqli_query($con, $query);

        $monto = $cantidad_producto * $resultado2;
        $fechaActual = date('d-m-Y');
    
        $insert = "INSERT INTO ventas(fecha, monto, cantidad) VALUES('$fechaActual','$monto','$cantidad_producto'
        )";
    
        $insert1 = mysqli_query($con, $insert);
    }
    
    
    
    ?>

</div>
</div>
</br></br></br>
