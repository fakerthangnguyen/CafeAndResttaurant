@extends('client.shares.master')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>About Us | Cafert</title>
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="/assets_client/css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="/assets_client/css/icomoon.css" />
    <link rel="stylesheet preload" as="style" href="/assets_client/css/libs.min.css" />

    <link rel="stylesheet" href="/assets_client/css/about.min.css" />
</head>
@section('content')

<header class="page">
    <div class="page_cover d-flex flex-column align-items-center justify-content-center">
        <div class="page_cover-img"></div>
        <h2 class="page_cover-title">About Us</h2>
    </div>
    <div class="page_breadcrumbs">
        <ul class="page_breadcrumbs-list d-flex flex-wrap justify-content-center h5">
            <li>
                <a class="link" href="/">Home</a>
            </li>

            <li>About Us</li>
        </ul>
    </div>
</header>

  <!-- about content start -->
  <main>
    <!-- benefits section start -->
@include('client.component.about.benefits')
    <!-- benefits section end -->
    <!-- promo section start -->
 @include('client.component.about.promo')
    <!-- promo section end -->
    <!-- counter section start -->
@include('client.component.about.counter')
    <!-- counter section end -->
    <!-- team section start -->
    <!-- team section start -->
@include('client.component.about.team_section')
    <!-- team section end -->
    <!-- team section end -->
    <!-- invitation section start -->
@include('client.component.about.invitation')
    <!-- invitation section end -->
    <!-- brands section start -->
    <section class="brands section">
        <div class="container">
            <div class="section_header centered">
                <span class="section_header-subtitle" data-aos="fade-down">brands</span>
                <h2 class="section_header-title" data-aos="fade-up" data-aos-delay="50">
                    We are Proud to Feature Our Top Client Companies
                </h2>
            </div>
            <div class="brands_list swiper">
                <div class="swiper-wrapper">
                    <div class="brands_list-item swiper-slide">
                        <a class="link" href="#">
                            <img src="svg/brand01.svg" alt="Brand name" />
                        </a>
                    </div>
                    <div class="brands_list-item swiper-slide">
                        <a class="link" href="#">
                            <img src="svg/brand02.svg" alt="Brand name" />
                        </a>
                    </div>
                    <div class="brands_list-item swiper-slide">
                        <a class="link" href="#">
                            <img src="svg/brand03.svg" alt="Brand name" />
                        </a>
                    </div>
                    <div class="brands_list-item swiper-slide">
                        <a class="link" href="#">
                            <img src="svg/brand04.svg" alt="Brand name" />
                        </a>
                    </div>
                    <div class="brands_list-item swiper-slide">
                        <a class="link" href="#">
                            <img src="svg/brand05.svg" alt="Brand name" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brands section end -->
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
</main>


@endsection
