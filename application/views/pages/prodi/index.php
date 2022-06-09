<div id="main">
<header class="mb-3">
		<a href="#" class="burger-btn d-block d-xl-none">
			<i class="bi bi-justify fs-3"></i>
		</a>
	</header>

	<div class="page-heading">
		<h3>Program Studi</h3>
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">List Prodi</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
						<div class="table-responsive">
									<table class="table table-hover table-lg">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode</th>
												<th>Nama</th>
												<th>Ketua</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no = 1;
											foreach($list_prodi as $prodi) { ?>
												<tr>
													<td class="col-1"><?= $no ?></td>
													<td class="col-1"><?= $prodi->kode ?></td>
													<td class="col-auto"><?= $prodi->nama ?></td>
													<td class="col-auto"><?= $prodi->kaprodi ?></td>
												</tr>
											<?php 
												$no++;
											} ?>
										</tbody>
									</table>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
