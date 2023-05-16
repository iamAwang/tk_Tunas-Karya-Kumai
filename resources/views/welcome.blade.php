<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tk Kumai</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('photo/ppp.png') }}" rel="icon">
    <link href="{{ asset('photo/ppp.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="container d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('photo/ppp.png') }}" alt="">
                <h1>Tk Tunas Karya Kumai<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#visi-misi">Visi Misi</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#informasi">Informasi</a></li>
                    <li><a href="#guru">Guru</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#kontak">Kontak</a></li>
                    <li>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="btn-book-a-table"
                                    style="background-color: #FFB4B4">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn-book-a-table"
                                    style="background-color: #FFB4B4">Log in</a>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn-book-a-table"  style="background-color: #FFB4B4">Register</a>
                                @endif --}}
                            @endauth
                        @endif
                    </li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= Home Section ======= -->
    <section id="home" class="hero d-flex align-items-center section-bg" style="background-color: #FFB4B4">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Sejarah Berdirinya</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Certa Sejarah berdiri nya Yayasan Tk Tunas Karya Kumai, dimulai dari tahun
                        1986-04-12, yayassan ini didirakn untuk mencerdaskan anak di yang ingin melanjutkan ke sekolah dasar ...
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Formulir Pendaftaran</a>
                        {{-- <video >
                            <source src="{{asset("photo/kepalasekolah.mp4")}}" class="glightbox btn-watch-video d-flex align-items-center" type="video/mp4">
                                <i class="bi bi-play-circle"></i><span>Watch Video</span>
                        </video> --}}
                        <a href="{{ asset('photo/kepalasekolah.mp4') }}"
                            class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-play-circle"></i><span>Watch Video</span>
                        </a>
                    </div>
                    {{-- <video class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <source src="{{asset("photo/kepalasekolah.mp4")}}" class="glightbox btn-watch-video d-flex align-items-center" type="video/mp4">
                            <i class="bi bi-play-circle"></i><span>Watch Video</span>
                    </video> --}}
                </div>
                <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start " >
                    <img src="{{ asset('photo/profil3.jpeg') }}" style="border-radius: 24px" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Home Section -->

    <main id="main">

        <!-- ======= Visi Misi Section ======= -->
        <section id="visi-misi" class="about ">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>VISI MISI</h2>
                    <p><span>VISI & MISI</span> TK TUNAS KARYA KUMAI</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url({{ asset('photo/ccc.jpeg') }}) ;" data-aos="fade-up"
                        data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Syawaliah,S.Pd.AUD</h4>
                            <p>Kepala Sekolah</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Visi TK Tunas Karya Kumai
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> #</li>
                                <li><i class="bi bi-check2-all"></i> #</li>
                                <li><i class="bi bi-check2-all"></i> #</li>
                            </ul>
                            <p>
                                Misi TK Tunas Karya Kumai
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> #</li>
                                <li><i class="bi bi-check2-all"></i> #</li>
                                <li><i class="bi bi-check2-all"></i> #</li>
                            </ul>

                            <div class="position-relative mt-4">
                                <img src="{{ asset('photo/ccc.jpeg') }}" class="img-fluid" alt="">
                                <a href="{{ asset('photo/video.mp4') }}" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Visi Misi Section -->

        <!-- ======= Why Us Section ======= -->
        {{-- <section id="why-us" class="why-us section-bg" style="background-color: #C0DBEA">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100" style="background-color: #C0DBEA">
                        <div class="why-box" style="background-color: #FFB4B4">
                            <h3>Why Choose Yummy?</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                                optio ad corporis.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">
                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-house-door"></i>
                                    <h4>kelas A</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                        aliquip
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-house-door"></i>
                                    <h4>Kelas B</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Labore consequatur incidid dolore</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div><!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section --> --}}

        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Identitas Sekolah</h3>
                            <p>
                                NPSN : 30204774 <br>
                                Status : Swasta <br>
                                Bentuk Pendidikan : TK <br>
                                Status Kepemilikan : Yayasan <br>
                                {{-- SK Pendirian Sekolah : 06/KPTS-CM/I/2014 <br> --}}
                                Tanggal SK Pendirian : 2014-01-01 <br>
                                SK Izin Operasional : 10 TAHUN 2016 <br>
                                {{-- Tanggal SK Izin Operasional : 2016-01-25 --}}
                            </p>
                            <div class="text-center">
                                <a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/6B2DB7FC-4C0F-41C5-A64D-0DB774C5B61F"
                                    class="more-btn" target="blank">Learn More <i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Kurikulum</h4>
                                    <p>Kurikulum yang digunakan adalah Kurikulum Merdeka, sejak tahun 2023</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Model Pembelajaran</h4>
                                    <p>Model pembelajaran yang digunakan adalah pembelajaran berbasis ...</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-gem"></i>
                                    <h4>Target Pembelajaran</h4>
                                    <p>Target pembelajaran yang ingin dicapai adalah ...</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="zoom-out">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Guru</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="19" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Siswa Kelas A</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Siswa Kelas B</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="37" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Total Siswa</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Profil Section ======= -->
        <section id="profil" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>PROFIL</h2>
                    <p><span>PROFIL</span> TK TUNAS KARYA KUMAI</p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Prestasi</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Fasilitas</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    {{-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Lunch</h4>
                        </a>
                    </li><!-- End tab nav item --> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Dinner</h4>
                        </a>
                    </li><!-- End tab nav item --> --}}

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>SISWA</p>
                            <h3>PRESTASI</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('prestasi/prestasi.jpg') }}" class="glightbox"><img
                                        src="{{ asset('prestasi/prestasi.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Lomba Mewarnai</h4>
                                <p class="ingredients">
                                    yang diadakan oleh
                                </p>
                                <p class="price">
                                    JAUZAA STATION
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('prestasi/prestasi2.png') }}" class="glightbox"><img
                                        src="{{ asset('prestasi/prestasi2.png') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Lomba Mewarnai</h4>
                                <p class="ingredients">
                                    tingkat
                                </p>
                                <p class="price">
                                    KELOMPOK A
                                </p>
                            </div><!-- Menu Item -->

                            {{-- <div class="col-lg-4 menu-item">
                                <a href="{{asset("prestasi/prestasi-ortu.jpg")}}" class="glightbox"><img
                                        src="{{asset("prestasi/prestasi-ortu.jpg")}}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Lomba Mewarnai</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item --> --}}

                            {{-- <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item --> --}}

                            {{-- <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item --> --}}

                            {{-- <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item --> --}}

                        </div>
                    </div><!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>SEKOLAH</p>
                            <h3>FASILITAS</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fasilitas/kelass.jpg') }}" class="glightbox"><img
                                        src="{{ asset('fasilitas/kelass.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Ruang Kelas</h4>
                                <p class="ingredients">
                                    jumlah ruang kelas
                                </p>
                                <p class="price">
                                    2
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fasilitas/mainan.jpg') }}" class="glightbox"><img
                                        src="{{ asset('fasilitas/mainan.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Taman Bermain</h4>
                                <p class="ingredients">
                                    jumlah mainan
                                </p>
                                <p class="price">
                                    8
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fasilitas/p3k.jpg') }}" class="glightbox"><img
                                        src="{{ asset('fasilitas/p3k.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Kotak P3K</h4>
                                <p class="ingredients">
                                    jumlah kotak p3k
                                </p>
                                <p class="price">
                                    3
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fasilitas/toilet.jpg') }}" class="glightbox"><img
                                        src="{{ asset('fasilitas/toilet.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Toilet</h4>
                                <p class="ingredients">
                                    jumlah toilet
                                </p>
                                <p class="price">
                                    1
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fasilitas/keran.jpg') }}" class="glightbox"><img
                                        src="{{ asset('fasilitas/keran.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Keran Air</h4>
                                <p class="ingredients">
                                    jumlah keran air
                                </p>
                                <p class="price">
                                    3
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fasilitas/komputer.jpg') }}" class="glightbox"><img
                                        src="{{ asset('fasilitas/komputer.jpg') }}" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Komputer & Printer</h4>
                                <p class="ingredients">
                                    jumlah komputer & printer
                                </p>
                                <p class="price">
                                    1
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    {{-- <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Lunch</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content --> --}}

                    {{-- <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Dinner</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid"
                                        alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="price">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Dinner Menu Content --> --}}

                </div>

            </div>
        </section><!-- End Profil Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimoni</h2>
                    <p>APA YANG MEREKA <span>KATAKAN</span> TENTANG TK TUNAS KARYA KUMAI</p>
                </div>

                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                #
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>
                                                Pusani Yanti Ningsih, S.Pd
                                            </h3>
                                            {{-- <h4>Ceo &amp; Founder</h4> --}}
                                            <h4>Ketua Gugus Asoka Kecamatan Kumai</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/ccc.jpeg') }}" class="img-fluid testimonial-img"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                #
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Mei Andayani, S.Pd</h3>
                                            <h4>Ketua IGTKI</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/kepalasekolah.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Saya senang menjadi salah satu orang tua yang mengirimkan anaknya ke TK
                                                Tunas Karya Kumai, karena dukungan dari dewan guru TK Tunas Karya Kumai,
                                                anak saya mendapatkan beberapa juara lomba mewarnai tingkat kabupaten
                                                dan kecamatan. Sekali lagi, terimakasih bunda-bunda TK Tunas Karya
                                                Kumai.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Nadziroh</h3>
                                            <h4>Orang Tua Nurul Ibnatu Abidah</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill">
                                                </i>
                                                <br>
                                                <a href="{{ asset('photo/kepalasekolah.mp4') }}"
                                                    class="glightbox btn-watch-video d-flex align-items-center">
                                                    <i class="bi bi-play-circle" style="color: black"></i><span>Watch Video</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/testimoni2.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                                                cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-4.jpg"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Informasi Section ======= -->
        <section id="informasi" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Informasi</h2>
                    <p><span>Informasi</span> Kegiatan</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-1.jpg)">
                            <h3>Penerimaan Peserta Didik Baru</h3>
                            <div class="price align-self-start">2023/2024</div>
                            <p class="description">
                               pada tahun ini sekolah kita membuka pendaftaran pada bulan juni
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-2.jpg)">
                            <h3>Private Parties</h3>
                            <div class="price align-self-start">$289</div>
                            <p class="description">
                                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo
                                vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url(assets/img/events-3.jpg)">
                            <h3>Birthday Parties</h3>
                            <div class="price align-self-start">$499</div>
                            <p class="description">
                                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam.
                                Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                            </p>
                        </div><!-- End Event item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Informasi Section -->

        <!-- ======= Guru Section ======= -->
        <section id="guru" class="chefs section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>GURU</h2>
                    <p><span>BUNDA-BUNDA</span> TK TUNAS KARYA KUMAI</p>
                </div>

                <div class="row gy-4">
                    {{-- @php
                    $no=$pegawais->FirstItem()
                @endphp --}}
                    {{-- @foreach ($pegawais as $pegawai) --}}
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="{{ asset('photo/kepalasekolah.jpeg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Syarwina, S.Pd.AUD</h4>
                                <span>Guru Kelas A</span>
                                {{-- <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut.
                                    Ipsum exercitationem iure minima enim corporis et voluptate.</p> --}}
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->
                    {{-- @endforeach --}}
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4> Siti Walnian, A.Md</h4>
                                <span>GURU KELAS B</span>
                                {{-- <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima
                                    suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p> --}}
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://www.facebook.com/imalizafathonah.anwari?mibextid=ZbWKwL"
                                        target="blank"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/lizasahudi?igshid=MzRlODBiNWFlZA=="
                                        target="blank"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Imaliza Fathonah Anwari</h4>
                                <span>GURU PENDAMPING</span>
                                {{-- <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt.
                                    Voluptates enim aut architecto porro aspernatur molestiae modi.</p> --}}
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                </div>

            </div>
        </section><!-- End Guru Section -->

        <!-- ======= Formulir Pendaftaran Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Formulir Pendaftaran</h2>
                    <p>FORMULIR <span>PENDAFTARAN</span> PESERTA DIDIK BARU</p>
                </div>

                <div class="row g-0">

                    <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"
                        data-aos="zoom-out" data-aos-delay="200"></div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4">
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="tempat-lahir" id="tempat-lahir"
                                        placeholder="Tempat Lahir" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="date" class="form-control" id="date"
                                        placeholder="Tanggal Lahir" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="agama" id="agama"
                                        placeholder="Agama" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        placeholder="Alamat" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="number" class="form-control" name="nomor-hp" id="nomor-hp"
                                        placeholder="No. Hp Orang Tua" data-rule="minlen:1"
                                        data-msg="Please enter at least 1 chars">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Keterangan"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Data Anda sudah terkirim. Kami akan menghubungi Anda kembali
                                    lewat no hp yang tertera untuk mengkonfirmasi pendaftaraan anak Anda. Terima Kasih!
                                </div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim</button></div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>

            </div>
        </section><!-- End Formulir Pendaftaran Section -->

        <!-- ======= Galeri Section ======= -->
        <section id="galeri" class="gallery section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>GALERI</h2>
                    <p><span>GALERI</span> TK TUNAS KARYA KUMAI</p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg"
                                    class="img-fluid" alt=""></a></div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->



        <!-- ======= Kontak Section ======= -->
        <section id="kontak" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Kontak</h2>
                    <p>Butuh Bantuan? <span>Hubungi Kami</span></p>
                </div>

                <div class="mb-3">
                    {{-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11945.80878991808!2d111.72305002984818!3d-2.7320633341805984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08fb51e0c62bbf%3A0xf4c7210555b1a400!2sTK%20Tunas%20Karya%20Kelurahan%20Candi!5e0!3m2!1sid!2sid!4v1683775280122!5m2!1sid!2sid"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jalan Madrasah <br>
                                    No. 402 <br>
                                    RT. 7 <br>
                                    RW. 2 <br>
                                    Kelurahan Candi <br>
                                    Kecamatan Kumai
                                </p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>tktunaskaryakumai@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telepon</h3>
                                <p>0822 5081 9383 <br> 0897 9712 322</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Jam Buka</h3>
                                <div><strong>Senin - Sabtu:</strong> 7AM - 10AM <br>
                                    <strong>Minggu:</strong> Tutup
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                <div class="row">
                  <div class="col-xl-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-xl-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form><!--End Contact Form --> --}}

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>Jalan Madrasah <br>
                            No. 402 <br>
                            RT. 7 <br>
                            RW. 2 <br>
                            Kelurahan Candi <br>
                            Kecamatan Kumai
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Hubungi</h4>
                        <p>
                            <strong>Telepon:</strong> 0897 9712 322 <br>
                            <strong>Email:</strong> tktunaskaryakumai@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Jam Buka</h4>
                        <p>
                            <strong>Senin - Sabtu: 7AM</strong> - 10AM<br>
                            Minggu: Tutup
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
                        <a href="https://www.facebook.com/tktunaskaryakumai.tktunaskaryakumai?mibextid=ZbWKwL"
                            class="facebook" target="blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/tktunaskaryakumai?igshid=NTc4MTIwNjQ2YQ==" class="instagram"
                            target="blank"><i class="bi bi-instagram"></i></a>
                        {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Redexc</span></strong>. TK Tunas Karya Kumai
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/" target="blank">BootstrapMade</a> Edited by Web &
                Programming <a href="https://lkpenter.com/" target="blank">Enter</a> | Kelompok 2
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
