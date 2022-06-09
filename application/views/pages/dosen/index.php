<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Dosen</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
								<h4>List Dosen</h4>
							</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>NIDN</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Pendidikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $counter = 1;
                                            foreach ($list_dsn as $dsn) { ?>
                                                <tr>
                                                    <td class="col-2"><?= $dsn->nidn ?></td>
                                                    <td class="col-auto"><?= $dsn->name ?></td>
                                                    <td class="col-2"><?= $dsn->gender == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                                                    <td class="col-2"><?= $dsn->pendidikan ?></td>
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
