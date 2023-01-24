<?php
include("../../bd.php");



?>

<?php
$ROOT = '../../';
include("../../templates/header.php");
?>

<br>

<div class="card">
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM productos";
                    $comentario = mysqli_query($con, $query);

                    while ($fila = mysqli_fetch_array($comentario, MYSQLI_ASSOC)) {

                        $i = 0;

                        echo '<tr>
                                <td>' . $fila["id"] . '</td>
                                <td>' . $fila["nombre"] . '</td>
                                <td>' . $fila["referencia"] . '</td>
                                <td>' . $fila["precio"] . '</td>
                                <td>' . $fila["peso"] . '</td>
                                <td>' . $fila["categoria"] . '</td>
                                <td>' . $fila["stock"] . '</td>
                                <td>' . $fila["fecha"] . '</td>

                                <td> <a href="editar.php?id=' . $fila["id"] . '">Editar</a></td>
                                <td> <a href="eliminar.php?id=' . $fila["id"] . '">Eliminar</a></td>
                            </tr>';

                        $i = $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</br>

<a name="registro" id="registro" class="btn btn-ag" href="crear.php" role="button">Agregar registro</a>
<a name="volver" id="volver" class="btn btn-v" href="crear.php" role="button">Volver</a>




<?php include("../../templates/footer.php") ?>