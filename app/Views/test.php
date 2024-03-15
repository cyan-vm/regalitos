<?php

// Load the database connection
$db = \Config\Database::connect();

// Fetch products from the database
$query = $db->query('SELECT * FROM products');
$products = $query->getResultArray();

?>

<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Musica favorita</title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
				<link rel="stylesheet" type="text/css" href="main.css">
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
				<div class="container">
						<div class="row mt-3">
								<?php foreach ($products as $product): ?>
										<div class="col-6 song-container mb-4">
												<div class="row m-4">
														<div class="col-6">
																<img alt="img-album" src="images/<?= $product['image'] ?>" class="image"/>
														</div>
														<div class="col-6">
																<h4> <?= $product['name'] ?></h4>
																<p><i class="bi bi-info-circle"></i> <?= $product['description'] ?></p>
																<p><i class="bi bi-tags"></i> <?= $product['tags'] ?></p>
																<p><i class="bi bi-cash"></i> <?= $product['price'] ?></p>
																<p><i class="bi bi-box"></i> <?= $product['stock'] ?></p>
																<!-- Add more attributes as needed -->
																<button class="btn btn-success btn-sm">
																		<i class="bi bi-cart"></i> Add to Cart 
																</button>
																<button class="btn btn-light btn-sm text-danger">
																		<i class="bi bi-heart"></i> Like
																</button>
														</div>
												</div>
										</div>
								<?php endforeach; ?>
						</div>
				</div>
				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
		</body>
</html>
