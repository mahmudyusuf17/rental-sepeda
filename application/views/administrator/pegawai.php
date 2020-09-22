
            <!-- MAIN CONTENT-->
            <div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-user"></i><strong class="card-title" v-if="headerText">Pegawai</strong></h3>
									</div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
								<!-- DATA TABLE-->
                                <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-striped table-hover table-bordered table-primary table-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pegawai</th>
                                                <th>Jabatan</th>
												<th>Alamat</th>
												<th>Usia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($pegawai as $pgw) :
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
												<td><?php echo $pgw->nama_pegawai ?></td>
                                                <td><?php echo $pgw->jabatan ?></td>
                                                <td><?php echo $pgw->alamat ?></td>
												<td><?php echo $pgw->usia ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                                        </div>
                                        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- END PAGE CONTAINER-->

	</div>

    