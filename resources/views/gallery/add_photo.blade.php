@extends('layout.master')

@section('content')
    <section class="sec5">
        <br>
        <h2>Add Photo to Gallery</h2>

        <form action="{{ route('gallery.upload-photo') }}" method="POST"enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
                @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" rows="10" cols="40"></textarea>
                @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">Photo</label>
                <input type="file" name="photo"  accept="image/*" />
                @if($errors->has('photo'))
                    <p class="text-danger">{{ $errors->first('photo') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-success">Uploaden</button>
        </form>

    </section>
@endsection