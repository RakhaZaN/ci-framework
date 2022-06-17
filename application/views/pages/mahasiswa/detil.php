<?php
$foto = base_url('public/assets/images/4853433.png');
if ($mhs->foto != null && file_exists('./uploads/' . $mhs->foto)) {
	$foto = base_url('uploads/' . $mhs->foto);
}
?>
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
		<div class="row mb-3">
			<div class="col-12">
				<a href="./" class="btn btn-secondary icon icon-left">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
					</svg>
					Back</a>
			</div>
		</div>
		<section class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Data Mahasiswa</h4>
					</div>
					<div class="card-body">
						<div class="row align-items-start">
							<div class="col-md-3">
								<img src="<?= $foto ?>" alt="<?= $mhs->foto ?? 'profile' ?>" class="w-100 rounded border border-primary">
								<?= form_open_multipart('mahasiswa/upload_photo', ['class' => 'form form-vertical mt-3'], array('nim' => $mhs->nim)) ?>
								<div class="form-body">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<input type="file" name="ffoto" id="ffoto" class="form-control">
											</div>
										</div>
										<div class="col-12">
											<button type="submit" class="btn btn-success btn-sm">Upload</button>
										</div>
									</div>
								</div>
								<?= form_close() ?>
							</div>
							<div class="col">
								<ul class="list-group rounded border border-primary">
									<li class="list-group-item">
										<?= $mhs->nim ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->nama ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->gender == 'L' ? 'Laki-laki' : 'Perempuan' ?>
									</li>
									<li class="list-group-item">
										<?= $mhs->tmp_lahir . ', ' . $mhs->tgl_lahir ?>
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
