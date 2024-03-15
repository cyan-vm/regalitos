<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="../main.css" rel="stylesheet">
    <style>
        .icon-bg {
            background: linear-gradient(135deg, #f8EDF2, #D8CDD9);
        }
    </style>
</head>

<body>
<nav class="site-header">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="../index.html"> <i class="bi bi-fire"></i> Trending </a>
        <a class="py-2" href="./library.php"> <i class="bi bi-music-note-beamed"></i> Library </a>
        <a class="py-2" href="./artista_registrar.php"> <i class="bi bi-person-plus"></i> Artists </a>
        <a class="py-2" href="./album_registrar.php"> <i class="bi bi-disc"></i> Album </a>
        <a class="py-2" href="#"> <i class="bi bi-search"></i> Search </a>
    </div>
</nav>
<form method="post" action="../backend/products/insert.php" class="mt-4 px-5" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-person"></i>
        </span>
        <input type="text" name="name" required placeholder="Nombre del producto" class="form-control">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-card-text"></i>
        </span>
        <textarea name="description" placeholder="Descripción del producto" class="form-control"></textarea>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-cash"></i>
        </span>
        <input type="number" name="price" placeholder="Precio" class="form-control" step="0.01">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-box"></i>
        </span>
        <input type="number" name="stock" placeholder="Cantidad en stock" class="form-control" min="0">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-tags"></i>
        </span>
        <input type="text" name="tags" placeholder="Etiquetas del producto" class="form-control">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">
          <i class="bi bi-image"></i>
        </span>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="text-center">
        <input name="submit" type="submit" value="Guardar" class="btn btn-outline-danger">
    </div>
</form>
<script>
    // Get all elements with the class "input-group-text"
    var spans = document.querySelectorAll('.input-group-text');

    // Loop through each element and add the class "icon-bg"
    spans.forEach(function(span) {
        span.classList.add('icon-bg');
    });
</script>
</body>
</html>
