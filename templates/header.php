<?php
$url_base = "http://localhost/dashboard/konecta/";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Konecta App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo $ROOT; ?>estilos/styles.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>

    <nav class="navbar navbar-expand navbar-light nav-col">
        <ul class="nav navbar-nav">

            <li class="nav-item nav-right">
                <img class="logo" src="<?php echo $ROOT; ?>img/konecta.png" alt="konecta">
            </li>

            <li class="nav-item">
                <a class="a nav-link active" href="<?php echo $url_base; ?>index.php" aria-current="page">Inicio<span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="a nav-link" href="<?php echo $url_base; ?>modulos/productos/index.php">Ver Productos</a>
            </li>
            <li class="nav-item">
                <a class="a nav-link" href="<?php echo $url_base; ?>modulos/ventas/index.php">Ventas</a>
            </li>

        </ul>



    </nav>
    <main class="container">