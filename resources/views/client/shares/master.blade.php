<!DOCTYPE html>
<html lang="en">
    <head>
        @include('client.shares.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" ></script>
    </head>
    <body>
        <header class="header" data-page="home" data-page-parent="home">
           @include('client.shares.head')
        </header>
        <!-- homepage content start -->
        <main>
            @yield('content')
            <!-- hero section start -->

            <!-- hero section end -->
            <!-- banner start -->

            <!-- banner end -->
            <!-- offer section start -->

            <!-- offer section end -->
            <!-- menu section start -->

            <!-- menu section end -->
            <!-- booking section start -->

            <!-- booking section end -->
            <!-- presentation section start -->

            <!-- presentation section end -->
            <!-- testimonials section start -->

            <!-- testimonials section end -->
            <!-- recent posts section start -->

            <!-- recent posts section end -->
            <!-- booking section start -->

            <!-- booking section end -->
            <!-- map section start -->

            <!-- map section end -->
        </main>
        <!-- homepage content end -->
        <footer class="footer section">
           @include('client.shares.foot')
        </footer>
       @include('client.shares.js')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       @yield('js')
        <div class="videoPopup d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="video_frame d-flex align-items-center justify-content-center">
                    <i class="icon-close video_frame-close"></i>
                    <div id="YTplayer"></div>
                </div>
            </div>
        </div>
    </body>
</html>
