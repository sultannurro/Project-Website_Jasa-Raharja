@extends('layouts.master')
@section('content')
    <style>
@media (max-width: 768px) {
    .jumbotron {
        padding: 1rem; /* Padding jumbotron yang lebih kecil pada perangkat mobile */
    }

    .jumbotron h1 {
        font-size: 2rem; /* Ukuran font untuk heading pada perangkat mobile */
    }

    .jumbotron p {
        font-size: 1rem; /* Ukuran font untuk paragraf pada perangkat mobile */
    }
}        
/* Responsivitas untuk perangkat mobile */
@media (max-width: 768px) {
    .carousel-caption p {
        font-size: 14px; /* Ukuran font untuk perangkat mobile */
    }
}        
    table {
        font-family: 'Roboto', sans-serif;
    }        
/* Add this to your CSS file */
@media (max-width: 768px) {
    .team-style1 {
        flex-direction: column;
        align-items: center;
    }
    .team-info {
        text-align: center;
    }
    .team-info h3 {
        font-size: 18px;
    }
    .team-info span {
        font-size: 12px;
    }
    .team-overlay {
        padding: 13px;
    }
    .team-overlay h3 {
        font-size: 13px;
    }
    .team-overlay p {
        font-size: 13px;
    }
    .team-overlay a  {
        font-size: 10px;
        padding: 10px 10px;
    }
}     

    #accordionExample {
    overflow: hidden;
    transition: all 0.1s ease-out;
    }
    #toggleAccordionBtn i {
        transition: transform 0.3s ease;
        float: right;
        margin-top: 4px;
    }

    #toggleAccordionBtn i.fa-chevron-up {
        transform: rotate(360deg);
    }
/* Container utama yang membungkus carousel */
.carousel-wrapper {
    display: flex;
    justify-content: center; /* Memusatkan carousel secara horizontal */
    width: 100%;
}

/* Carousel container */
.carousel-container {
    width: calc(80% - 100px); /* Mengurangi lebar untuk margin kiri dan kanan pada desktop */
    overflow: hidden; /* Menghindari gambar keluar dari batas container */
    margin: 0 auto; /* Memastikan carousel berada di tengah secara horizontal */
    margin-top: 20px;
}

/* Carousel item */
.carousel-item {
    position: relative;
    width: 100%;
    height: auto;
}

.carousel-item img {
    width: 100%;
    height: auto;
    object-fit: cover; /* Mengatur gambar agar menutupi area tanpa distorsi */
}

/* Carousel controls */
.carousel-control-prev,
.carousel-control-next {
    filter: invert(30%); /* Opsional: untuk membuat kontrol lebih terlihat di gambar gelap */
}

/* Responsivitas untuk perangkat mobile */
@media (max-width: 768px) {
    .carousel-wrapper {
        padding: 0 10px; /* Menambahkan sedikit margin kiri dan kanan pada perangkat mobile */
    }

    .carousel-container {
        width: calc(100% - 20px); /* Mengurangi lebar untuk margin kiri dan kanan pada perangkat mobile */
    }

    .carousel-item img {
        object-fit: contain; /* Atur gambar agar sepenuhnya terlihat dalam container */
    }
}

    </style>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">    
