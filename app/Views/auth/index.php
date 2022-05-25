<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="flashdata" data-flashdata="<?= session()->getFlashdata('orderberhasil') ?>"></div>
<div class="flash-data" data-flashdata="<?= session()->getFlashdata('berhasilkeluar') ?>"></div>s
<!-- jumbotron -->
<div class="jumbotron">
   <div class="row justify-content-center" style="color: white; max-width: 100%;">
      <div class="col">
         <h4></h4>
      </div>
   </div>
</div>
<!-- ./jumbotron -->

<!-- cek resi -->
<div class=" container" data-aos="zoom-in-down" data-aos-duration="1000">
   <div class="panel-menu">
      <h3 class="mb-3">CEK RESI</h3>
      <div class="row">
         <div class="lacak pb-5">
            <form action="/auth/cekresi" method="post" class="form-cekresi">
               <input type="" name="kode_barang" placeholder="ID PELACAKAN" autocomplete="off" class="box-style">
               <button type="submit" class="btn" name="cari">LACAK</button>
               <div id="validationServer04Feedback" class="invalid-feedback">
                  <?= $validasi->getError('kode_barang'); ?>
               </div>
            </form>
            <div class="container mt-3">
               <div class="row justify-content-center">
                  <div class="col-md-9">
                     <?php if(session()->getFlashdata('resiKosong')) : ?>
                     <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('resiKosong') ?>
                     </div>
                     <?php endif ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ./cek resi -->


<!-- bar selamat datang -->
<div
   class="welcome animate__animated animate__rubberBand animate__slower 2s animate__delay animate__delay-2s 2s animate__repeat-2 2">
   <h2>Dapatkan <span>Paket</span> anda dengan <span>Cepat</span>.</h2>
</div>
<!-- ./bar selamat datang -->

<div class="container" data-aos-offset="2000">
   <div class="list-paket">
      <div class="row">
         <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1500">
            <div class="box">
               <h3>Paket Reguler</h3>
               <p>Kecepatan pengiriman 2-7 hari jangkauan terbatas garansi barang demi keamanan
               </p>
               <h4>Harga Rp. 12.000</h4>
               <a href="/auth/order" class="btn btn-warning">Checkout</a>
            </div>
         </div>
         <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="50">
            <div class="box">
               <h3>Paket <br> Cepat</h3>
               <p>
                  Kecepatan pengiriman 2-5 hari jangkauan pulau jawa garansi barang demi keamanan
               </p>
               <h4>Harga Rp. 17.000</h4>
               <a href="/auth/order" class="btn btn-warning">Checkout</a>
            </div>
         </div>
         <div class="col-lg-3" data-aos="fade-left" data-aos-duration="1500">
            <div class="box">
               <h3>Paket <br> Kilat</h3>
               <p>
                  Kecepatan pengiriman 2-3 hari jangkauan seluruh Indonesia garansi barang demi
                  keamanan
               </p>
               <h4>Harga Rp. 21.000</h4>
               <a href="/auth/order" class="btn btn-warning">Checkout</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- akhir elemen harga paket -->

<!-- pembungkus warna -->
<div class="dark mt-5 mb-5">
   <!-- about1 -->
   <section id="features" class="features">
      <div class="container" data-aos="fade-up" data-aos-delay="20" data-aos-duration="800" data-aos-offset="250">
         <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
               <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                     <h3>CHIEF EXECUTIVE OFFICE</h3>
                     <p class="font-italic">CEO ini paket adalah Zaqi Nur Rabbani yang bertanggung
                        jawab atas
                        semua keputusan-keputusan besar. Menempati posisi teratas di perusahaan ini
                        dan
                        segala
                        sesuatu keputusannya adalah mutlak. Visi Misi yang di ciptakannya berperan
                        besar
                        nantinya. Wajah perusahaan kami dia sendiri</p>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center">
                     <img src="/img/ceo-zaqy.jpg" alt="" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
   </section>
   <!-- akhir about1 -->
   <!-- about2 -->
   <section id="about" class="about" style="padding-top: 100px; padding-bottom: 2%">
      <div class="container" data-aos="fade-up" data-aos-delay="20" data-aos-duration="800" data-aos-offset="250">
         <div class="row">
            <div class="col-lg-6 video-box align-self-baseline">
               <img src="/img/cmo-rendy.jpg" class="img-fluid" alt="" width="500px" />
            </div>
            <div class="col-lg-6 pt-3 pt-lg-0 content">
               <h3>CHIEF OPRATING OFFICIER</h3>
               <p class="font-italic"> COO dari ini paket adalah Rendi Nurhidayat yang bertanggung
                  jawab untuk
                  mengawasi dan mengatur segala oprasional periusahaan. Seorang COO berperan besar
                  untuk
                  perkembangan produk, riset marketing dan layanan serta segala sesuatu yang
                  menyangkut
                  perusahaan.
                  Dia berperan untuk membantu CEO untuk mencapai tujuannya yang terdapat dalam Visi
                  Misi nya.
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- akhir about -->
</div>
<!-- ./pembungkus -->

