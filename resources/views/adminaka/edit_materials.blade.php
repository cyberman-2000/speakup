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
            <h5 class="modal-title" id="exampleModalLongTitle">Information:</h5>
        </div>
        <div class="modal-body">
            <form action="{{route('materials.update',$id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                </div>
                <div class="d-flex flex-column">
                    <label for="url" class="font-weight-bold text-dark h4">Book Name:</label>
                    <input type="text" required name="book_name" value="{{$materials->book_name}}" id="url">
                </div>
                <div class="d-flex flex-column">
                    <label for="url" class="font-weight-bold text-dark h4">Title:</label>
                    <input type="text" required name="title" value="{{$materials->title}}" id="url">
                </div>
                <div class="d-flex mt-2 flex-column">
                    @if(!empty($materials->image))
                        <img src="{{asset("storage/$materials->image")}}" width="65px" alt="">
                    @else
                    <img src="{{asset('adminaka/images/docs/'.$materials->mime.'.svg')}}" width="65px" alt="">
                    @endif
                    <label for="url" class="font-weight-bold text-dark h4">Image:</label>
                    <input type="file" value="{{$materials->image}}"  name="image" id="url">
                </div>
                <hr>
                <div class="d-flex mb-2 flex-column">
                    <label for="url" class="font-weight-bold text-dark h4">Book:</label>
                    <input type="file" value="{{$materials->path}}" name="file" id="url">
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
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

@endsection

