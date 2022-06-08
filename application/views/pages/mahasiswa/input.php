<div id="main">
	<header class="mb-3">
		<a href="#" class="burger-btn d-block d-xl-none">
			<i class="bi bi-justify fs-3"></i>
		</a>
	</header>

	<div class="page-heading">
		<h3>Mahasiswa</h3>
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-12 col-md-6 mx-auto">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Form Data Mahasiswa</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<form action="" class="form form-horizontal">
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<label for="fnim">NIM</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="fnim" id="fnim" class="form-control" placeholder="Input NIM">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="fname">Name</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="fname" id="fname" class="form-control" placeholder="Input Name">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="fgender">Gender</label>
										</div>
										<div class="col-md-8">
											<div class="row">
												<div class="col-6 form-group">
													<div class="form-check">
														<input type="radio" name="rgender" id="L" class="form-check-input" value="L" checked>
														<label for="L" class="form-check-label">Laki-laki</label>
													</div>
												</div>
												<div class="col-6 form-group">
													<div class="form-check">
														<input type="radio" name="rgender" id="P" class="form-check-input" value="P">
														<label for="P" class="form-check-label">Perempuan</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="fipk">IPK</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="fipk" id="fipk" class="form-control" placeholder="Input IPK">
										</div>
									</div>
									<div class="row">
										<div class="col-12 d-flex justify-content-end">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="footer clearfix mb-0 text-muted">
			<div class="float-start">
				<p>2022 &copy;</p>
			</div>
			<div class="float-end">
				<p>Praktikum CI Framework</p>
			</div>
		</div>
	</footer>
</div>
