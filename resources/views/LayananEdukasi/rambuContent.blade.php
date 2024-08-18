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

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Pentingnya Rambu Lalu Lintas</h1>
        <p class="text-white"> Rambu lalu lintas adalah elemen wajib bagi pengendara,
        menjaga keselamatan dengan memberikan petunjuk yang jelas dan mengurangi risiko kecelakaan,
        serta penting untuk menjaga ketertiban di jalan raya.
        </p>  
    </div>
</div>
<!-- Header End -->

<!-- Edukasi Start -->
<div class="container-fluid guide py-5" style="margin-top: -50px;">
    <div class="container py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h3 class="section-title px-3">Edukasi Rambu Lalu Lintas</h3>
            <h5 class="mb-0">Pelajari bagaimana memahami dan mematuhi rambu lalu lintas dengan benar</h5>
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
      <img src="{{ asset('images/Rambu Page 1.png') }}" class="d-block w-100" />
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{ asset('images/Rambu Page 2.png') }}" class="d-block w-100"/>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{ asset('images/Rambu Page 3.png') }}" class="d-block w-100" />
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="{{ asset('images/Rambu Page 4.png') }}" class="d-flex w-100" />
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
            <h3 class="subscribe-title px-3">Manfaat Memahami Rambu Lalu Lintas</h3>
        </div>
    </div>
      <div class="col-lg-10 col-12 mx-auto" style="margin-top: -40px;">
        <div class="timeline-container">
          <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
            <div class="list-progress">
              <div class="inner"></div>
            </div>

            <li>
              <h4 class="text-white mb-3">1. Meningkatkan Keselamatan</h4>
              <p class="text-white">Memahami rambu lalu lintas membantu mencegah kecelakaan dengan memberikan informasi penting tentang aturan jalan dan potensi bahaya.</p>
              <div class="icon-holder">
                <span class="number">1</span>
              </div>
            </li>

            <li>
              <h4 class="text-white mb-3">2. Mengurangi Risiko Pelanggaran</h4>
              <p class="text-white">Dengan mengetahui arti rambu-rambu lalu lintas, Anda dapat menghindari pelanggaran yang dapat mengakibatkan denda atau sanksi hukum.</p>
              <div class="icon-holder">
                <span class="number">2</span>
              </div>
            </li>

            <li>
              <h4 class="text-white mb-3">3. Membantu Mengatur Arus Lalu Lintas</h4>
              <p class="text-white">Rambu lalu lintas memberikan petunjuk yang jelas untuk mengatur aliran kendaraan dan pejalan kaki, mengurangi kemacetan dan meningkatkan efisiensi lalu lintas.</p>
              <div class="icon-holder">
                <span class="number">3</span>
              </div>
            </li>

            <li>
              <h4 class="text-white mb-3">4. Meningkatkan Keteraturan di Jalan Raya</h4>
              <p class="text-white">Mematuhi rambu lalu lintas menciptakan ketertiban di jalan, memudahkan navigasi dan interaksi antara pengemudi dan pejalan kaki.</p>
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
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/-vA52_LX2go" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="section-about-title pe-3">Video</h3>
                <h5 class="mb-4">Tonton video selengkapnya</h5>
                <p class="mb-2">
                Video ini menjelaskan manfaat memahami rambu lalu lintas untuk keselamatan berkendara dan cara mematuhinya. Pelajari bagaimana rambu lalu lintas mencegah kecelakaan dan meningkatkan keteraturan jalan. Manfaat menonton video ini:</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kesadaran Keselamatan</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mengurangi Kecelakaan</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menghindari Pelanggaran</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Meningkatkan Keteraturan</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mempermudah Navigasi</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Kesadaran Komunitas</p>
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

@endsection
