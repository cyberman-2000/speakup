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
            <form action="{{route('social.update',$id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="select mb-2">
                        <select required name="teacher_id">
                            <option value="{{$social->teacher->id}}">{{$social->teacher->name}} &nbsp{{$social->teacher->last_name}}</option>
                            @foreach($teach as $item)
                                <option value="{{$item->id}}">{{$item->name}} {{$item->last_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="select mb-2">
                        <select required name="media_name">
                            <option value="{{$social->media_name}}">{{strtoupper($social->media_name)}}</option>
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
                        <input type="text" required name="url" value="{{$social->media_url}}" id="url">
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

@endsection

