@extends('layouts.layout')
@section('content_bar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                    <h1 class="mb-2 bread">NEWS</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Recent</span> Blog</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                @foreach($news as $value)
                        <?php
                        $ts= strtotime($value->when);
                        $day= date('d', $ts);
                        $month=date('M', $ts);
                        $year=date('Y', $ts);
                        $time= date('H:i', $ts);
                        ?>
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{asset("$value->image")}}');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">{{$day}}</span>
                                    <span class="mos">{{$month}}</span>
                                    <span class="day">{{$time}}</span>
                                    <span class="yr">{{$year}}</span>

                                </div>
                            </a>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="#">{{$value->event_name}}</a></h3>
                                <p>{{$value->mini_title}}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-read">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
