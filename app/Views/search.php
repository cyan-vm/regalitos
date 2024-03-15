<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="../main.css" rel="stylesheet">
</head>
<body>
    <nav class="site-header">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
     <a class="py-2" href="./index.html"> <i class="bi bi-shop"></i> Regalitos </a>
     <a class="py-2" href="./pages/library.php"> <i class="bi bi-journal"></i> Ventas </a>
     <a class="py-2" href="./pages/artista_registrar.html"> <i class="bi bi-gift"></i> Catalogo </a>
     <a class="py-2" href="./pages/album_registrar.php"> <i class="bi bi-person"></i> Empleados </a>
     <a class="py-2" href="<?php echo base_url('search'); ?>"> <i class="bi bi-search"></i> Search </a>
        </div>
    </nav>

    <!-- Search Form -->
    <div class="container mt-4">
        <form method="GET" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search products" name="search_query">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>

    <!-- Display Search Results -->
    <div class="albums-list">
        <div class="container">
            <div class="row mt-3">
                <?php
                // Load the database connection
                $db = \Config\Database::connect();

                if (isset($_GET['search_query'])) {
                    $searchQuery = $db->escapeLikeString($_GET['search_query']);
                    $searchQuery = "%" . $searchQuery . "%"; // For partial matches

                    $query = $db->table('products')
                        ->like('name', $searchQuery)
                        ->orLike('description', $searchQuery)
                        ->orLike('tags', $searchQuery)
                        ->get();

                    if ($query->getNumRows() > 0) {
                        foreach ($query->getResult() as $row) {
                            echo '<div class="col-6 song-container mb-4">';
                            echo '<div class="row m-4">';
                            echo '<div class="col-6">';
                            echo '<img alt="' . $row->name . '" src="images/' . $row->image . '" class="image";">';
                            echo '</div>';
                            echo '<div class="col-6">';
                            echo '<h4>' . $row->name . '</h4>';
                            echo '<p>' . $row->description . '</p>';
                            echo '<p><i>Price: $' . $row->price . '</i></p>';
                            echo '<a href="#" class="btn btn-success btn-sm"><i class="bi bi-cart"></i> Add to Cart</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="col-12"><p>No products found</p></div>';
                    }
                } else {
                    // Default logic to display all products without search
                    // This section will display all products by default when there's no search query
                    // Use your existing code to display products without search
                    // ... (your existing PHP logic for displaying products)
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Your additional HTML content and closing body/html tags -->
    <!-- ... -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