<div class="container-fluid position-relative p-0">
            <!-- Carousel Start -->
            <div class="carousel-header">

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="images/gedung_jr.JPG" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">JASA RAHARJA</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Keamanan di Jalan, Perlindungan di Tangan</h1>
                                    <p class="mb-5 text-white">Berkendara dengan aman adalah kunci untuk perjalanan yang menyenangkan dan bebas dari rasa khawatir. 
            Temukan berbagai tips keselamatan berkendara yang efektif dan panduan lengkap tentang penggunaan helm yang benar. 
            Kami hadir untuk memastikan Anda mendapatkan informasi yang dibutuhkan agar selalu aman di jalan. 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#about-section">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>

        <!-- About Start -->
        <div class="jumbotron" id="about-section">
    <div class="container">
        <h1 class="display-3">Jasa Raharja</h1>
        <p>
            Jasa Raharja merupakan sebuah sebuah bidang usaha perusahaan yang melaksanakan Asuransi Kecelakaan 
            penumpang alat angkutan umum dan asuransi tanggung jawab menurut hukum terhadap pihak ketiga sebagaimana diatur 
            di dalam UU No. 33 dan 34 tahun 1964.
            <br>
        </p>
        <div class="container mt-3 p-0">
            <button id="toggleAccordionBtn" class="btn btn-primary text-center mb-3">
                Learn More
                <i class="fas fa-chevron-down float-right ms-2"></i>
            </button>

            <div id="accordionExample" style="display: none;">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                        <h2>Prosedur Pengajuan Santunan</h2>
        <p><strong>Berdasarkan Peraturan Menteri Keuangan RI No.15&16/PMK.010/2017</strong></p>
        <h3>Jenis Santunan dan Besarannya:</h3>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>Jenis Santunan</th>
                                        <th scope="col"><strong>Darat/Laut (Rp)</th>
                                        <th scope="col"><strong>Udara (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider table-divider-color">
                                    <tr>
                                        <th scope="row">Meninggal Dunia</th>
                                            <td>50.000.000,-</td>
                                            <td>50.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cacat Tetap (Maksimal)</th>
                                            <td>50.000.000,-</td>
                                            <td>50.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Perawatan (Maksimal)</th>
                                            <td>20.000.000,-</td>
                                            <td>25.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Penguburan (Tanpa Ahli Waris)</th>
                                            <td>4.000.000,-</td>
                                            <td>4.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Biaya P3K</th>
                                            <td>1.000.000,-</td>
                                            <td>1.000.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Biaya Ambulance</th>
                                            <td>500.000,-</td>
                                            <td>500.000,-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <h3>Ahli Waris dan Kadaluarsa Santunan:</h3>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>Ahli Waris</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Janda/Duda yang sah</td>
 
                                    </tr>
                                    <tr>
                                        <td>Anak-anak yang sah</td>

                                    </tr>
                                    <tr>
                                        <td>Orang tua yang sah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col"><strong>Kadaluarsa</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Permintaan diajukan lebih dari 6 bulan setelah kecelakaan.</td>
                            </tr>
                            <tr>
                                <td>Tidak dilakukan penagihan dalam 3 bulan setelah persetujuan Jasa Raharja.</td>
                            </tr>
                        </tbody>
                    </table>
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
<div class="container">
    <div class="row position-relative">
        <div class="col-12">
            <h1>Layanan Edukasi</h1>
        </div>
        <div class="col-12 mb-3 text-content">
            Pelajari pentingnya keselamatan di jalan dengan memahami penggunaan helm, rambu lalu lintas, lampu lalu lintas, dan kelengkapan surat-surat berkendara. 
            Edukasi yang tepat untuk memastikan Anda selalu aman dan mematuhi peraturan saat berkendara.
        </div>        
        <div class="col-6 col-md-3 mt-1-9">
            <div class="team-style1 text-center">
                <img src="{{ asset('images/hel_icntr.png') }}" class="border-radius-5" alt="...">
                <div class="team-info">
                    <h3 class="text-primary mb-1 h5">Penggunaan <br>Helm</h3>
					<span class="font-weight-600 text-secondary">Ketahui Penggunaan Helm yang Baik</span>
                </div>
                <div class="team-overlay">
                    <div class="d-table h-100 w-100">
                        <div class="d-table-cell align-middle">
                            <p class="text-white mb-0 fs-6 " style="text-align: left">Untuk mengetahui tata cara penggunaan helm dengan baik dapat klik tombol dibawah ini</p>
                            <a id="toggleAccordionBtn" class="btn btn-primary text-center mb-3 mt-3" href="/helm">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mt-1-9">
            <div class="team-style1 text-center">
                <img src="{{ asset('images/warn_icn.png') }}" class="border-radius-5" alt="...">
                <div class="team-info">
                    <h3 class="text-primary mb-1 h5">Rambu <br>Lalu Lintas</h3>
                    <span class="font-weight-600 text-secondary">Pelajari Tentang Rambu Lalu Lintas</span>
                </div>
                <div class="team-overlay">
                    <div class="d-table h-100 w-100">
                        <div class="d-table-cell align-middle">
                            <p class="text-white mb-0 fs-6" style="text-align: left">Untuk mempelajari dan mengenali rambu-rambu lalu lintas dapat menekan tombol di bawah ini.</p>
                            <a id="toggleAccordionBtn" class="btn btn-primary text-center mb-3 mt-3" href="/rambu">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mt-1-9">
            <div class="team-style1 text-center">
                <img src="{{ asset('images/tl_icn.png') }}" class="border-radius-5" alt="...">
                <div class="team-info">
                    <h3 class="text-primary mb-1 h5">Lampu <br>Lalu Lintas</h3>
                    <span class="font-weight-600 text-secondary">Pelajari Mengenai Lampu Lalu Lintas</span>
                </div>
                <div class="team-overlay">
                    <div class="d-table h-100 w-100">
                        <div class="d-table-cell align-middle">
                            <p class="text-white mb-0 fs-6" style="text-align: left">Untuk mengetahui dan mempelajari lebih lanjut mengenai lampu lalu lintas dapat menekan tombol di bawah.</p>
                            <a id="toggleAccordionBtn" class="btn btn-primary text-center mb-3 mt-3" href="/lampu">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mt-1-9">
            <div class="team-style1 text-center">
			<img src="{{ asset('images/card_icn.png') }}" class="border-radius-5" alt="...">
                <div class="team-info">
                    <h3 class="text-primary mb-1 ">Kelengkapan <br>Berkendara</h3>
                    <span class="font-weight-600 text-secondary">Ketahui Surat-Surat Berkendara</span>
                </div>
                <div class="team-overlay">
                    <div class="d-table h-100 w-100">
                        <div class="d-table-cell align-middle">
                            <p class="text-white mb-0 fs-6" style="text-align: left">Untuk mengetahui apa saja kelengkapan berkendara yang harus di bawa saat mengemudi dapat menekan tombol di bawah.</p>
                            <a id="toggleAccordionBtn" class="btn btn-primary text-center mb-3 mt-3" href="/kelengkapan">
                                Learn More
                            </a>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- About End -->
        <div class="container">
  <div class="row">
    <div class="col-12">
        <h1>Tips and Trik Keselamatan</h1>
    </div>
    <div class="col-12 text-content">
        Dapatkan panduan lengkap untuk menjaga keselamatan Anda di jalan. 
        Dari persiapan sebelum mudik, hingga menghadapi situasi tak terduga seperti jalan licin atau kemacetan, 
        kami hadir untuk membantu Anda tetap aman dan nyaman selama berkendara.
    </div>
  </div>
</div>
<!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade carousel-container small-carousel" data-mdb-ride="carousel" data-mdb-carousel-init>
    <!-- Indicators -->
    <div class="carousel-indicators p-2">
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <!-- Inner -->
    <div class="carousel-inner mb-4 rounded-5 shadow-4-strong">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{ asset('images/Tips & Trik Page 1 (FIX).png') }}" class="d-block w-100" />
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('images/Tips & Trik Page 2 (FIX).png') }}" class="d-block w-100" />
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('images/Tips & Trik Page 3 (FIX).png') }}" class="d-block w-100" />  
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('images/Tips & Trik Page 4 (FIX).png') }}" class="d-block w-100" />  
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

        <script>
        function toggleAccordion() {
            var accordion = document.getElementById("accordionExample");
            if (accordion.style.display === "none") {
                accordion.style.display = "block";
            } else {
                accordion.style.display = "none";
            }
        }

        // Pastikan DOM sudah dimuat sebelum menambahkan event listener
        document.addEventListener('DOMContentLoaded', function() {
            var toggleButton = document.querySelector('button[onclick="toggleAccordion()"]');
            if (toggleButton) {
                toggleButton.addEventListener('click', toggleAccordion);
            }
        });
        </script>
        <script>
        $(document).ready(function() {
            $("#toggleAccordionBtn").click(function() {
                $("#accordionExample").slideToggle();
                
                // Toggle icon
                var icon = $(this).find("i");
                if (icon.hasClass("fa-chevron-down")) {
                    icon.removeClass("fa-chevron-down").addClass("fa-chevron-up");
                } else {
                    icon.removeClass("fa-chevron-up").addClass("fa-chevron-down");
                }
            });
        });
        </script>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</body>
@endsection