
            <!-- MAIN CONTENT-->
            <div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-download"></i><strong class="card-title" v-if="headerText">Rental - Pengembalian</strong></h3>
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
                                                <th>Id Pengembalian</th>
                                                <th>Tanggal Peminjaman</th>
												<th>Tanggal Pengembalian</th>
												<th>Jumlah Sepeda</th>
												<th>Id Peminjaman</th>
												<th>Denda</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($pengembalian as $back) :
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
												<td><?php echo $back->id_pengembalian ?></td>
                                                <td><?php echo $back->tgl_peminjaman ?></td>
                                                <td><?php echo $back->tgl_pengembalian	 ?></td>
												<td><?php echo $back->jml_sepeda ?></td>
												<td><?php echo $back->id_peminjaman ?></td>
												<td><?php echo $back->denda ?></td>
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

    