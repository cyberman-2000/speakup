@extends('layouts.admin_layout')
@section('admin_content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="email">
                        <div class="read-content">
                            @foreach($email as $value)
                                    <?php
                                    $ts= strtotime($value->created_at);
                                    $day= date('d', $ts);
                                    $month=date('M', $ts);
                                    $year=date('Y', $ts);
                                    $time= date('H:i', $ts);
                                    ?>
                            <div class="media pt-5">
                                <img class="mr-3 rounded-circle" width="50px" src="{{asset('adminaka/images/avatar/astronaut.png')}}">
                                <div class="media-body">
                                    <h5 class="m-b-3">{{$value->name}}</h5>
                                    <p class="m-b-2">+998{{$value->phone_number}}</p>
                                </div>

                            </div>
                            <hr>
                            <div class="media mb-4 mt-1">
                                <div class="media-body"><span class="float-right">{{$time}} {{$day}} {{$month}} {{$year}}</span>
                                    <h4 class="m-0 text-primary">{{$value->subject}}</h4>
                                </div>
                            </div>
                            <p>
                                {{$value->message}}
                            </p>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
