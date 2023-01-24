<?php
$ROOT = '../../';
include("../../templates/header.php");
?>

<?php


include("../../bd.php");
$id = $_GET["id"];

$borrar = "DELETE FROM productos WHERE id = $id";
$eliminar = mysqli_query($con, $borrar);
?>


<div class="container h-100 mt-3">
    <div class="row align-items-center h-100">
        <div class="col">
            <h1 class="text-center">
                <?php
                if ($eliminar) {
                    echo 'Eliminado Correctamente!';
                }
                ?>
            </h1>

        </div>

        <center class="h-100">
            <a href="index.php">
                <button type="submit" class="btn btn-primary">Volver</button>
            </a>
        </center>
    </div>
</div>
</br></br></br>
