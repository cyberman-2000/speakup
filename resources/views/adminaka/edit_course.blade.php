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
            <form action="{{route('courses.update',$id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Course Name:</label>
                    <input type="text" class="form-control" name="course_name" value="{{$course->course_name}}" required id="recipient-name">
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Count of Students:</label>
                    <input type="number" class="form-control" name="count_students" value="{{$course->count_students}}" required id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Duration:</label>
                    <input type="text" class="form-control" name="duration" value="{{$course->duration}}" required id="recipient-name">
                </div>
                <div class="form-group">
                    <label class="m-t-40">When will start this Course</label>
                    <input type="text" id="date-format" class="form-control" name="when" value="{{$course->when}}" placeholder="{{$course->course_name}}">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroup">Price</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Сум</div>
                        </div>
                        <input type="text" class="form-control" name="cost" required value="{{$course->cost}}" id="inlineFormInputGroup" placeholder="Prise Of Course">
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-2">
                    <img class="d-block" src="{{asset("storage/$course->image")}}" width="70px" alt="">
                </div>
                <div class="custom-file">
                    <input type="file"  class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">{{$course->image}}</label>
                </div>

                <div class="form-group">
                    <label for="message-text" class="col-form-label">About:</label>
                    <textarea class="form-control" name="about" required id="message-text">{{$course->about}}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
        </div>
    </div>

@endsection
