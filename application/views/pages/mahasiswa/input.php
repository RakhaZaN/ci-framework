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
							<?php if(isset($mhs)) {
								echo form_open('mahasiswa/update', ['class'=>'form form-horizontal'], ['nim'=>$mhs->nim]);
							} else {
								echo form_open('mahasiswa/store', ['class'=>'form form-horizontal']) ?>
								<div class="form-body">
									<div class="row">
										<div class="col-md-4">
											<label for="fnim">NIM</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="fnim" id="fnim" class="form-control" placeholder="Input nim" value="<?= isset($mhs) ? $mhs->nim:'' ?>" <?= isset($mhs) ? 'hidden':'' ?>>
										</div>
									</div>
							<?php } ?>
									<div class="row">
										<div class="col-md-4">
											<label for="fname">Name</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="fname" id="fname" class="form-control" placeholder="Input name" value="<?= isset($mhs) ? $mhs->nama:'' ?>">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="">Gender</label>
										</div>
										<div class="col-md-8">
											<div class="d-flex gap-3">
												<div class="form-group">
													<div class="form-check">
														<input type="radio" name="rgender" id="L" class="form-check-input" value="L" checked>
														<label for="L" class="form-check-label">Laki-laki</label>
													</div>
												</div>
												<div class="form-group">
													<div class="form-check">
														<input type="radio" name="rgender" id="P" class="form-check-input" value="P" <?= isset($mhs) && $mhs->gender == 'P' ? 'checked':'' ?>>
														<label for="P" class="form-check-label">Perempuan</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="ftmplahir">Tempat Lahir</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="ftmplahir" id="ftmplahir" class="form-control" placeholder="Input tempat lahir" value="<?= isset($mhs) ? $mhs->tmp_lahir:'' ?>">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="ftgllahir">Tanggal Lahir</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="date" name="ftgllahir" id="ftgllahir" class="form-control" value="<?= isset($mhs) ? $mhs->tgl_lahir:'' ?>">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="fprodi">Prodi</label>
										</div>
										<div class="col-md-8 form-group">
											<select name="fprodi" id="fprodi" class="form-select">
												<option value="SI" <?= isset($mhs) && $mhs->prodi_kode == 'SI' ? 'selected':'' ?>>SI - Sistem Informasi</option>
												<option value="TI" <?= isset($mhs) && $mhs->prodi_kode == 'TI' ? 'selected':'' ?>>TI - Teknik Informatika</option>
												<option value="BD" <?= isset($mhs) && $mhs->prodi_kode == 'BD' ? 'selected':'' ?>>BD - Bisnis Digital</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label for="fipk">IPK</label>
										</div>
										<div class="col-md-8 form-group">
											<input type="text" name="fipk" id="fipk" class="form-control" placeholder="Input ipk" value="<?= isset($mhs) ? $mhs->ipk:'' ?>">
										</div>
									</div>
									<div class="row">
										<div class="col-12 d-flex justify-content-end gap-3">
											<a href="<?= base_url($this->uri->segment(1).'/') ?>" class="btn btn-sm btn-secondary d-flex align-items-center">Cancel</a>
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</div>
								</div>
							<?= form_close() ?>
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
