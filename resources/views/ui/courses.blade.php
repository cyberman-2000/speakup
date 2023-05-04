@extends('layouts.layout')
@section('content_bar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Courses</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Our</span> Courses</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $value)
                    <div class="col-md-3 course ftco-animate">
                        <div class="img" style="background-image: url({{asset("storage/$value->image")}});"></div>
                        <div class="text pt-4">
                            <p class="meta d-flex">
                                <span><i class="icon-user mr-2"></i>{{$value->course_name}}</span>
                                <span><i class="icon-table mr-2"></i>{{$value->count_students}} students</span>
                                <span><i class="icon-calendar mr-2"></i>{{$value->duration}}</span>
                            </p>
                            <h3><a href="registration.html">{{$value->course_name}}</a></h3>
                            <p>{{$value->about}}</p>
                            <p><a href="registration.html" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center custom-btn btn-9">Apply now</a></p>
                        </div>
                    </div>
                @endforeach
                    <div class="col-md-12">{{$courses->links('vendor.pagination.bootstrap-4')}}</div>

            </div>
        </div>
    </section>

@endsection
