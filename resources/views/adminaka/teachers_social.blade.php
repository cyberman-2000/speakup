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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body" >
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert">

                        {!! \Session::get('success') !!}

                    </div>
                @endif
                <h4 class="card-title">Social Media Table</h4>
                <div class="table-responsive">
                    <table class="table table-bordered verticle-middle">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Social media</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($social as $value)
                                <?php $id=$value->id;?>

                            <tr>
                                <td>{{$value->teacher->id}}</td>
                                <td>{{$value->teacher->name}} {{$value->teacher->last_name}}</td>
                                <td><i style="font-size: 25px; color:blue" class="fa fa-{{$value->media_name}}"></i> &nbsp;&nbsp;<span>{{$value->media_url}}</span></td>
                                <td><img src="{{asset('storage/'.$value->teacher->image.' ')}}" class="rounded-circle" width="50px" alt=""></td>
                                <td>
                              <span><a class="btn btn-dark btn-sm" href="{{route('social.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>

                                <form class="delete" action="{{ route('social.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher {{$value->teacher->name}}  {{strtoupper($value->media_name)}}!! ? ');">
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
                    <div class="col-md-12">{{$social->links('vendor.pagination.bootstrap-4')}}</div>
                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><span style="font-size: 14px; font-weight: bold">+ADD Social Media</span> <i style="font-size: 15px; font-weight: bold" class="fa fa-globe color-muted m-r-5"></i></button>
                    {{--                <a href="{{route('teachers.create')}}" class="btn btn-success">ADD</a>--}}
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Social media</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('social.store')}}" method="post">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="select mb-2">
                                            <select required name="teacher_id">
                                                @foreach($teach as $item)
                                                    <option value="{{$item->id}}">{{$item->name}} {{$item->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="select mb-2">
                                            <select required name="media_name">
                                                <option value="telegram">Telegram</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="youtube">Youtube</option>
                                                <option value="gmail">Gmail</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label for="url" class="url">URL Media:</label>
                                            <input type="text" required name="url" id="url">
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
