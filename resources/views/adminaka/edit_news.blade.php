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
            <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
        </div>
        <div class="modal-body">
            <form action="{{route('news.update',$id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Event Name:</label>
                    <input type="text" class="form-control" name="event_name" value="{{$new->event_name}}" required id="recipient-name">
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" name="mini_title" value="{{$new->mini_title}}" required id="recipient-name">
                </div>
                <div class="form-group">
                    <label class="m-t-40">When will start this Event</label>
                    <input type="text" id="date-format" class="form-control" name="when" value="{{$new->when}}" placeholder="">
                </div>
                <div class="d-flex justify-content-end mb-2">
                    <img class="d-block" src="{{asset("storage/$new->image")}}" width="70px" alt="">
                </div>
                <div class="custom-file">
                    <input type="file"  class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">{{$new->image}}</label>
                </div>

                <div class="form-group">
                    <label for="message-text" class="col-form-label">Full Information:</label>
                    <textarea class="form-control" name="full_information" required id="message-text">{{$new->full_information}}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
        </div>
    </div>

@endsection

