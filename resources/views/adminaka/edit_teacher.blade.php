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
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Teacher</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('teachers.update',$id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{$teacher->name}}"required id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" value="{{$teacher->last_name}}" required id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Role:</label>
                            <input type="text" class="form-control" name="role" value="{{$teacher->role}}" required id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">ScoreBand on IELTS or other achievements:</label>
                            <input type="text" class="form-control" name="scoreband" value="{{$teacher->scoreband}}" required id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Telephone Number</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+998</div>
                                </div>
                                <input type="text" class="form-control" name="phone_number" required value="{{$teacher->phone_number}}" id="inlineFormInputGroup" placeholder="Telephone Number">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mb-2">
                                <img class="d-block" src="{{asset("storage/$teacher->image")}}" width="70px" alt="">
                        </div>
                        <div class="custom-file ">
                            <input type="file"  class="custom-file-input " name="image" id="customFile">
                            <label class="custom-file-label" for="customFile">{{$teacher->image}}</label>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">About:</label>
                            <textarea class="form-control" name="about" required id="message-text">{{$teacher->about}}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>

@endsection
