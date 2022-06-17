<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url('public/assets/css/main/app.css') ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/pages/auth.css') ?>">
	<link rel="shortcut icon" href="<?= base_url('public/assets/images/logo/favicon.svg') ?>" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url('public/assets/images/logo/favicon.png') ?>" type="image/png">
</head>

<body>
	<div id="auth">

		<div class="row h-100">
			<div class="col-lg-5 col-12">
				<div id="auth-left">
					<a href="../" class="btn btn-light icon icon-left">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
						</svg>
						Back
					</a>
					<!-- <div class="auth-logo">
						<a href="#"><img src="<?= base_url('public/assets/images/logo/logo.svg') ?>" alt="Logo"></a>
					</div> -->
					<h1 class="auth-title mt-4">Log in.</h1>
					<!-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> -->

					<?= form_open('auth/signin') ?>
					<div class="form-group position-relative has-icon-left mb-4">
						<input type="text" name="username" class="form-control form-control-xl" placeholder="Username">
						<div class="form-control-icon">
							<i class="bi bi-person"></i>
						</div>
					</div>
					<div class="form-group position-relative has-icon-left mb-4">
						<input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
						<div class="form-control-icon">
							<i class="bi bi-shield-lock"></i>
						</div>
					</div>
					<!-- <div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Keep me logged in
							</label>
						</div> -->
					<button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
					<?= form_close() ?>
					<div class="text-center mt-5 text-lg fs-4">
						<p class="text-gray-600">Don't have an account? <a href="<?= base_url('auth/register') ?>" class="font-bold">Sign up</a>.</p>
						<!-- <p><a class="font-bold" href="#">Forgot password?</a>.</p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-right">
				</div>
			</div>
		</div>

	</div>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		$(document).ready(function() {
			let login_success = <?= $this->session->has_userdata('login_success') ? $this->session->userdata('login_success') : 'null' ?>

			if (login_success != null && login_success == false) {
				swAlert('Login Failed', 'Username or Password is wrong!', 'error')
			}
		})

		function swAlert(title, text, icon) {
			Swal.fire({
				title: title,
				text: text,
				icon: icon
			})
		}
	</script>
</body>

</html>
