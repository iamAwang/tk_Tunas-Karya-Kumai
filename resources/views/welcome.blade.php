{{-- @extends('layouts.app') 

@section('header')
<div class="container-fluid">
    <h1 class="text-black-50" style="text-align: center">DATA PEGAWAI</h1>
</div>
@endsection --}}




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{mix('css/new.css')}}">
    <link rel="stylesheet" href="{{mix('css/new1.css')}}"> --}}
    <link href="{{ asset('css/new1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>TK TUNAS KARYA KUMAI</title>
</head>

<body>
    

    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__logo logo">
                        <img src="{{ asset('photo/all.jpg') }}" alt="logo" class="logo__img img">
                        <span class="">Tk Tunas Karya</span>
                    </div>
                    <div class="header__body">
                        <nav class="menu">
                            <ul class="menu__list">
                                <li class="menu__item">
                                    <a href="#home" class="menu__link">HOME</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#menu" class="menu__link">KURIKULUM</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#service" class="menu__link">PENDAFTARAN</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#contact" class="menu__link">CONTACT US</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="header__body">
                            <nav class="menu">
                            <ul class="menu__list">
                                @if (Route::has('login'))
                                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                                        @auth
                                          <li class="menu__item">
                                            <a href="{{ url('/home') }}"
                                                class="menu__link">Home</a>
                                          </li>
                                        @else
                                        <li class="menu__item">
                                            <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        </li>

                                            @if (Route::has('register'))
                                            <li class="menu__item">
                                                <a href="{{ route('register') }}"
                                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            </li>
                                            @endif
                                        @endauth
                                    {{-- </div> --}}
                                @endif
                            </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">
            <section class="home" id="home">
                {{-- <img src="{{ asset('photo/all.jpg') }}" class=""> --}}
                <div class="container">

                    <div class="home__inner">
                        <div class="home__items">
                            <h1 class="home__title">TK KUMAI<br> taman kanak-kanak</h1>
                            <p class="home__subtitle text">ada berbagai kegiatan dan membuat anak anda nyaman belajar</p>
                           
                        </div>
                       
                    </div>
                    
                </div>
               

            </section>
            <div class="card" style="width: 15rem; hight: 20cm">
                <img src="{{ asset('photo/all.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

            <section class="our-menu" id="menu">
                <div class="container our-menu__container">
                    <h2 class="our-menu__title title">Our menu</h2>
                    <div class="our-menu__slider">
                        <div class="our-menu__item">
                            <div class="our-menu__image">
                                <img src="img/s2.png" alt="" class="our-menu__img img">
                            </div>
                            <div class="our-menu__name">Ramen Egg Boil</div>
                            <div class="our-menu__price">25$</div>
                        </div>
                        <div class="our-menu__item">
                            <div class="our-menu__image">
                                <img src="img/s1.png" alt="" class="our-menu__img img">
                            </div>
                            <div class="our-menu__name">Ramen noodles</div>
                            <div class="our-menu__price">45$</div>
                        </div>
                        <div class="our-menu__item">
                            <div class="our-menu__image">
                                <img src="img/s3.png" alt="" class="our-menu__img img">
                            </div>
                            <div class="our-menu__name">Chicken Thukpa</div>
                            <div class="our-menu__price">32$</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="delivering" id="delivering">
                <div class="container">
                    <div class="delivering__inner">
                        <div class="delivering__items">
                            <h2 class="delivering__title">Delivering top<br>quality food products</h2>
                            <p class="delivering__subtitle text">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Quasi provident molestiae dolorem nobis.Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quasi provident molestiae dolorem nobis.</p>
                            <a href="#" class="delivering__link btn">Read More</a>
                        </div>
                        <div class="delivering__image">
                            <img src="img/delivery-img.png" alt="delivering img" class="delivering__img img">
                        </div>
                    </div>
                </div>
            </section>

            <section class="service" id="service">
                <div class="container">
                    <div class="service__inner">
                        <h2 class="service__title title">Our services</h2>
                        <div class="service__row">
                            <div class="service__column">
                                <div class="service__item">
                                    <div class="service__image">
                                        <img src="img/icon/cutlery-fork.svg" alt="service" class="service__img img">
                                    </div>
                                    <h3 class="service__name">Outdoor Catering</h3>
                                    <p class="service__text text">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="service__column">
                                <div class="service__item">
                                    <div class="service__image">
                                        <img src="img/icon/food-tray.svg" alt="service" class="service__img img">
                                    </div>
                                    <h3 class="service__name">Industrial Services</h3>
                                    <p class="service__text text">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="service__column">
                                <div class="service__item">
                                    <div class="service__image">
                                        <img src="img/icon/cake.svg" alt="service" class="service__img img">
                                    </div>
                                    <h3 class="service__name">Events & Exhibition</h3>
                                    <p class="service__text text">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="service__column">
                                <div class="service__item">
                                    <div class="service__image">
                                        <img src="img/icon/basket.svg" alt="service" class="service__img img">
                                    </div>
                                    <h3 class="service__name">Hospital Catering</h3>
                                    <p class="service__text text">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Lorem, ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__button">
                            <a href="#" class="service__link btn">All Services</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="container">
                    <div class="contact__inner">
                        <h2 class="contact__title">Contact Us</h2>
                        <form action="#">
                            <div class="contact__form">
                                <div class="contact__input">
                                    <input type="text" class="contact__name" placeholder="Your Name">
                                </div>
                                <div class="contact__input">
                                    <input type="email" class="contact__name" placeholder="Your Mail">
                                </div>
                                <div class="contact__input">
                                    <input type="tel" class="contact__name" placeholder="Phone Number">
                                </div>
                                <div class="contact__input">
                                    <textarea name="text" placeholder="Message"></textarea>
                                </div>
                                <div class="contact__input">
                                    <button class="contact__btn btn" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <div class="partners">
                <div class="container">
                    <div class="partners__inner">
                        <div class="partners__image">
                            <img src="img/partners/1.png" alt="partners" class="partners__img">
                        </div>
                        <div class="partners__image">
                            <img src="img/partners/2.png" alt="partners" class="partners__img">
                        </div>
                        <div class="partners__image">
                            <img src="img/partners/3.png" alt="partners" class="partners__img">
                        </div>
                        <div class="partners__image">
                            <img src="img/partners/4.png" alt="partners" class="partners__img">
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__block">
                        <a href="index.html" class="footer__logo logo">
                            <img src="img/logo.png" alt="logo" class="logo__img img">
                            <span>Delicious food</span>
                        </a>
                        <div class="footer__text text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo
                            impedit consectetur facilis?
                        </div>
                        <div class="footer__socials">
                            <a href="#" class="footer__social">
                                <img src="img/icon/fb.svg" alt="footer img" class="footer__img img">
                            </a>
                            <a href="#" class="footer__social">
                                <img src="img/icon/in.svg" alt="footer img" class="footer__img img">
                            </a>
                            <a href="#" class="footer__social">
                                <img src="img/icon/tw.svg" alt="footer img" class="footer__img img">
                            </a>
                        </div>
                    </div>
                    <div class="footer__block footer-contact">
                        <div class="footer-contact__header">Contact Us</div>
                        <ul class="footer-contact__list">
                            <li class="footer-contact__item text">
                                <a href="tel:+123456789123" class="footer-contact__link">+12(345)678-91-23</a>
                            </li>
                            <li class="footer-contact__item text">
                                <a href="delicious@gmail.com" class="footer-contact__link">delicious@gmail.com</a>
                            </li>
                            <li class="footer-contact__item text">
                                <a href="https://www.google.com/maps/place/1101+Central+Park+S,+New+York,+NY+10019,+США/@40.7677488,-73.9834272,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258f648b163ef:0x43bd13fc89b52346!8m2!3d40.7677448!4d-73.9812385"
                                    class="footer-contact__link" target="_blank">Central Park, Manhattan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__block footer-link">
                        <div class="footer-link__header">Explore</div>
                        <ul class="footer-link__list">
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">About Us</a>
                            </li>
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Blog</a>
                            </li>
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Contact Us</a>
                            </li>
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__block footer-link">
                        <div class="footer-link__header">Our Service</div>
                        <ul class="footer-link__list">
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Outdoor Catering</a>
                            </li>
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Industrial Services</a>
                            </li>
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Events & Exhibition</a>
                            </li>
                            <li class="footer-link__item text">
                                <a href="#" class="footer-link__link">Hospital Catering</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__copyright">
                    <div class="footer__cooper text">Copyright ©
                        <a href="https://dimafomaa.online" class="footer__link-bio" target="_blank">dimafomaa</a>,
                        2023. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>

    </div>
    {{-- <script src="{{mix('js/app.js')}}"></script> --}}
    {{-- <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/new.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/BBB.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>
