@extends('layout.master')

@section('content')
    <section class="sec5">
        <br>
        <h2>Edit ID {{$photo->id}}</h2>

        <form action="{{ route('gallery.update-photo', $photo->id) }}" method="POST"enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Title</label><br>
                <input type="text" name="title" class="form-control" value="{{$photo->title}}">
                @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
                <br><br>
            </div>
            <div class="form-group">
                <label for="">Description</label><br>
                <textarea name="description" rows="10" cols="40">{{$photo->description}}</textarea>
                @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
                <br><br>
            </div>
            <button type="submit" class="btn btn-success">Uploaden</button>
        </form>

    </section>
@endsection