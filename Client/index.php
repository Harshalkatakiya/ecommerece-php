<?php
    require ('config.php');
    $query = "select * from products";
    $result = $conn->query($query);
?>
<!doctype html>
<html lang="en">

<head>
	<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
		rel="stylesheet" integrity=
"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
		crossorigin="anonymous">
	<script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity=
"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous">
	</script>
</head>

<body>
	<h1 class="m-4" class="text-success">
		GeeksforGeeks
	</h1>
	<h4 class="ms-4">Bootstrap 5 Grid Cards</h4>
	<div class="container m-4">
		<div class="row row-cols-1 row-cols-md-2
					row-cols-lg-3 g-4">
                    <?php
                    while ($product = $result->fetch_assoc()) {
                        ?>
            <div class="col">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-6 text-center">
							<img src=
"<?php echo $product['image']; ?>"
								class="img-fluid rounded-start"
								alt="...">
						</div>
						<div class="col-md-6">
							<div class="card-body">
								<h5 class="card-title">
                                <?php echo $product['name']; ?>
								</h5>
								<p class="card-text">
                                <?php echo $product['price']; ?>
								</p>
								<p class="card-text">
									<small class="text-muted">
                                    <?php echo $product['qty']; ?>
									</small>
								</p>
						</div>
						</div>
					</div>
				</div>
			</div>
                        <?php }?>
		</div>
	</div>
</body>
</html>