<!-- created by -->
<div class="company-gallery" data-aos-offset="500">
   <div class="text-center" data-aos="zoom-in-up" data-aos-duration="1000">
      <h2>TIM IPAKET</h2>
   </div>
   <div class="container text-center" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500"
      data-aos-offset="270">
      <div class="gambar-slide">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" id="carusel">
               <div class="carousel-item active" data-bs-interval="3000">
                  <img src="/img/ceo-zaqi.jpg" alt="">
                  <h3>Zaqi Nur Rabbani</h3>
                  <p>Chief Executive Officer (CEO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cmo-rendi.jpg" alt="">
                  <h3>Rendi Nurhidayat </h3>
                  <p>Chief Oprating Officer (COO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-saski.png" alt="">
                  <h3>Saski Saskiya Rahmawan</h3>
                  <p>Sekretaris</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-fitri.jpg" alt="">
                  <h3>Fitri Novianti</h3>
                  <p>Sekretaris</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-dini.png" alt="">
                  <h3>Dini Yolani</h3>
                  <p>Sekretaris</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-subhan.jpg" alt="">
                  <h3>Subhan Fadilah</h3>
                  <p>Chief Technical Officer (CTO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-dimas.jpg" alt="">
                  <h3>Dimas Prastya</h3>
                  <p>Chief Technical Officer (CTO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-aip.jpg" alt="">
                  <h3>Aip Toni Firmansyah</h3>
                  <p>Chief Technical Officer (CTO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-nazar.jpg" alt="">
                  <h3>Nazar Khaidar Ramdani</h3>
                  <p>Chief Technical Officer (CTO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-ihsan.jpeg" alt="">
                  <h3>Ihsan Kamil Restati</h3>
                  <p>Chief Technical Officer (CTO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cto-erin.jpeg" alt="">
                  <h3>Cheptrin Augustin </h3>
                  <p>Chief Technical Officer (CTO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cmo-imam.jpg" alt="">
                  <h3>Imam Ramdan</h3>
                  <p>Chief Marketing Officer (CMO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cmo-rapli.jpeg" alt="">
                  <h3>Rafly Maulana</h3>
                  <p>Chief Marketing Officer (CMO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cmo-siska.jpg" alt="">
                  <h3>Siska Nurmala</h3>
                  <p>Chief Marketing Officer (CMO)</p>
               </div>
               <div class="carousel-item" data-bs-interval="3000">
                  <img src="/img/cmo-amelia.jpg" alt="">
                  <h3>Amelia Maharani</h3>
                  <p>Chief Marketing Officer (CMO)</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="text-center mt-3" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="50">
      <h5>"Belajarlah dari sebuah kegagalan yang membuatmu sukses"</h5>
      <p>-parapekerjakeras-</p>
   </div>
</div>
<!-- akhir elemen created by -->

<!-- informasi -->
<div class="informasi mb-5 mt-5" id="informasi">
   <div class="text-center mb-4" data-aos="zoom-in-up" data-aos-duration="1000">

   </div>

</div>

<!-- elemen footer -->
<footer>
   <div class="footer-atas" id="footer-atas">
      <div class="container">
         <div class="row">
            <div class="col-md-4" data-aos="fade-up-right" data-aos-duration="1000">
               <h3>Hubungi Kami</h3>
               <img src="/img/phone.svg" class="float-start">
               <p>+62 8999098812</p>
               <img src="/img/map.svg" class="float-start logo-f1">
               <p>JALAN PERINTIS KEMERDEKAAN,
                  BANJAR, KECAMATAN BANJAR,
                  KOTA BANJAR 46311
               </p>
               <img src="/img/mail.svg" class="float-start">
               <p>ipaketcompany@gmail.com</p>
            </div>
            <div class="col-md-4" data-aos="zoom-out-down" data-aos-duration="1000">
               <h3>INFORMASI</h3>
               <h4>TUTORIAL</h4>
               <h4>FAQ</h4>
               <h4>SYARAT DAN KETENTUAN</h4>
               <h4>KEBIJAKAN</h4>
            </div>
            <div class="col-md-4" data-aos="fade-up-left" data-aos-duration="1000">
               <h3>TEMUKAN KAMI</h3>
               <a href="https://wa.me/628999098812" target="_blank"><img src="/img/wa.png" class="wa"></a>
               <a href="https://www.instagram.com/ini.paket/" target="_blank"><img src="/img/ig.svg"></a>
               <a href="https://www.youtube.com/channel/UCW7fRcWuScEn4cJ3GRM2C8w" target="_blank"><img
                     src="/img/yt.svg"></a>
            </div>
         </div>
      </div>
   </div>
   <div class="footer text-center mt-1">
      <a>© Copyright | Ipaket Project 2021</a>
   </div>
</footer>
<!-- akhir elemen footer -->

<!-- Infromasi -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center fw-bold" id="exampleModalLabel">INFORMASI</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <?php foreach($informasi as $data) : ?>
         <div class="modal-body">
            <div class="accordion accord" id="accordionPanelsStayOpenExample">
               <div class="accordion-item ">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Apa itu Ipaket ?
                     </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                     aria-labelledby="panelsStayOpen-headingOne">
                     <div class="accordion-body">
                        <?= $data['pengertian'] ?>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Jam Kerja ?
                     </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                     aria-labelledby="panelsStayOpen-headingTwo">
                     <div class="accordion-body"><?= $data['jam_kerja'] ?></div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Paket Reguler ?
                     </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                     aria-labelledby="panelsStayOpen-headingThree">
                     <div class="accordion-body"><?= $data['paket_reguler'] ?></div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        Paket Cepat ?
                     </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                     aria-labelledby="panelsStayOpen-headingFour">
                     <div class="accordion-body"><?= $data['paket_cepat'] ?></div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        Paket Kilat ?
                     </button>
                  </h2>
                  <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                     aria-labelledby="panelsStayOpen-headingFive">
                     <div class="accordion-body"><?= $data['paket_kilat'] ?></div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapsesix">
                        Harga ?
                     </button>
                  </h2>
                  <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse"
                     aria-labelledby="panelsStayOpen-headingsix">
                     <div class="accordion-body"><?= $data['harga'] ?></div>
                  </div>
               </div>
            </div>
         </div>
         <?php endforeach ?>
      </div>
   </div>
</div>
<?= $this->endSection() ?>