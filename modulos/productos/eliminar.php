
<?php 
$ROOT = '../../';
include("../../templates/header.php");
?>

<div class="h-100 container-fluid" style="height: 1000px;">

<?php

    
    include("../../bd.php");
    $id = $_GET["id"];

    $borrar = "DELETE FROM productos WHERE id = $id";
    $eliminar = mysqli_query($con, $borrar);

    if ($eliminar) {
        echo 'Eliminado Correctamente!!!';
    }

    echo '<center class="h-100"><a href="index.php"><button type="submit" class="btn btn-primary" >Volver</button></a></center';

?>
</div>


<?php 
$ROOT = '../../';
include("../../templates/footer.php");
?>

