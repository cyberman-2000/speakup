@extends('layouts.layout')
@section('content_bar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        @if (\Session::has('success'))
            <div class="alert alert-success">

                    {!! \Session::get('success') !!}

            </div>
        @endif
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Address</h3>
                        <p>Urganch city, New Urgench street</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">+998999681177</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">speakuplearningcenter@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">Speak.up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{route('pochta.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Your Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+998</span>
                                </div>
                            <input type="text" aria-label="Username" aria-describedby="basic-addon1" value="{{old('phone_number')}}" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Your Phone Number">
                            </div>
                            @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject"  class="form-control @error('subject') is-invalid @enderror" value="{{old('subject')}}" placeholder="Subject">
                            @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control @error('message') is-invalid @enderror" placeholder="Message">{{old('message') }}</textarea>
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 btn-read">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316.85615862025287!2d60.6199751669316!3d41.55117571692542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfc966ad701cff%3A0x17322ef3d36d9308!2sSpeak%20up!5e1!3m2!1sru!2s!4v1681498114602!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
