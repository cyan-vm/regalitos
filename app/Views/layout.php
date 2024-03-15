<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS via CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="layout_resources/main.css">
    <style>
        /* Override default link color */
        .nav-link {
            color: black !important; /* Change to your desired color */
        }
    </style>
</head>
<body>
<ul class="nav justify-content-between">
    <li class="nav-item main-nav-item">
        <a class="nav-link active" href="#"> Regalitos </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#"> Ventas </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"> Catalogo </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"> Empleados </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contactar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#"> Login </a>
    </li>
</ul>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-between align-items-center">
            <div>
                <h1>Regalos importantes para personas importantes</h1>
                <!-- <p> Descubre regalos únicos para todas las ocasiones en [Nombre de tu Tienda]. Selección curada de calidad con opciones personalizadas. Haz cada momento especial. </p> -->
            </div>
            <button class="btn btn-1">Catalogo</button>
        </div>
        <div class="banner_img col-md-6">
            <img src="layout_resources/img/banner.png" alt="#" class="img-fluid">
            <!-- <img src="img/banner_pattern.png " alt="#" class="pattern_img img-fluid"> -->
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript Bundle via CDN (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
