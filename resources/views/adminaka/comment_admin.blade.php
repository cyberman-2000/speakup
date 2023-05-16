@extends('layouts.admin_layout')
@section('admin_content')
    <link rel="stylesheet" href="{{asset('adminaka/css/comment.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" integrity="sha512-W3ZfgmZ5g1rCPFiCbOb+tn7g7sQWOQCB1AkDqrBG1Yp3iDjY9KYFh/k1AWxrt85LX5BRazEAuv+5DV2YZwghag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="team-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($comments as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="{{asset('adminaka/images/comment_avatar/'.$item->whois.'.png')}}" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">{{$item->name}} {{$item->last_name}}</h5>
                                <div class="mb-3 text-center">{{$item->whois}}</div>
                                <div>{{$item->about}}</div>
                            </div>
                        </div><!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item">{{$item->getComDate()}}</li>
                                <li class="list-inline-item"><a class="btn btn-outline-danger btn-sm text-dark" href="#"><i class="fa fa-trash fa-fw"></i></a></li>
                            </ul><!--//social-list-->
                        </div><!--//card-footer-->
                    </div><!--//card-->
                </div><!--//col-->
                @endforeach
            </div><!--//row-->

        </div>

    </section>
@endsection
