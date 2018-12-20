@extends('layout.master')

@section('content')
    <section class="sec5">
        <br>
        <h2>Photo Gallery</h2>

        <p><a href="{{ route('gallery.add-photo')}}" class="btn btn-primary">Add Photo</a></p>

        <div class="test">
            @forelse ($photos as $photo)
                <div class="photo">
                    <a href="{{ asset('uploadphotos/'. $photo->photo) }}">
                        <img src="{{ asset('uploadphotos/'. $photo->photo) }}" class="imageGallery" alt="{{$photo->photo}}">
                    </a>
                    <h2>{{$photo->title}}</h2>
                </div>
            @empty
                <p>Leeg</p>
            @endforelse
        </div>
        <br>
    </section>
@endsection