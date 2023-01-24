<?php 
$ROOT = '../../';
include("../../templates/header.php");
?>
<?php
include("../../bd.php");



?>


<br>

<div class="card">
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># de venta</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Código del producto</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM ventas";
                    $comentario = mysqli_query($con, $query);

                    while ($fila = mysqli_fetch_array($comentario, MYSQLI_ASSOC)) {

                        $i = 0;

                        echo '<tr>
                                <td>' . $fila["id_ventas"] . '</td>
                                <td>' . $fila["fecha"] . '</td>
                                <td>' . $fila["monto"] . '</td>
                                <td>' . $fila["id"] . '</td>
                        
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

<a name="registro" id="registro" class="btn btn-ag" href="crear.php" role="button">Agregar nueva venta</a>
<a name="volver" id="volver" class="btn btn-v" href="index.php" role="button">Volver</a>

</br></br></br>
