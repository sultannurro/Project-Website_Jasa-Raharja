<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Travela - Tourism Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets_splash/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets_splash/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets_splash/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets_splash/css/style.css" rel="stylesheet">

    <!-- Include external CSS file -->
    <link href="css/home.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative p-0">
<nav id="navbar" class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm">
    <a href="/welcome" class="navbar-brand p-0">
        <img src="images/jrwhite2.webp" alt="Logo">
        <img src="images/bumnwhite.webp" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto py-0">
            <li class="nav-item"><a href="/welcome" id="nav-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/jrsafetyroad" id="nav-safety" class="nav-link">JR Safety Road</a></li>
            <li class="nav-item"><a href="/kuisioner" id="nav-kuisioner" class="nav-link">Kuisioner</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="nav-edukasi" data-bs-toggle="dropdown" aria-expanded="false">Layanan Edukasi</a>
                <ul class="dropdown-menu m-0">
                    <li><a href="/helm" id="nav-helm" class="dropdown-item fs-6">Penggunaan Helm</a></li>
                    <li><a href="/rambu" id="nav-rambu" class="dropdown-item fs-6">Rambu Lalu Lintas</a></li>
                    <li><a href="/lampu" id="nav-lampu" class="dropdown-item fs-6">Lampu Lalu Lintas</a></li>
                    <li><a href="/kelengkapan" id="nav-kelengkapan" class="dropdown-item fs-6">Kelengkapan Berkendara</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Sticky Navbar and Transparent Navbar with Logo Swap
    $(window).scroll(function () {
        const navbar = $('#navbar');
        const logo1 = $('.navbar-brand img:first-child');
        const logo2 = $('.navbar-brand img:last-child');
        const isMobile = $(window).width() < 992;

        if ($(this).scrollTop() > 45) {
            navbar.removeClass('transparent');
            navbar.addClass('sticky-top shadow-sm');
            navbar.css('background-color', 'white');

            if (!isMobile) {
                logo1.attr('src', 'images/jrblck.webp'); // Change to the black logo
                logo2.attr('src', 'images/logo_bumn_new.webp'); // Change to the new BUMN logo
            }
        } else {
            if (isMobile) {
                navbar.removeClass('transparent');
                navbar.css('background-color', 'white');
            } else {
                navbar.addClass('transparent');
                navbar.css('background-color', '');
                logo1.attr('src', 'images/jrwhite2.webp'); // Change back to the white logo
                logo2.attr('src', 'images/bumnwhite.webp'); // Change back to the white BUMN logo
            }
        }
    });

    // Ensure navbar starts transparent with initial logos
    $(document).ready(function () {
        const isMobile = $(window).width() < 992;

        if (!isMobile) {
            $('#navbar').addClass('transparent');
            $('.navbar-brand img:first-child').attr('src', 'images/jrwhite2.webp'); // Set initial white logo
            $('.navbar-brand img:last-child').attr('src', 'images/bumnwhite.webp'); // Set initial white BUMN logo
        } else {
            $('.navbar-brand img:first-child').attr('src', 'images/jrblck.webp'); // Set black logo for mobile
            $('.navbar-brand img:last-child').attr('src', 'images/logo_bumn_new.webp'); // Set BUMN logo for mobile
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Navbar link active state based on current URL
    $(document).ready(function () {
        var currentPath = window.location.pathname;
        $('.navbar-nav .nav-link').each(function () {
            var linkPath = $(this).attr('href');
            if (currentPath === linkPath) {
                $(this).addClass('active');
            }
        });
        $('.navbar-nav .dropdown-item').each(function () {
            var linkPath = $(this).attr('href');
            if (currentPath === linkPath) {
                $(this).closest('.dropdown').find('.nav-link').addClass('active');
                $(this).addClass('active');
            }
        });
    });

    // Close the navbar when clicking on a link
    $(document).ready(function() {
        $('.navbar-nav .nav-link').on('click', function() {
            $('#navbarCollapse').collapse('hide');
        });
    });

})(jQuery);
</script>


</body>