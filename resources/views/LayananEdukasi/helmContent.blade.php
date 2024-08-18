@extends('layouts.master')

@section('content')
<style>
@media (max-width: 768px) {
    .container.text-center.py-5 p {
        font-size: 14px; /* smaller font size for mobile devices */
    }
}
/* General Styles */
.carousel-container {
    max-width: 100%;
    margin: 20px auto;
}

.text-content {
    text-align: justify;
}

@media (min-width: 768px) {
    .carousel-container {
        max-width: 920px;
    }
    .text-content {
        column-count: 1;
    }
}

@media (max-width: 767px) {
    .carousel-container {
        margin-left: 15px;
        margin-right: 15px;
    }
    .text-content {
        column-count: 1;
    }
    .carousel-item img {
        height: 300px;
        object-fit: cover;
    }
}

@media (max-width: 575px) {
    .carousel-item img {
        height: 250px;
    }
}

/* Dark Modal Styling */
.modal-dialog.dark-modal .modal-content {
    background-color: #343a40;
    color: #f8f9fa;
}

.modal-dialog.dark-modal .modal-header {
    border-bottom-color: #495057;
}

.modal-dialog.dark-modal .btn-close {
    filter: invert(1) grayscale(100%) brightness(200%);
}

/* Fullscreen Modals at Various Breakpoints */
@media (max-width: 1199.98px) {
    .modal-fullscreen-xl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
}

@media (max-width: 991.98px) {
    .modal-fullscreen-lg-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
}

@media (max-width: 767.98px) {
    .modal-fullscreen-md-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }
}

@media (max-width: 575.98px) {
    .modal-fullscreen-sm-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }
    .modal-fullscreen-sm-down .modal-content {
        height: 45%;
        border: 0;
        border-radius: 0;
    }
}

/* Carousel Styling */
.shadow-carousel {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
}

.carousel-control-prev,
.carousel-control-next {
    width: 6%; /* Adjust this value as needed to make the arrows wider */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 200%; /* Adjust this value to scale the arrow icons */
}

/* Manual Button Alignment */
.manual-align {
    margin-top: 8px; /* Adjust this value to position the button vertically */
    margin-left: 15px; /* Adjust this value to position the button horizontally */
    margin-bottom: 20px;
}

/* Margin Adjustments */
.mx-auto.text-center.mb-5 {
    margin-bottom: 1rem; /* Kurangi jarak bawah */
}

/* Timeline Section Padding */
.timeline-section {
    padding-top: 2rem; /* Tambahkan padding atas jika diperlukan */
}

/* Icon Holder Styling */
.icon-holder .number {
    font-size: 1.5em;
    color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.container {
    width: 100%;
    max-width: 1200px; /* Sesuaikan dengan ukuran maksimal yang diinginkan */
    margin: 0 auto; /* Agar container berada di tengah */
    padding: 0 15px; /* Memberikan padding pada container */
}

.video-container {
    flex: 1;
    width: 100%; /* Video mengambil lebar penuh */
}

.video-container iframe {
    width: 100%;
    height: auto;
    aspect-ratio: 16 / 9; /* Menjaga rasio aspek video */
}

.text-content {
    flex: 1;
    padding-left: 20px; /* Memberikan jarak antara video dan teks */
}

/* Teks di sebelah kanan video pada layar besar */
@media (min-width: 768px) {
    .d-flex {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
    }
    .text-content {
        flex: 1;
    }
}

@media (max-width: 767px) {
    .d-flex {
        flex-direction: column; /* Mengatur ulang arah flex untuk layar kecil */
    }
    .video-container {
        margin-bottom: 20px; /* Memberikan jarak antara video dan teks pada layar kecil */
    }
    .text-content {
        padding-left: 0; /* Menghilangkan padding pada layar kecil */
        padding-top: 10px; /* Menambahkan jarak atas pada teks di layar kecil */
    }
}

/* Carousel Image Styling */
.carousel-item img {
    width: 100%;
    height: auto;
    object-fit: cover; /* Atur ini agar gambar memenuhi kontainer dengan proporsi yang benar */
}

/* Optional: Container Height Adjustment */
.carousel-inner {
    overflow: hidden;
}

.carousel-item {
    height: 450px; /* Sesuaikan dengan tinggi yang diinginkan */
}

@media (max-width: 767px) {
    .carousel-item {
    height: auto; /* Sesuaikan dengan tinggi yang diinginkan */
}    
    .carousel-item img {
        object-fit: contain; /* Sesuaikan dengan cara yang paling cocok untuk gambar */
    }
}

/* Gaya umum untuk teks */
.text-content {
    text-align: justify;
}

/* Accordion styling */
.accordion-button {
    background-color: #f8f9fa;
    color: #343a40;
}

.accordion-button:hover {
    background-color: #e2e6ea;
}

.accordion-body {
    font-size: 1rem;
}

</style>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">   
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Pentingnya Penggunaan Helm</h1>
        <p class="text-white"> Helm adalah perlengkapan wajib bagi pengendara motor, 
            melindungi kepala dari cedera serius dan mengurangi risiko kematian saat kecelakaan, 
            serta penting untuk keselamatan di jalan raya.
        </p>  
    </div>
</div>
<!-- Header End -->

<!-- Edukasi Start -->
<div class="container-fluid guide py-5" style="margin-top: -50px;">
    <div class="container py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h3 class="section-title px-3">Edukasi Helm</h3>
            <h5 class="mb-0">Pelajari bagaimana memilih dan menggunakan helm dengan tepat</h5>
        </div>
    </div>
</div>
<!-- Edukasi End -->


<!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade carousel-container shadow-carousel" data-mdb-ride="carousel" data-mdb-carousel-init style="margin-top: -65px; margin-bottom: 50px">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="3" aria-label="Slide 4"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="{{ asset('images/Helm Page 1.png') }}" class="d-block w-100" />
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{ asset('images/Helm Page 2.png') }}" class="d-block w-100"/>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{ asset('images/Helm Page 3.png') }}" class="d-block w-100" />
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{ asset('images/Helm Page 4.png') }}" class="d-flex w-100" />
    </div>
    
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->

