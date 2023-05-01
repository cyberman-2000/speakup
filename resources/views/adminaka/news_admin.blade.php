@extends('layouts.admin_layout')
@section('admin_content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    <link href="./plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="./plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="./plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="./plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="./plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="./plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body" >
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert">

                        {!! \Session::get('success') !!}

                    </div>
                @endif
                <h4 class="card-title">Bordered Table</h4>
                <div class="table-responsive">
                    <table class="table table-bordered verticle-middle">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Full information</th>
                            <th scope="col-1">When</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($new as $value)
                                <?php $id=$value->id;?>
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->event_name}}</td>
                                <td>{{$value->mini_title}}</td>
                                <td>{{$value->full_information}}</td>
                                <td>{{$value->when}}</td>
                                <td><img src="{{asset("storage/$value->image")}}" width="50px" alt=""></td>
                                <td>
                              <span><a class="btn btn-dark btn-sm" href="{{route('news.edit', $id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                <form class="delete" action="{{ route('news.destroy', $id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher  {{$value->event_name}}!! ? ');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                </form>
                            </span>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--                <a href="{{route('teachers.create')}}" class="btn btn-success">ADD</a>--}}
                    <div class="bootstrap-modal">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">+ ADD TEACHER</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Teacher</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Event Name:</label>
                                                <input type="text" class="form-control" name="event_name" value="{{old('event_name')}}"required id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Title:</label>
                                                <input type="text" class="form-control" name="mini_title" value="{{old('mini_title')}}" required id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Full information:</label>
                                                <input type="text" class="form-control" name="full_information" value="{{old('full_information')}}" required id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label class="m-t-40">When will start this Course</label>
                                                <input type="text" id="date-format" class="form-control" name="when" value="{{old('when')}}" placeholder="{{date('l d M Y - H:i')}}">
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  class="custom-file-input" required name="image" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
