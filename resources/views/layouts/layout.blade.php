<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fox University - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/kyu.css')}}">

</head>
<body>
<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="{{route('home')}}"><img class="logo" src="{{asset('assets/images/LogoSpeakUpRed.png')}}" alt="logo"></a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text">
                            <span>Email</span>
                            <span>speakuplearningcenter@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text">
                            <span>Telefon</span>
                            <span>Telefon raqamimiz : +998999681177</span>
                        </div>
                    </div>
                    <div class="col-md topper d-flex align-items-center justify-content-end">
                        <p class="mb-0">
                            <a href="{{route('login')}}" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center custom-btn btn-9">
                                <span>Kirish</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link pl-0">UY</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'about'])}}" class="nav-link">Biz Haqimizda</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'courses'])}}" class="nav-link">Kurslar</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'teachers'])}}" class="nav-link">Instruktorlar</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'news'])}}" class="nav-link">Yangiliklar</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'contact'])}}" class="nav-link">Biz bilan bo'glanish</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'registration'])}}" class="nav-link">Kursga yozilish</a></li>
                <li class="nav-item"><a href="{{route('pages',['page'=>'materials'])}}" class="nav-link">Materiallar</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content_bar')




<!--  ---------------------------------------------Footer Start--------------------------------------------   -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Urganch city, New Urgench street</span></li>
                            <li><p><span class="icon icon-phone"></span><span class="text">+998999681177</span></p></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">speakuplearningcenter@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    @foreach($news_l as $item)
                            <?php
                            $dat=explode(" ",$item->when);
                            $week_day=$dat['0'];
                            $day=$dat['1'];
//                        dd($day);
                            $month=$dat['2'];
                            $year=$dat['3'];
                            $time= $dat['5'];
//                            ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset("storage/$item->image")}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{route('pages',['page'=>'news'])}}">{{$item->event_name}}</a></h3>
                            <div class="meta">
                                <div><a href="{{route('pages',['page'=>'news'])}}"><span class="icon-calendar"></span> {{$month}} {{$day}}, {{$year}}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="{{route('pages',['page'=>'about'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                        <li><a href="{{route('pages',['page'=>'courses'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Courses</a></li>
                        <li><a href="{{route('pages',['page'=>'teachers'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Staff</a></li>
                        <li><a href="{{route('pages',['page'=>'news'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a></li>
                        <li><a href="{{route('pages',['page'=>'contact'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                        <li><a href="{{route('pages',['page'=>'registration'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Registration</a></li>
                        <li><a href="{{route('pages',['page'=>'materials'])}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Materials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="https://t.me/ceospeakup"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/speakup_lc/"><span class="icon-telegram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">SpeakUp</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assets/js/scrollax.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/slidered.js')}}"></script>

</body>
</html>





