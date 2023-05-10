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
    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">

            {!! \Session::get('success') !!}

        </div>
    @endif
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminaka/css/materials.css')}}">

    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-xs-12 col-sm-4 br-a br-light bg-light pv20 ph30">
                <h4 class="micro-header">Select Content Type</h4>
                <div class="row text-center" id="content-type">

                    <div class="col-xs-4 col-sm-6">
                        <a class="holder-style p15 mb20 holder-active" href="#dock-image">
                            <span class="fa fa-pencil holder-icon"></span>
                            <br> WRITING
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <a class="holder-style p15 mb20" href="#dock-panel">
                            <span class="fa fa-headphones holder-icon"></span>
                            <br> Listening
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <a class="holder-style p15 mb20" href="#dock-table">
                            <span class="fa fa-wechat holder-icon"></span>
                            <br> Speaking
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <a class="holder-style p15 mb20" href="#dock-form">
                            <span class="fa fa-leanpub holder-icon"></span>
                            <br> Reading
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-6">
                        <a class="holder-style p15 mb20" href="#dock-other">
                            <span class="fa fa-leanpub holder-icon"></span>
                            <br> Other
                        </a>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                    +ADD BOOK
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Information:</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('materials.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label for="url" class="font-weight-bold text-dark h4">Book Name:</label>
                                            <input type="text" required name="book_name" id="url">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label for="url" class="font-weight-bold text-dark h4">Title:</label>
                                            <input type="text" required name="title" id="url">
                                        </div>
                                        <div class="d-flex mt-2 flex-column">
                                            <label for="url" class="font-weight-bold text-dark h4">Image:</label>
                                            <input type="file" required name="image" id="url">
                                        </div>
                                    <hr>
                                        <div class="d-flex mb-2 flex-column">
                                            <label for="url" class="font-weight-bold text-dark h4">Book:</label>
                                            <input type="file" required name="file" id="url">
                                        </div>

                                        <label for="sel" class="font-weight-bold text-dark h4">Category:</label>
                                        <div class="select mb-2">
                                            <select id="sel" required name="category">
                                                <option value="writing">Writing</option>
                                                <option value="listening">Listening</option>
                                                <option value="speaking">Speaking</option>
                                                <option value="reading">Reading</option>
                                                <option value="other">Other</option>
                                            </select>



                                        </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 br-a br-light bg-light dark">
                <div id="dock-content" class="ph60">
                    <div id="dock-image" class="content active-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h4 class="header-title m-b-30">Writing Files</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{--                                        Foreach for  files--}}

                                        @foreach($materials as $value)
                                                    @if($value->category == 'writing')
                                                    <?php $id=$value->id;?>
                                            <div class="col-lg-3 col-xl-2">
                                                <div class="file-man-box">
                                                    <div class="file-img-box"><img width="64px" src="{{asset('adminaka/images/docs/'.$value->mime.'.svg')}}" alt="icon"></div><a href="{{route('download',$id)}}" class="file-download"><i class="fa fa-download"></i></a>
                                                    <div class="file-man-title">
                                                        <h5 class="mb-0 text-overflow">{{$value->book_name}}</h5>
                                                        <p class="mb-0"><small>{{round($value->size/1024/1024,3)}} MB {{$value->mime}}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                                <span><a class="btn btn-dark btn-sm" href="{{route('materials.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                    <form class="delete" action="{{ route('materials.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher {{$value->book_name}} !! ? ');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                                    </form>
                                                </span>
                                                @endif
                                        @endforeach

                                        {{--                                        End foreach for  files--}}
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <div id="dock-panel" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h4 class="header-title m-b-30">Listening Files</h4>
                                        </div>
                                    </div>

                                    <div class="row">
{{--                                        Foreach for  files--}}

                                        @foreach($materials as $value)
                                            @if($value->category == 'listening')
                                                    <?php $id=$value->id;?>
                                                <div class="col-lg-3 col-xl-2">
                                                    <div class="file-man-box">
                                                        <div class="file-img-box"><img width="64px" src="{{asset('adminaka/images/docs/'.$value->mime.'.svg')}}" alt="icon"></div><a href="{{route('download',$id)}}" class="file-download"><i class="fa fa-download"></i></a>
                                                        <div class="file-man-title">
                                                            <h5 class="mb-0 text-overflow">{{$value->book_name}}</h5>
                                                            <p class="mb-0"><small>{{round($value->size/1024/1024,3)}} MB {{$value->mime}}</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span><a class="btn btn-dark btn-sm" href="{{route('materials.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                    <form class="delete" action="{{ route('materials.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher {{$value->book_name}} !! ? ');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                                    </form>
                                                </span>
                                            @endif
                                        @endforeach

{{--                                        End foreach for  files--}}
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <div id="dock-table" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h4 class="header-title m-b-30">Speaking Files</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{--                                        Foreach for  files--}}

                                        @foreach($materials as $value)
                                            @if($value->category == 'speaking')
                                                    <?php $id=$value->id;?>
                                                <div class="col-lg-3 col-xl-2">
                                                    <div class="file-man-box">
                                                        <div class="file-img-box"><img width="64px" src="{{asset('adminaka/images/docs/'.$value->mime.'.svg')}}" alt="icon"></div><a href="{{route('download',$id)}}" class="file-download"><i class="fa fa-download"></i></a>
                                                        <div class="file-man-title">
                                                            <h5 class="mb-0 text-overflow">{{$value->book_name}}</h5>
                                                            <p class="mb-0"><small>{{round($value->size/1024/1024,3)}} MB {{$value->mime}}</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span><a class="btn btn-dark btn-sm" href="{{route('materials.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                    <form class="delete" action="{{ route('materials.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher {{$value->book_name}} !! ? ');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                                    </form>
                                                </span>
                                            @endif
                                        @endforeach

                                        {{--                                        End foreach for  files--}}
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <div id="dock-form" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h4 class="header-title m-b-30">Reading Files</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{--                                        Foreach for  files--}}

                                        @foreach($materials as $value)
                                            @if($value->category == 'reading')
                                                    <?php $id=$value->id;?>
                                                <div class="col-lg-3 col-xl-2">
                                                    <div class="file-man-box">
                                                        <div class="file-img-box"><img  src="{{asset('adminaka/images/docs/'.$value->mime.'.svg')}}" width="64px" alt="icon"></div><a href="{{route('download',$id)}}" class="file-download"><i class="fa fa-download"></i></a>
                                                        <div class="file-man-title">
                                                            <h5 class="mb-0 text-overflow">{{$value->book_name}}</h5>
                                                            <p class="mb-0"><small>{{round($value->size/1024/1024,3)}} MB {{$value->mime}}</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span><a class="btn btn-dark btn-sm" href="{{route('materials.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                    <form class="delete" action="{{ route('materials.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher {{$value->book_name}} !! ? ');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                                    </form>
                                                </span>
                                            @endif
                                        @endforeach

                                        {{--                                        End foreach for  files--}}
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <div id="dock-other" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h4 class="header-title m-b-30">Other Files</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{--                                        Foreach for  files--}}

                                        @foreach($materials as $value)

                                            @if($value->category == 'other')
                                                    <?php $id=$value->id;?>
                                                <div class="col-lg-3 col-xl-2">
                                                    <div class="file-man-box">
                                                        <div class="file-img-box"><img width="64px" src="{{asset('adminaka/images/docs/'.$value->mime.'.svg')}}" alt="icon"></div><a href="{{route('download',$id)}}" class="file-download"><i class="fa fa-download"></i></a>
                                                        <div class="file-man-title">
                                                            <h5 class="mb-0 text-overflow">{{$value->book_name}}</h5>
                                                            <p class="mb-0"><small>{{round($value->size/1024/1024,3)}} MB {{$value->mime}}</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span><a class="btn btn-dark btn-sm" href="{{route('materials.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                    <form class="delete" action="{{ route('materials.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher {{$value->book_name}} !! ? ');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                                    </form>
                                                </span>
                                            @endif
                                        @endforeach

                                        {{--                                        End foreach for  files--}}
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('adminaka/js/jquery.js')}}"></script>
    <script !src="">
        $(function(){
            $('.content').hide();
            $('.active-content').show();
            $('.holder-style').click(function(e){
                e.preventDefault();
                $('.holder-style').removeClass('holder-active');
                $('.content').hide();

                $($(this).attr('href')).show();
                $(this).addClass('holder-active');
            });
        });
    </script>
@endsection


