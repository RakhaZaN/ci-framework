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
		<section class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Data Mahasiswa</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<img src="" alt="profile">
							</div>
							<div class="col-md-8">
								<ul class="list-group">
									<li class="list-group-item">
										<?= $mhs->nim ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->nama ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->gender == 'L' ? 'Laki-laki':'Perempuan' ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->tmp_lahir.', '. $mhs->tgl_lahir ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->prodi_kode ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->ipk ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
