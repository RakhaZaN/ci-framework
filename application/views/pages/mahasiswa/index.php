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
					<div class="card-header d-flex justify-content-between">
						<h4>List Mahasiswa</h4>
						<a href="./mahasiswa/create" class="btn btn-sm btn-success">Create New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-lg">
								<thead>
									<tr>
										<th>No</th>
										<th>NIM</th>
										<th>Name</th>
										<th>Gender</th>
										<th>Prodi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$counter = 1;
									foreach ($list_mhs as $mhs) { ?>
										<tr>
											<td><?= $counter ?></td>
											<td><?= $mhs->nim ?></td>
											<td><?= $mhs->nama ?></td>
											<td><?= $mhs->gender == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
											<td><?= $mhs->prodi_kode ?></td>
											<td class="d-flex flex-wrap gap-2 justify-content-start align-items-center">
												<a href="./mahasiswa/show?nim=<?= $mhs->nim ?>" class="btn btn-sm btn-outline-info">View</a>
												<a href="./mahasiswa/edit?nim=<?= $mhs->nim ?>" class="btn btn-sm btn-outline-warning">Edit</a>
												<button class="btn btn-sm btn-outline-danger" onclick="alertDelete('<?= $mhs->nim ?>', '<?= $mhs->nama ?>')">Delete</button>
											</td>
										</tr>
									<?php
										$counter++;
									} ?>
								</tbody>
							</table>
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
