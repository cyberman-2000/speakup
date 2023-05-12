@extends('layouts.admin_layout')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @foreach($regis as $value)
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Tel Number</th>
                            <th>Course</th>
                            <th>Week Days</th>
                            <th>Course Time</th>
                            <th>When Registered</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$value->second_name}} {{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>+998{{$value->phone_number}}
                                </td>
                                <td class="color-primary"><span class="badge badge-danger px-2">{{strtoupper($value->course)}}</span></td>
                                <td class="color-primary"><span class="badge badge-success px-2">{{strtoupper($value->days)}}</span></td>
                                <td class="color-primary"><span class="badge badge-primary px-2">{{$value->time}}</span></td>
                                <td class="color-primary">{{$value->getRegDate()}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
