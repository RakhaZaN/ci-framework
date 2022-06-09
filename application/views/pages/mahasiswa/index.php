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
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header">
								<h4>List Mahasiswa</h4>
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
											foreach($list_mhs as $mhs) { ?>
												<tr>
													<td class="col-1"><?= $counter ?></td>
													<td class="col-2"><?= $mhs->nim ?></td>
													<td class="col-auto"><?= $mhs->nama ?></td>
													<td class="col-2"><?= $mhs->gender == 'L' ? 'Laki-laki':'Perempuan' ?></td>
													<td class="col-2"><?= $mhs->prodi_kode ?></td>
													<td class="col-1">
														<a href="#" class="btn btn-sm btn-info icon icon-left">View</i></a>
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
