
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

    <style>
        .flower {
            background: #FDF4F5;
            transform-origin: 50% 50%;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            box-shadow:
                -16px -16px 0 4px #C0DBEA,
                16px -16px 0 4px #C0DBEA,
                16px 16px 0 4px #C0DBEA,
                -16px 16px 0 4px #C0DBEA;
            animation: flowerkey 5s infinite ease-in-out;
        }

        .curved {
            background: #FFB4B4;

        }
        

        @keyframes flowerkey {
            0% {
                transform: rotate(0deg);
                box-shadow:
                    -16px -16px 0 4px #C0DBEA,
                    16px -16px 0 4px #C0DBEA,
                    16px 16px 0 4px #C0DBEA,
                    -16px 16px 0 4px #C0DBEA;
            }

            50% {
                transform: rotate(1080deg);
                box-shadow:
                    16px 16px 0 4px #C0DBEA,
                    -16px 16px 0 4px #C0DBEA,
                    -16px -16px 0 4px #C0DBEA,
                    16px -16px 0 4px #C0DBEA;
            }


        }
    </style>

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
                    <li><a href="#kontak">Kontak</a></li>

                    @if (Route::has('login'))
                        <li>
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ke Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>
                            @endauth
                        </li>
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-book-a-table">Register</a>
                            @endif
                        </li>
                    @endif
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
                    <div class="flower"></div>
                    <h2 data-aos="fade-up">Sejarah Berdirinya</h2>
                    <p data-aos="fade-up" data-aos-delay="100">TK Tunas Karya Kumai berdiri pada tahun 1985
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#feedback" class="btn-book-a-table">Feedback</a>
                        {{-- <video >
                            <source src="{{asset("photo/kepalasekolah.mp4")}}" class="glightbox btn-watch-video d-flex align-items-center" type="video/mp4">
                                <i class="bi bi-play-circle"></i><span>Watch Video</span>
                        </video> --}}
                        {{-- <a href="{{ asset('photo/kepalasekolah.mp4') }}"
                            class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-play-circle"></i><span>Watch Video</span>
                        </a> --}}
                        <a href=""
                            class="glightbox btn-watch-video d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100">
                                <path id="gisGlobeUsers0" fill="currentColor" stroke-dashoffset="188.976" stroke-linecap="round" stroke-linejoin="round" stroke-width="3.644" d="M49.947 0C22.354.03 0 22.406 0 50a50 50 0 0 0 20.404 40.21c-.265-2.031-.213-4.128.117-6.202a45.22 45.22 0 0 1-8.511-9.877h12.445c1.182-1.845 2.4-3.67 4.525-5c-1.245-5.1-2.006-10.716-2.146-16.631h1.346a18.653 18.653 0 0 1 1.93-5h-3.243c.212-5.935 1.043-11.554 2.363-16.63H47.5v8.888a13.75 13.75 0 0 1 5 1.804V30.87h19.195c.26.997.495 2.02.715 3.057a19.769 19.769 0 0 1 5.084-.117a76.416 76.416 0 0 0-.639-2.94h13.89a44.747 44.747 0 0 1 3.965 14.028c.58 5.049.591 10.975-1.246 16.771a45.007 45.007 0 0 1-2.286 6.478c1.128 1.187 2.494 2.309 3.867 3.454A50 50 0 0 0 100 50c0-27.614-22.386-50-50-50ZM52.5 5.682c5.268.896 10.302 5.236 14.268 12.437c1.278 2.321 2.42 4.927 3.408 7.75H52.5Zm-5 .197v19.99H30.75c.988-2.823 2.13-5.429 3.408-7.75C37.89 11.341 42.571 7.102 47.5 5.88ZM35.98 7.232c-2.324 2.352-4.41 5.22-6.203 8.475c-1.68 3.05-3.125 6.467-4.312 10.162H12.01c5.535-8.706 13.975-15.37 23.97-18.637Zm29.41.463c9.398 3.413 17.32 9.868 22.6 18.174H75.455c-1.184-3.695-2.627-7.112-4.307-10.162c-1.676-3.045-3.613-5.749-5.757-8.012ZM9.257 30.87h14.808c-1.245 5.162-2.008 10.76-2.203 16.631H5.072a44.79 44.79 0 0 1 4.184-16.63ZM5.072 52.5h16.762c.129 5.856.82 11.454 1.994 16.63H9.256A44.79 44.79 0 0 1 5.072 52.5Z" color="currentColor"/>
                                <path id="gisGlobeUsers1" fill="currentColor" fill-opacity="1" stroke="none" stroke-dasharray="none" stroke-dashoffset="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="4" stroke-opacity="1" stroke-width="3.621" d="M76 37.769c-8.285 0-15 6.716-15 15c0 8.284 6.715 15 15 15c8.283 0 15-6.716 15-15c0-8.284-6.717-15-15-15zm0 32.223c-16.57 0-24 7.431-24 24v2c.075 3.94 1.817 4.056 5.5 4h37c4.695-.004 5.532.005 5.5-4v-2c0-16.569-7.432-24-24-24z" opacity="1" vector-effect="none"/>
                                <path id="gisGlobeUsers2" fill="currentColor" fill-opacity="1" stroke="none" stroke-dasharray="none" stroke-dashoffset="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="4" stroke-opacity="1" stroke-width="2.966" d="M44 43.39c-6.787 0-12.291 5.504-12.291 12.292c0 6.787 5.504 12.289 12.291 12.289c6.787 0 12.29-5.502 12.29-12.29c0-6.787-5.503-12.29-12.29-12.29zm0 26.401c-13.575 0-19.664 6.09-19.664 19.664v1.639c.062 3.228 1.489 3.323 4.506 3.277h19.123c-.488-8.088 1.901-16.678 7.851-22.139c-3.012-1.646-6.925-2.441-11.816-2.441z" opacity="1" vector-effect="none"/>
                            </svg><span>About Us</span>
                        </a>
                    </div>

                    {{-- <video class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <source src="{{asset("photo/kepalasekolah.mp4")}}" class="glightbox btn-watch-video d-flex align-items-center" type="video/mp4">
                            <i class="bi bi-play-circle"></i><span>Watch Video</span>
                    </video> --}}
                </div>
                <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start ">
                    <img src="{{ asset('photo/profil3.jpeg') }}" style="border-radius: 24px" class="img-fluid"
                        alt="" data-aos="zoom-out" data-aos-delay="300">
                </div>

            </div>
        </div>
    </section><!-- End Home Section -->

    <div class="curved"><svg viewBox="0 0 1440 319">
            <path fill="#fff" fill-opacity="1"
                d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg></div>

    <main id="main">

        <!-- ======= Visi Misi Section ======= -->
        <section id="visi-misi" class="about ">
            <div class="container" data-aos="fade-up">
                <div class="flower"></div>
                <div class="section-header">
                    <h2>VISI MISI</h2>
                    <p><span>VISI & MISI</span> TK TUNAS KARYA KUMAI</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url({{ asset('photo/kepalasekolah.png') }}) ;" data-aos="fade-up"
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
                                <li><i class="bi bi-check2-all"></i> Membantu mengembangkan kemampuan anak dalam
                                    bersosialisasi dan menuju anak yang cerdas, mandiri dan berakhlak mulia.</li>
                                {{-- <li><i class="bi bi-check2-all"></i> #</li> --}}
                                {{-- <li><i class="bi bi-check2-all"></i> #</li> --}}
                            </ul>
                            <p>
                                Misi TK Tunas Karya Kumai
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Melatih kemampuan diri anak sesuai potensi yang
                                    mereka miliki dan tingkat perkembangannya.</li>
                                <li><i class="bi bi-check2-all"></i> Mengenalkan disiplin kepada anak sejak dini.</li>
                                <li><i class="bi bi-check2-all"></i> Membentuk pribadi yang mandiri dan berkualitas.
                                </li>
                                <li><i class="bi bi-check2-all"></i> Memiasakan anak hidup bersih, sehat dan teratur.
                                </li>
                                <li><i class="bi bi-check2-all"></i> Memberikan pelayanan kepada setiap pribadi tanpa
                                    perbedaan.</li>
                            </ul>

                            <div class="position-relative mt-4">
                                <img src="{{ asset('photo/kepalasekolah.png') }}" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=GfGTglVtkvI" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Visi Misi Section -->

       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" >
            <path fill="rgb(238, 238, 238)" fill-opacity="1" d="M0,64L130.9,128L261.8,128L392.7,64L523.6,192L654.5,320L785.5,288L916.4,224L1047.3,320L1178.2,288L1309.1,224L1440,256L1440,320L1309.1,320L1178.2,320L1047.3,320L916.4,320L785.5,320L654.5,320L523.6,320L392.7,320L261.8,320L130.9,320L0,320Z"></path>
          </svg>
        <!-- ======= Profil Section ======= -->
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
                                Tanggal SK Operasional : 25-01-2016 <br>
                                Akreditasi : C
                                {{-- No SK Izin Operasional : 10/2016 <br> --}}
                                {{-- Tanggal SK Izin Operasional : 2016-01-25 --}}
                            </p>
                            <div class="text-center">
                                <a href="https://dapo.kemdikbud.go.id/sekolah/782E7FD37A1612CC5A16" class="more-btn"
                                    target="blank">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Kurikulum Pembelajaran</h4>
                                    <p>Kurikulum yang digunakan adalah
                                        <a href="https://ayoguruberbagi.kemdikbud.go.id/rpp/modul-ajar-paud-tk-ra-kurikulum-merdeka-2022"
                                            target="_blank" style="color: grey" aria-label="go to website">Kurikulum
                                            Merdeka
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15%" height="15%"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M224 104a8 8 0 0 1-16 0V59.32l-66.33 66.34a8 8 0 0 1-11.32-11.32L196.68 48H152a8 8 0 0 1 0-16h64a8 8 0 0 1 8 8Zm-40 24a8 8 0 0 0-8 8v72H48V80h72a8 8 0 0 0 0-16H48a16 16 0 0 0-16 16v128a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-72a8 8 0 0 0-8-8Z" />
                                            </svg>
                                        </a> sejak tahun 2023
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Model Pembelajaran</h4>
                                    <p>Model pembelajaran yang digunakan adalah pembelajaran berbasis
                                        <a href="https://www.paud.id/4-model-pembelajaran-paud-pembelajaran-inovatif"
                                            target="_blank" style="color: grey" aria-label="go to website">kelompok
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="color: grey"><path d="M16 8v7.1L13.9 13l-4.1 3.9L7 14l4.1-3.9L8.9 8H16M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2m2 0h14v14H5V5Z"/></svg> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15%" height="15%"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M224 104a8 8 0 0 1-16 0V59.32l-66.33 66.34a8 8 0 0 1-11.32-11.32L196.68 48H152a8 8 0 0 1 0-16h64a8 8 0 0 1 8 8Zm-40 24a8 8 0 0 0-8 8v72H48V80h72a8 8 0 0 0 0-16H48a16 16 0 0 0-16 16v128a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-72a8 8 0 0 0-8-8Z" />
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-gem"></i>
                                    <h4>Target Pembelajaran</h4>
                                    <p>Mampu mengenal huruf, mengeja, membaca, dan berhitung sederhana
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Profil Section -->

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
                                    <div class="col-lg-6 text-center">
                                        <img src="{{ asset('photo/review5.png') }}" class="img-fluid cover-img"
                                            alt="">
                                    </div>

                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/review5.png') }}" class="img-fluid cover-cover-img"
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
                                                Menurut saya, TK Tunas Karya Kumai memiliki fasilitas yang cukup bagus,
                                                tingkat keamanan yang baik, untuk prestasi siswa dalam hal lomba
                                                mewarnai juga sudah diikuti,
                                                selain itu untuk tenaga pendidik sekarang juga sudah ada generasi muda
                                                sebagai bunda baru yang bisa untuk mempercepat perkembangan TK Tunas
                                                Karya Kumai.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Mei Andayani, S.Pd</h3>
                                            <h4>Ketua IGTKI</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/kepalasekolah.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                        <br>
                                        <div class="btn btn-danger">
                                            <a href="{{ asset('photo/kepalasekolah.mp4') }}"
                                                class="glightbox play-btn" style="color: white">
                                                <i class="bi bi-play-circle" style="color: white"></i>
                                                <span>
                                                    watch video
                                                </span>
                                            </a>
                                        </div>
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
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/testimoni2.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                        <br>
                                        <div class="btn btn-danger">
                                            <a href="{{ asset('photo/vidtest2.mp4') }}" class="glightbox play-btn"
                                                style="color: white">
                                                <i class="bi bi-play-circle" style="color: white"></i>
                                                <span>
                                                    watch video
                                                </span>
                                            </a>
                                        </div>
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
                                                Menurut saya, TK Tunas Karya Kumai sangat bagus dalam hal fasilitas
                                                karena ada mainan dan pagar yang tinggi,
                                                untuk hal prestasi juga sering mengikuti dan memenangkan lomba mewarnai,
                                                ruang kelas juga bagus karena gedungnya berdiri dengan kokoh,
                                                halamannya sangat bersih serta dalam hal sanitasi juga sangat bagus.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>
                                                Pusani Yanti Ningsih, S.Pd
                                            </h3>
                                            <h4>Ketua Gugus Asoka Kecamatan Kumai</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('photo/ccc.jpeg') }}" class="img-fluid testimonial-img"
                                            alt="">
                                        <br>
                                        <div class="btn btn-danger">
                                            <a href="{{ asset('photo/video.mp4') }}" class="glightbox play-btn"
                                                style="color: white">
                                                <i class="bi bi-play-circle" style="color: white"></i>
                                                <span>
                                                    watch video
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->


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
                            style="background-image: url({{ asset('photo/ppdb.jpg') }})">
                            <h3>2023/2024</h3>
                            <div class="price align-self-start">Penerimaan Peserta Didik Baru</div>
                            <p class="description">
                                Tahun 2023 ini <strong><a href="https://www.instagram.com/tktunaskaryakumai/"
                                        target="blank" style="color: white">TK Tunas Karya Kumai</a></strong> membuka
                                pendataran untuk peserta didik baru tahun ajaran 2023/2024
                                yang akan dibuka pada bulan Juni mendatang.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('photo/event1.jpg') }})">
                            <h3>15 Agustus 2022</h3>
                            <div class="price align-self-start">Kunjungan Puskesmas Kumai</div>
                            <p class="description">
                                Kunjungan yang dilakukan oleh tenaga kesehatan dari <strong><a
                                        href="https://www.instagram.com/puskesmas_kumai/" target="blank"
                                        style="color: white">Puskesmas Kumai</a></strong>
                                dalam rangka pemberian vitamin A dan obat cacing untuk peserta didik TK Tunas Karya
                                Kumai.
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
                    @foreach ($pegawais as $sekolah)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="chef-member">

                                <div class="member-img">
                                    <img src="{{asset('storage/photos')}}/{{$sekolah->foto_profil}}"
                                        class="img-fluid" alt="">
                                    {{-- <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div> --}}
                                </div>

                                <div class="member-info">
                                    <h4>{{$sekolah->nama_pegawai}}</h4>
                                    <span></span>
                                </div>

                            </div>
                        </div><!-- End Chefs Member -->
                    @endforeach

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="{{ asset('photo/muslim.png') }}" class="img-fluid" alt="">
                                {{-- <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div> --}}
                            </div>

                            <div class="member-info">
                                <h4> Siti Walnian, A.Md</h4>
                                <span>GURU KELAS B</span>
                            </div>

                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="{{ asset('photo/muslim.png') }}" class="img-fluid" alt="">
                                <div class="social">
                                    {{-- <a href="#"><i class="bi bi-twitter"></i></a> --}}
                                    <a href="https://www.facebook.com/imalizafathonah.anwari?mibextid=ZbWKwL"
                                        target="blank"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/lizasahudi/" target="blank"><i
                                            class="bi bi-instagram"></i></a>
                                    {{-- <a href="#"><i class="bi bi-linkedin"></i></a> --}}
                                </div>
                            </div>

                            <div class="member-info">
                                <h4>Imaliza Fathonah Anwari</h4>
                                <span>GURU PENDAMPING</span>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                </div>

            </div>
        </section><!-- End Guru Section -->

        <!-- ======= Feedback Section ======= -->
        <section id="feedback" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>FEEDBACK</h2>
                    <p>BERIKAN <span>MASUKAN</span> ANDA UNTUK TK TUNAS KARYA KUMAI</p>
                </div>

                <div class="row g-0">

                    <div class="col-lg-4 reservation-img"
                        style="background-image: url({{ asset('photo/cm1.png') }});" data-aos="zoom-out"
                        data-aos-delay="200"></div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg">

                        <form action="{{route("uploadPesan")}}" method="post" role="form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="100">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="nama" class="form-control" 
                                        placeholder="Nama" data-rule="minlen:4"
                                       >
                                    <div class="validate"></div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <input type="email" class="form-control" name="email" 
                                    placeholder="Email" >
                                    <div class="validate"></div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="nomorHp" 
                                        placeholder="No. Hp" 
                                       >
                                    <div class="validate"></div>
                                </div>

                            </div>

                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Masukan Anda"></textarea>
                                <div class="validate"></div>
                            </div>

                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Masukkan Anda Telah Terkirim. Terima Kasih!
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
                    <p>LIHAT <span>GALERI</span> KAMI</p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri1.png') }}"><img
                                    src="{{ asset('gallery/galeri1.png') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri2.png') }}"><img
                                    src="{{ asset('gallery/galeri2.png') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri3.jpg') }}"><img
                                    src="{{ asset('gallery/galeri3.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri4.jpg') }}"><img
                                    src="{{ asset('gallery/galeri4.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri5.jpg') }}"><img
                                    src="{{ asset('gallery/galeri5.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri6.jpg') }}"><img
                                    src="{{ asset('gallery/galeri6.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri7.jpg') }}"><img
                                    src="{{ asset('gallery/galeri7.jpg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('gallery/galeri8.png') }}"><img
                                    src="{{ asset('gallery/galeri8.png') }}" class="img-fluid" alt=""></a>
                        </div>
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
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11945.80878991808!2d111.72305002984818!3d-2.7320633341805984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08fb51e0c62bbf%3A0xf4c7210555b1a400!2sTK%20Tunas%20Karya%20Kelurahan%20Candi!5e0!3m2!1sid!2sid!4v1683775280122!5m2!1sid!2sid">
                    </iframe>
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

            </div>

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
                Designed by <a href="https://bootstrapmade.com/" target="blank">BootstrapMade</a>
                Edited by Web & Programming <a href="https://lkpenter.com/" target="blank">Enter</a> | Kelompok 2
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
