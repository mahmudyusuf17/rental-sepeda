<div class="page-content--bge5" style="background-image:url(<?php echo base_url()?>assets/temp-admin/images/bicycle-banner.jpg); background-repeat:no-repeat; background-position:center; background-size:cover;">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content col-md-8 offset-md-5 bg-transparan">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/temp-admin/images/icon/logo-sepeda.png" alt="Logo Rental Sepeda">
                            </a>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="login-form">
                        <form method="post" action="<?php echo base_url('administrator/auth/proses_login') ?>">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                        </div>
                            <?php echo form_error('username', '<div class="text-danger small ml-3">','</div>') ?>
                        <div class="input-group mt-3">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                        </div>
                            <?php echo form_error('password', '<div class="text-danger small ml-3">','</div>') ?>
                            <button class="au-btn au-btn--block au-btn--blue m-b-20 mb-1 mt-5 overview-item--c5" type="submit">Masuk</button>
                        </form>
                        <div class="register-link">
                            <label>
                                <a href="#">Lupa Password?</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    