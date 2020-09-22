
            <!-- MAIN CONTENT-->
            <div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-users"></i><strong class="card-title" v-if="headerText">Customers</strong></h3>
									</div>
								<div class="card-body">
                                <div class="row m-t-30">
                            	<div class="col-md-12">
								<!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-striped table-hover table-bordered table-primary table-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Nomor KTP</th>
                                                <th>Nomor Telpon</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($customer as $csm) :
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $csm->nama_pelanggan ?></td>
                                                <td><?php echo $csm->no_ktp ?></td>
                                                <td><?php echo $csm->no_telp ?></td>
                                                <td><?php echo $csm->alamat ?></td>
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

    