<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Landing Page</title>
	<link rel="stylesheet" href="<?= base_url('public/assets/css/main/app.css') ?>">
	<link rel="shortcut icon" href="<?= base_url('public/assets/images/logo/favicon.svg') ?>" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url('public/assets/images/logo/favicon.png') ?>" type="image/png">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container d-block">
			<div class="d-flex align-items-center">
				<!-- <a href="index.html"><i class="bi bi-chevron-left"></i></a> -->
				<a class="navbar-brand" href="index.html">
					<img src="<?= base_url('public/assets/images/logo/logo.svg') ?>">
				</a>
				<div class="navbar-nav mx-auto">
					<a class="nav-link active" href="#">Home</a>
					<a class="nav-link" href="#">Link</a>
					<a class="nav-link" href="#">Link</a>
					<a class="nav-link disabled">Disabled</a>
				</div>
				<a href="#" class="btn text-secondary px-4">Register</a>
				<a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4">Login</a>
			</div>
		</div>
	</nav>


	<main>
		<section id="section">
			<div class="container">
				<div class="card mt-5">
					<div class="card-header">
						<h4 class="card-title">Landing Page</h4>
					</div>
				</div>
			</div>
		</section>
	</main>


</body>

</html>
