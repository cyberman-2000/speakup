@extends('layouts.layout')
@section('content_bar')
    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">

            {!! \Session::get('success') !!}

        </div>
    @endif

    <main class="main-content">
        <section class="slideshow">
            <div class="slideshow-inner">
                <div class="slides">
                    <div class="slide is-active ">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Slide title 1</div>
                                <div class="text">
                                    <p>Slide description 1</p>
                                </div>
                                <a href="#" class="btnl">
                                    <span class="btn-inner">Learn More</span>
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{asset('assets/images/def_images/aaaaaaaaaaaaaa.jpg')}}" alt="" class="image" />
                        </div>
                    </div>
                    <div class="slide ">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Slide title 2</div>
                                <div class="text">
                                    <p>Slide description 2</p>
                                </div>
                                <a href="#" class="btnl">
                                    <span class="btn-inner">Learn More</span>
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{asset('assets/images/def_images/23.jpg')}}" alt="" class="image" />
                        </div>
                    </div>
                    <div class="slide ">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Slide title 3</div>
                                <div class="text">
                                    <p>Slide description 3</p>
                                </div>
                                <a href="#" class="btnl">
                                    <span class="btn-inner">Learn More</span>
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{asset('assets/images/def_images/07.jpg')}}" alt="" class="image" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption">
                                <div class="title">Slide title 4</div>
                                <div class="text">
                                    <p>Slide description 4</p>
                                </div>
                                <a href="#" class="btnl">
                                    <span class="btn-inner">Learn More</span>
                                </a>
                            </div>
                        </div>
                        <div class="image-container">
                            <img src="{{asset('assets/images/def_images/01.jpg')}}" alt="" class="image" />
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <div class="item is-active">
                        <span class="icon">1</span>
                    </div>
                    <div class="item">
                        <span class="icon">2</span>
                    </div>
                     <div class="item">
                      <span class="icon">3</span>
                    </div>
                    <div class="item">
                        <span class="icon">4</span>
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow prev">
                <span class="svg svg-arrow-left">
                  <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
                    </div>
                    <div class="arrow next">
                <span class="svg svg-arrow-right">
                  <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-teacher"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Certified Teachers</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Special Education</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Book &amp; Library</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Sport Clubs</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url({{asset('assets/images/about.jpg')}})"></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <div data-aos="fade-down">
                        <h2 class="mb-4">Biz nimani taklif qilamiz</h2>
                    </div>
                    <div data-aos="fade-up">
                        <p>Biz xozirki paytda o'quvchilarning band jadvaliga ega ekanligini bilamiz va shunda etibor qaratgan holda, biz murakkab jadvalni moslashtirishga intilamiz. Bizning dasturlarimiz kun davomida, kechasi yoki hafta oxiridagi kunlarda olib borish mumkin..</p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div data-aos="flip-left">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                    <div class="text pl-3">
                                        <h3>Afzallik Taraflarimiz</h3>
                                        <p>‘SpeakUp Learning Center’ Edu-Action Taʼlim Konsultantlari tomonidan tasdiqlangan holda, Urganch, Xorazm viloyatida rasmiy IELTS ro'yxatga olish markazi sifatida ish faoliyatini yuritadi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="flip-right">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                    <div class="text pl-3">
                                        <h3>Ajoib Atmosfera</h3>
                                        <p>"SpeakUp Learning Center" da biz qiziqarli o'yinlar va o'quvchilarimiz orasida komunikatsiyani  ingliz tilida tashkillashtirib yaxshi o'rganishlarini taklif qilamiz. Bizga qimmatli o'quvchilarimizni g'ayrioddiy, tarbiyaviy go'yalarini eshitish va ma'lumot almashishlariga sharoit yaratib berganmiz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="flip-up">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                    <div class="text pl-3">
                                        <h3>Ajoib O'qituvchilar</h3>
                                        <p>Bizning barcha sertifikatlangan o'qituvchilarimiz sizning ingliz tilini o'rganishingiz uchun zarur bo'lgan ishtiyoq va tajribaga ega. Biz sizning maqsadlaringizni tushunadigan va siz bilan  muloqot yuritishga intiladigan o'qituvchilarni ehtiyotkorlik bilan tanlaymiz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="flip-down">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                    <div class="text pl-3">
                                        <h3>Sufficient Classrooms</h3>
                                        <p>At ‘SpeakUp Learning Center’, you will encounter something other than learning an outside language; you will be a piece of our enormous ‘SpeakUp’ family!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="zoom-in">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                    <div class="text pl-3">
                                        <h3>Creative Lessons</h3>
                                        <p>We solidly trust that our students learn English quicker when they are having a fabulous time!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="zoom-in-up">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                    <div class="text pl-3">
                                        <h3>Speaking clubs</h3>
                                        <p>Most importantly, speaking clubs can be a lot of fun! They provide a supportive and enjoyable environment where you can learn and grow while also making new friends and connections.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center" style="background-image: url({{asset('assets/images/about-2.jpg') }});">
                        <div class="video justify-content-center">
                            <a href="./intro/intro.MP4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                <span class="ion-ios-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <div data-aos="zoom-out-up">
                        <h2 class="mb-4">Speak UP - Learning center</h2>
                    </div>
                    <div data-aos="zoom-out-down">
                        <p>Starting officially in 2018 as a Speaking Club in the City Center, our center was every students’ “go-to” place after their studies. By its’ warm only-English environment and ‘educative-fun’ approach, Speaking Club gained more and more attention among both younger and older generation. Analyzing the power and influence the Club on people, we have come up with a good strategy to broaden our mission and courses we offered. Therefore, “SpeakUp” Learning Center opened its doors to prospective students on early March in 2021, offering not only Speaking courses but Individual Grammar, General English and IELTS courses as well.  </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="18">0</strong>
                                    <span>Certified Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="4">0</strong>
                                    <span>Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="80">0</strong>
                                    <span>Certified students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <div data-aos="fade-up"
                         data-aos-duration="3000">
                        <h2 class="mb-4"><span>Our</span> Courses</h2>
                    </div>
                    <div data-aos="fade-down"
                         data-aos-easing="linear"
                         data-aos-duration="1500">
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $value)
                <div class="col-md-3 course ftco-animate">
                    <div data-aos="zoom-in">
                        <div class="img" style="background-image: url({{asset("storage/$value->image")}});"></div>
                        <div class="text pt-4">
                            <p class="meta d-flex">
                                <span><i class="icon-key mr-2"></i>{{$value->course_name}}</span>
                                <span><i class="icon-user mr-2"></i>{{$value->count_students}} students</span>
                                <span><i class="icon-calendar mr-2"></i>{{$value->duration}}</span>
                            </p>
                            <h3><a href="registration.html">{{$value->course_name}}</a></h3>
                            <p>{{$value->about}}</p>
                            <p><a href="{{route('pages',['page'=>'registration'])}}" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center custom-btn btn-9">Apply now</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <div data-aos="flip-up">
                        <h2 class="mb-4">Certified Teachers</h2>
                    </div>
                    <div data-aos="flip-down">
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($teachers as $value)
                <div class="col-md-6 col-lg-3 ftco-animate">
{{--                     <div data-aos="zoom-out-up">--}}
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url({{asset("storage/$value->image")}});"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>{{$value->name}} {{$value->last_name}}</h3>
                                <span class="position mb-2">{{$value->role}}</span>
                                <div class="faded">
                                    <p>{{$value->about}}</p>
                                    <ul class="ftco-social text-center">
                                        @foreach($value->media as $item)
                                            <li class="ftco-animate"><a href="{{$item->media_url}}"><span class="icon-{{$item->media_name}}"></span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
{{--                    </div>--}}
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('assets/images/bg_5.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            <h2 class="mb-4">Feedbacks</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <form action="{{route('comment.store')}}" method="post" class="appointment-form ftco-animate">
                            @csrf
                            <div class="d-md-flex">
                                <div class="form-group form-item">
                                    <input type="text" id="fname" name="name" required class="form-control">
                                    <label for="fname" class="label">First Name</label>
                                </div>
                                <div class="form-group ml-md-4 form-item">
                                    <input type="text" id="lname" name="last_name" required class="form-control">
                                    <label for="lname" class="label">Last Name</label>
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="about" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select required name="whois" id="select" class="form-control">
                                                <option value=""  disabled selected hidden>Who are you?</option>
                                                <option value="pupil" style="color: black !important">Pupil</option>
                                                <option value="parent" style="color: black !important">Parent</option>
                                                <option value="guest" style="color: black !important">Guest</option>
                                                <option value="teacher" style="color: black !important">Teacher</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Submit" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <div data-aos="zoom-in-down">
                        <h2 class="mb-4"><span>Recent</span> Blog</h2>
                    </div>
                    <div data-aos="zoom-in">
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $value)
                    <?php
                        $dat=explode(" ",$value->when);
                        $week_day=$dat['0'];
                        $day=$dat['1'];
//                        dd($day);
                        $month=$dat['2'];
                        $year=$dat['3'];
                        $time= $dat['5'];
                        ?>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{asset("storage/$value->image")}}');">
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
                                <p class="mb-0"><a href="{{route('pages',['page'=>'news'])}}" class="btn btn-primary btn-read">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                    <div class="col-md-12">{{$news->links('vendor.pagination.bootstrap-4')}}</div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <div class="slide-container swiper">
        <div class="slide-contents">
            <div class="card-wrapper swiper-wrapper">
                @foreach($comments as $comment)
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="{{asset('adminaka/images/comment_avatar/'.$comment->whois.'.png')}}" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">{{$comment->name}} {{$comment->last_name}}
                        </h2>
                        <h5>{{$comment->whois}}</h5>
                        <p class="description">{{$comment->about}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- END OF TESTIMONIALS -->

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('assets/images/def_images/24.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/def_images/24.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('assets/images/def_images/11.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/def_images/11.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('assets/images/def_images/12.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/def_images/12.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('assets/images/def_images/25.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('assets/images/def_images/25.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
