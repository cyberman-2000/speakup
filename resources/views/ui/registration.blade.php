@extends('layouts.layout')
@section('content_bar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.jpg')}}');">
        @if (\Session::has('success'))
            <div class="alert alert-success bg-warning" role="alert">
                {!! \Session::get('success') !!}
            </div>
        @endif
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                <h1 class="mb-2 bread">Registration form</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registration <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
    <div class="center">
        <div class="reg-container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif
            <div class="heading">Registration</div>
            <form action="{{route('registration.store')}}" method="post" class="reg-form">
                @csrf
                <div class="user-details">
                    <div class="user-box">
                        <span class="details">First Name</span>
                        <input name="name" type="text" value="{{old('name')}}" placeholder="First Name" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Last Name</span>
                        <input type="text" value="{{old('second_name')}}" name="second_name" placeholder="Last Name" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Email</span>
                        <input type="text" value="{{old('email')}}" name="email" placeholder="Email" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Phone number</span>
                        <input type="text" value="{{old('phone_number')}}" name="phone_number" placeholder="Phone number" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Select your course</span>
                        <select name="course" id="">
                            <option value="ielts">IELTS</option>
                            <option value="general_english">General English</option>
                            <option value="speaking_club">Speaking Club</option>
                            <option value="individual_grammar">Individual Grammar</option>
                        </select>
                    </div>
                    <div class="user-box">
                        <span class="details">Select your day</span>
                        <select name="days" id="">
                            <option value="even">Even days - 2,4,6</option>
                            <option value="odd">Odd days - 1,3,5</option>
                        </select>
                    </div>
                    <div class="user-box">
                        <span class="details">Select your time</span>
                        <select name="time" id="">
                            <option value="09:00-10:30">09:00 - 10:30</option>
                            <option value="10:30-12:00">10:30 - 12:00</option>
                            <option value="15:00-16:30">15:00 - 16:30</option>
                            <option value="16:30-18:00">16:30 - 18:00</option>
                        </select>
                    </div>
                </div>
                <div class="reg-btn">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection
