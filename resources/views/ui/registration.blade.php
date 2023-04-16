@extends('layouts.layout')
@section('content_bar')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assets/images/bg_1.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
                <h1 class="mb-2 bread">Registration form</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registration <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
    <div class="center">
        <div class="reg-container">
            <div class="heading">Registration</div>
            <form action="" class="reg-form">
                <div class="user-details">
                    <div class="user-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="First Name" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Last Name" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Email" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Phone number</span>
                        <input type="text" placeholder="Phone number" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Telegram</span>
                        <input type="text" placeholder="Telegram" required="">
                    </div>
                    <div class="user-box">
                        <span class="details">Select your course</span>
                        <select name="" id="">
                            <option value="ielts">IELTS</option>
                            <option value="eng">General English</option>
                            <option value="speaking_club">Speaking Club</option>
                            <option value="grammer">Individual Grammer</option>
                        </select>
                    </div>
                    <div class="user-box">
                        <span class="details">Select your day</span>
                        <select name="" id="">
                            <option value="even">Even days - 2,4,6</option>
                            <option value="odd">Odd days - 1,3,5</option>
                        </select>
                    </div>
                    <div class="user-box">
                        <span class="details">Select your time</span>
                        <select name="" id="">
                            <option value="morning">09:00 - 10:30</option>
                            <option value="afternoon">10:30 - 12:00</option>
                            <option value="evening">15:00 - 16:30</option>
                            <option value="night">16:30 - 18:00</option>
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
