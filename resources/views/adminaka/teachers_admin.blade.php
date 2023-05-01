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
            <h4 class="card-title">Teachers Table</h4>
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Tel_Nubmer</th>
                        <th scope="col">Role</th>
                        <th scope="col-1">ScoreBand</th>
                        <th scope="col">About</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $value)
                            <?php $id=$value->id;?>
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}} {{$value->last_name}}</td>
                        <td>+998{{$value->phone_number}}</td>
                        <td>{{$value->role}}</td>
                        <td><span class="label gradient-1 btn-rounded">{{$value->scoreband}}</span></td>
                        <td>{{$value->about}}</td>
                        <td><img src="{{asset("storage/$value->image")}}" class="rounded-circle" width="50px" alt=""></td>
                        <td>
                              <span><a class="btn btn-dark btn-sm" href="{{route('teachers.edit',$id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                  <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-globe color-muted m-r-5"></i></button>
                                <form class="delete" action="{{ route('teachers.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher  {{$value->name}}!! ? ');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash color-muted m-r-5"></i></button>
                                </form>
                            </span>
                        </td>

                    </tr>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Social media</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('social.destroy',$value->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <div class="modal-body">
                                                <div class="select mb-2">
                                                    <input type="hidden" name="id" value="">
                                                        <select required name="social">
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
                                    <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}"required id="recipient-name">
                                        </div>

                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Last Name:</label>
                                            <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" required id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Role:</label>
                                            <input type="text" class="form-control" name="role" value="{{old('role')}}" required id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">ScoreBand on IELTS or other achievements:</label>
                                            <input type="text" class="form-control" name="scoreband" value="{{old('score')}}" required id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="inlineFormInputGroup">Telephone Number</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">+998</div>
                                                </div>
                                                <input type="text" class="form-control" name="phone_number" required value="{{old('phone_number')}}" id="inlineFormInputGroup" placeholder="Telephone Number">
                                            </div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file"  class="custom-file-input" required name="image" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">About:</label>
                                            <textarea class="form-control" name="about" required id="message-text">{{old('about')}}</textarea>
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