<!-- Manfaat -->
<section class="timeline-section section-padding" id="section_3">
  <div class="section-overlay"></div>
    <div class="container text-center py-5" style="margin-top: -40px;">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h3 class="subscribe-title px-3">Manfaat <br>Penggunaan Helm</h3>
        </div>
    </div>
      <div class="col-lg-10 col-12 mx-auto" style="margin-top: -40px;">
        <div class="timeline-container">
          <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
            <div class="list-progress">
              <div class="inner"></div>
            </div>

            <li>
              <h4 class="text-white mb-3">1. Melindungi Kepala dari Cedera Serius</h4>
              <p class="text-white">Helm dirancang untuk menyerap benturan dan melindungi kepala dari cedera serius, termasuk cedera otak traumatis yang bisa terjadi akibat kecelakaan.</p>
              <div class="icon-holder">
                <span class="number">1</span>
              </div>
            </li>

            <li>
              <h4 class="text-white mb-3">2. Mengurangi Risiko Kematian</h4>
              <p class="text-white">Studi menunjukkan bahwa helm dapat mengurangi risiko kematian akibat kecelakaan lalu lintas. Penggunaan helm secara signifikan menurunkan kemungkinan cedera fatal pada kepala.</p>
              <div class="icon-holder">
                <span class="number">2</span>
              </div>
            </li>

            <li>
              <h4 class="text-white mb-3">3. Meningkatkan Visibilitas</h4>
              <p class="text-white">Helm dengan warna terang atau reflektif dapat membuat pengendara lebih mudah terlihat oleh pengguna jalan lain, terutama di malam hari atau kondisi cahaya rendah.</p>
              <div class="icon-holder">
                <span class="number">3</span>
              </div>
            </li>

            <li>
              <h4 class="text-white mb-3">4. Meningkatkan Kepatuhan Hukum</h4>
              <p class="text-white">Menggunakan helm adalah kewajiban hukum di banyak negara. Penggunaan helm membantu pengendara untuk mematuhi peraturan lalu lintas dan menghindari denda atau sanksi hukum.</p>
              <div class="icon-holder">
                <span class="number">4</span>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="video-container mb-3 mb-md-0" style="flex: 1;">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/7NWfz9HOThU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="section-about-title pe-3">Video</h3>
                <h5 class="mb-4">Tonton video selengkapnya</h5>
                <p class="mb-2">Video ini memberikan panduan tentang manfaat helm dalam melindungi keselamatan saat berkendara dan tips memilih helm yang tepat. Pelajari bagaimana helm dapat menyelamatkan nyawa dan mengurangi risiko cedera. Manfaat menonton video ini:</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kesadaran Keselamatan</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemilihan Helm yang Tepat</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Informasi Terpercaya</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Wawasan Standar Keamanan</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Panduan Praktis</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kesadaran Berkendara</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MDB JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
<script src="asset_manfaat/js/jquery.min.js"></script>
<script src="asset_manfaat/js/bootstrap.bundle.min.js"></script>
<script src="asset_manfaat/js/jquery.sticky.js"></script>
<script src="asset_manfaat/js/custom.js"></script>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</body
@endsection
