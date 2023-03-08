@extends('client.shares.master')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Menu | Cafert</title>
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="/assets_client/css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="/assets_client/css/icomoon.css" />
    <link rel="stylesheet preload" as="style" href="/assets_client/css/libs.min.css" />

    <link rel="stylesheet" href="/assets_client/css/menu.min.css" />
</head>
@section('content')
<header class="page">
    <div class="page_cover d-flex flex-column align-items-center justify-content-center">
        <div class="page_cover-img"></div>
        <h2 class="page_cover-title">Our Menu</h2>
    </div>
    <div class="page_breadcrumbs">
        <ul class="page_breadcrumbs-list d-flex flex-wrap justify-content-center h5">
            <li>
                <a class="link" href="/">Home</a>
            </li>

            <li>Menu</li>
        </ul>
    </div>
</header>
<main>
   @include('client.component.menu.menu_section')
    <!-- banners section start -->
    <div class="banners">
        <div class="container">
            <ul class="banners_list">
                <li class="banners_list-item">
                    <a class="link" href="#">
                        <span class="media">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                <img
                                    class="lazy"
                                    data-src="img/placeholder.jpg"
                                    src="img/placeholder.jpg"
                                    alt="Every 5th Breakfast as a Gift."
                                />
                            </picture>
                        </span>
                        <span class="main">
                            <span class="section_header-subtitle">free</span>
                            <span class="h4">Every 5th Breakfast as a Gift.</span>
                        </span>
                    </a>
                </li>
                <li class="banners_list-item">
                    <a class="link" href="#">
                        <span class="media">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                <img
                                    class="lazy"
                                    data-src="img/placeholder.jpg"
                                    src="img/placeholder.jpg"
                                    alt="Coffee + Napoleon"
                                />
                            </picture>
                        </span>
                        <span class="main">
                            <span class="h4">Coffee <i class="icon-plus icon"></i> Napoleon</span>
                            <span class="main_text text--medium text--md">Profit up to 35%</span>
                        </span>
                    </a>
                </li>
                <li class="banners_list-item banners_list-item--img">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Our Offers" />
                    </picture>
                </li>
                <li class="banners_list-item banners_list-item--img">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Our Offers" />
                    </picture>
                </li>
                <li class="banners_list-item">
                    <a class="link" href="#">
                        <span class="media">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                <img
                                    class="lazy"
                                    data-src="img/placeholder.jpg"
                                    src="img/placeholder.jpg"
                                    alt="Cyber Wednesday!"
                                />
                            </picture>
                        </span>
                        <span class="main">
                            <span class="h4">Cyber Wednesday!</span>
                            <span class="main_text text--medium text--md">Dessert day, second position for free.</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- banners section end -->
    <!-- booking section start -->
    <section class="booking section">
        <div class="container">
            <div class="section_header centered">
                <span class="section_header-subtitle" data-aos="fade-up">contact us</span>
                <h2 class="section_header-title" data-aos="fade-up" data-aos-delay="50">Book Your Reservation Today</h2>
                <p class="section_header-text" data-aos="fade-up" data-aos-delay="100">
                    Mauris pharetra et ultrices neque ornare aenean euismod. Bibendum neque egestas congue quisque egestas diam in.
                    Risus nullam eget felis eget nunc lobortis mattis aliquam faucibus.
                </p>
            </div>
            <div class="wrapper" data-aos="fade-up" data-aos-delay="150">
                <a class="booking_btn btn" href="reservations.html">reserve a table</a>
            </div>
        </div>
    </section>
    <!-- booking section end -->
    <!-- map section start -->
    <div id="map"></div>
    <!-- map section end -->
    <!-- gallery section start -->
    <div class="gallery_slider swiper">
        <div class="swiper-wrapper">
            <div class="gallery_slider-slide swiper-slide">
                <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Gallery Item" />
                    </picture>
                </a>
            </div>
            <div class="gallery_slider-slide swiper-slide">
                <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Gallery Item" />
                    </picture>
                </a>
            </div>
            <div class="gallery_slider-slide swiper-slide">
                <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Gallery Item" />
                    </picture>
                </a>
            </div>
            <div class="gallery_slider-slide swiper-slide">
                <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Gallery Item" />
                    </picture>
                </a>
            </div>
            <div class="gallery_slider-slide swiper-slide">
                <a class="link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Gallery Item" />
                    </picture>
                </a>
            </div>
        </div>
    </div>
    <!-- gallery section end -->
    <!-- menu content end -->
</main>
@endsection
