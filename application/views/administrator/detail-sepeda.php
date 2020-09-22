
            <!-- MAIN CONTENT-->
            <div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-bicycle"></i><strong class="card-title" v-if="headerText">Detail Sepeda</strong></h3>
									</div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <div class="card">
								<?php foreach ($detail as $dtl) : ?>
                                <img src="<?php echo base_url()?>assets/temp-admin/images/barang/<?php echo $dtl->gambar ?>" class="img-fluid">
                                    <div class="card-body">
                                    <div class="col-md-11">
                                        <h3 class="mt-3"><?php echo $dtl->merek ?></h3>
                                        <p class="card-text text-justify mt-3"><?php echo $dtl->deskripsi ?></p>
                                    <div class="mt-5 mb-5">
                                        <p class="mb-1"><strong>Jenis Sepeda  :</strong> <?php echo $dtl->jenis ?></p>
                                        <p class="mb-1"><strong>Nomor Rangka  :</strong> <?php echo $dtl->no_rangka ?></p>
                                        <p class="mb-1"><strong>Warna Sepeda  :</strong> <?php echo $dtl->warna ?></p>
                                        <p class="mb-1"><strong>Jumlah Barang :</strong> <?php echo $dtl->jumlah ?> Items</p>
                                        <p class="mb-1"><strong>Harga Sewa Perhari  :</strong> <?php echo $dtl->harga_perhari ?></p>
                                        <p class="mb-1"><strong>Status Ketersediaan  :</strong> <?php echo $dtl->status ?></p>
                                        </div>


                                <?php endforeach; ?>
                                    </div>
                                <div class="modal-footer">
                                        <?php echo anchor('administrator/sepeda/edit/'. $dtl->id_sepeda, '<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</button>') ?>
                                        <?php echo anchor('administrator/sepeda/', '<button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</button>') ?>
                                </div>
                                    </div>
                                    </div>
                                </div>
                                        </div>
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

    