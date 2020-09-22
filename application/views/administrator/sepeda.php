            <!-- MAIN CONTENT-->
            <div class="main-content">
            <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12"><?php echo $this->session->flashdata('pesan') ?>
                                <div class="card">
									<div class="card-header overview-wrap">
                                    <h2 class="title-1"><i class="fas fa-bicycle"></i> SEPEDA</h2>
                                    <button type="button" class="au-btn au-btn-icon au-btn--blue btn-sm overview-item--c5" data-toggle="modal" data-target="#scrollmodal" aria-labelledby="scrollmodalLabel">
                                        <i class="zmdi zmdi-plus"></i>Tambah Data</button>   
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
                                                <th>Merek</th>
                                                <th>Jenis</th>
                                                <th>No. Rangka</th>
                                                <th>Jumlah</th>
                                                <th>Harga Sewa</th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($sepeda as $spd) :
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $spd->merek ?></td>
                                                <td><?php echo $spd->jenis ?></td>
                                                <td><?php echo $spd->no_rangka ?></td>
                                                <td><?php echo $spd->jumlah ?></td>
                                                <td><?php echo $spd->harga_perhari ?></td>
                                                <td width="20px"><?php echo anchor('administrator/sepeda/detail/'. $spd->id_sepeda, '<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>') ?></td>
                                                <td width="20px"><?php echo anchor('administrator/sepeda/edit/'. $spd->id_sepeda, '<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>') ?></td>
                                                <td width="20px"><?php echo anchor('administrator/sepeda/delete/'. $spd->id_sepeda, '<button type="submit" class="btn btn-sm btn-danger");"><i class="fa fa-trash"></i></button>') ?></td>
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
            <!-- END MAIN CONTENT-->
            
            <!-- modal scroll tambah data-->
			<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content offset-md-1">
						<div class="modal-body">
						<div class="modal-header">
							<h3 class="modal-title" id="scrollmodalLabel"><i class="fas fa-bicycle"></i>  Tambah Data Barang</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('administrator/sepeda/tambah_barang')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="merek" class=" form-control-label">Merek</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="text" id="merek" name="merek" placeholder="merek sepeda" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jenis" class=" form-control-label">Jenis</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="jenis" name="jenis" placeholder="jenis sepeda" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="no_rangka" class=" form-control-label">Nomor Rangka</label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="no_rangka" name="no_rangka" placeholder="nomor kerangka sepeda" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jumlah" class=" form-control-label">Jumlah</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="number" id="jumlah" name="jumlah" placeholder="jumlah sepeda" class="form-control">
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
                                                    <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="keterangan mengenai sepeda..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus-circle"></i> Tambah
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">
                                            <i class="fa fa-ban"></i> Batal
                                        </button>
                                    </div>
                                    </div>
                                        </form>
                                </div>
                    <!-- end of form -->
					</div>
				</div>
			</div>
			<!-- end modal scroll -->

           
            <!-- END PAGE CONTAINER-->
        </div>

    </div>