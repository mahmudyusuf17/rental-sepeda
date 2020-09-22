
            <!-- MAIN CONTENT-->
            <div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-bicycle"></i><strong class="card-title" v-if="headerText">Edit Sepeda</strong></h3>
									</div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-9 offset-md-2">
								<?php foreach ($edit as $edt) : ?>
                        <form action="<?php echo base_url('administrator/sepeda/update_barang')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group mt-4">
                                                <div class="col col-md-3">
                                                    <label for="merek" class=" form-control-label">Merek</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="merek" name="merek" value="<?php echo $edt->merek ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jenis" class=" form-control-label">Jenis</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="jenis" name="jenis" value="<?php echo $edt->jenis ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="no_rangka" class=" form-control-label">Nomor Rangka</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="no_rangka" name="no_rangka" value="<?php echo $edt->no_rangka ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jumlah" class=" form-control-label">Jumlah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="jumlah" name="jumlah" value="<?php echo $edt->jumlah ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="gambar" class=" form-control-label">Gambar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gambar" name="gambar" multiple="" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="deskripsi" class=" form-control-label">Deskripsi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="deskripsi" id="deskripsi" rows="9" class="form-control"><?php echo $edt->deskripsi ?>"</textarea>
                                                </div>
                                            </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Update
                                        </button>
                                        <?php echo anchor('administrator/sepeda/', '<button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</button>') ?>
                                        
                                        
                                    </div>
                                    </div>
                                    
                                    </div>
                                        </form>
									<?php endforeach; ?>
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

    