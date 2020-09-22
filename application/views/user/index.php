            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button" href="<?php echo base_url()?>rental">Rent Now</a>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container" id="home">
      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Hindari Kemacetan Dengan Bersepeda</h1>
          <p>Hidup ini seperti bersepeda, jika Kamu ingin menjaga keseimbanganmu maka teruslah bergerak maju.</p>
          <a class="button button-hero mt-4" href="#">Rent Now</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="<?php echo base_url() ?>assets/templates/img/home/2.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin section-padding" id="services">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?php echo base_url() ?>assets/templates/img/logo-mini.png" alt="">
        <h2>Pelayanan Kami</h2>
        <p>Kepuasan pelanggan adalah prioritas kami. Berikut beberapa kenyamanan yang akan Kamu dapatkan jika menyewa sepeda di Rental Sepeda</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/templates/img/home/surat-jaminan.png" alt="surat jaminan">
            </div>
            <div class="service-card-body">
              <h3>Syarat Mudah</h3>
              <p>Hanya mengisi form data diri Kamu serta foto KTP asli. Jika belum mempunyai KTP, kamu bisa mengirim ID kamu yang lain.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/templates/img/home/perlengkapan-sepeda.png" alt="fasilitas sewa">
            </div>
            <div class="service-card-body">
              <h3>Fasilitas Sewa</h3>
              <p>Kamu akan diberi alat pengaman dan perlengkapan dalam bersepeda seperti helm SNI, kunci gembok pengaman, dan pelayanan jika terjadi kerusakan pada sepeda.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="service-card text-center">
            <div class="service-card-img">
              <img class="img-fluid" src="<?php echo base_url() ?>assets/templates/img/home/sepeda-berkualitas.png" alt="sepeda berkualitas">
            </div>
            <div class="service-card-body">
              <h3>Sepeda Yang Berkualitas</h3>
              <p>Rental Sepeda menyewakan berbagai macam merek sepeda yang berkualitas seperti Polygon, Pacific dan menyediakan berbagai jenis dari merek tersebut.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Service Area End =================-->


  <!--================About Area Start =================-->
  <section class="bg-gray magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="<?php echo base_url() ?>assets/templates/img/home/6.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>Sehat Ga Harus Mahal,<br class="d-none d-xl-block">Bersepeda Salah Satunya.</h2>
          <p>Apapun sepedamu tak jadi masalah. Yang penting kamu masih ingat cara bersepeda. Mau rutin bersepeda tiap hari, cuma pas akhir pekan, sebulan sekali atau setahun sekali pun tidak apa-apa. Lagipula intinya kan tetap bersepeda.</p>
          <a class="button" href="<?php echo base_url()?>rental">Yuk Bersepeda</a>
        </div>
      </div>
    </div>
  </section>

  <!--================About Area End =================-->
<section class="section-margin section-padding" id="sepeda">
    <div class="container">
  <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?php echo base_url() ?>assets/templates/img/logo-mini.png" alt="">
        <h2>Rental Sepeda</h2>
        <p class="mt-2">Berbagai merek dan jenis sepeda <br> yang dapat kamu pilih sesuai yang diinginkan!</p>
      </div>
  <div class="row">
  <?php foreach ($sepeda as $spd) : ?>
  <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/temp-admin/images/barang/<?php echo $spd->gambar ?>" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4><?php echo $spd->merek ?> | <?php echo $spd->jenis ?></h4>
              </a>
              <p><?php echo $spd->deskripsi ?> </p>
            </div>
          </div>
        </div>
          <?php endforeach; ?>
      </div>
      </div>
      </section>

  <!--================Lokasi Area Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial" id="lokasi">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?php echo base_url() ?>assets/templates/img/logo-mini.png" alt="">
        <h2>Lokasi Kami</h2>
        <p>Temukan kami melalui Google Maps!</p>
      </div>
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="<?php echo base_url() ?>assets/templates/img/home/maps.png">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>Lokasi Tempat Rental Sepeda</h2>
          <p>Bagi Kamu yang ingin datang langsung ketempat kami, silakan temukan Rental Sepeda di Google Maps.</p>
          <a class="button" href="https://www.google.co.id/maps/place/Universitas+Gunadarma+Kampus+G/@-6.3547442,106.8413345,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec472dc3632d:0x54e22c8101252fa4!8m2!3d-6.3547442!4d106.8435286">Let's Find Us</a>
        </div>
      </div>
    </div>
  </section>

  <!--================Blog section Start =================-->
  <section class="section-padding bg-gray" id="contact">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="<?php echo base_url() ?>assets/templates/img/logo-mini.png" alt="">
        <h2>Hubungi Kami</h2>
        <p>Jika kamu punya pertanyaan atau keluhan silakan hubungi kami melalui media dibawah ini</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/templates/img/home/wa.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Whatsapp: 081237323737</h4>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/templates/img/home/ig.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Instagram: @RentalSepeda</h4>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/templates/img/home/fb.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Facebook: Rental Sepeda</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog section End =================-->
