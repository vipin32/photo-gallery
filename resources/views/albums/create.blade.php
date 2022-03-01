@extends('layouts.app')

@section('content')
    <div class="col-sm-8 offset-sm-2">
        <form action="{{route('albums.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Album Name">
            </div>
            <div class="mb-3">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Album Description"></textarea>
            </div>
            <div class="mb-3">
                <input type="file" name="cover_image" id="cover_image" class="form-control">
            </div>

            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Add Album">
            </div>
        </form>
    </div>
@endsection