@extends('layout.master')

@section('content')
    <section class="sec5">
        <br>
        <h2>Photo Gallery</h2>

        <p><a href="{{ route('gallery.add-photo')}}" class="btn btn-primary">Add Photo</a></p>

        <div class="gallery">
            @forelse ($photos as $photo)
                <a href="{{ asset('gallery/photo/'. $photo->id) }}">
                    <div class="photo">
                        <img src="{{ asset('uploadphotos/'. $photo->photo) }}" class="imageGallery" alt="{{$photo->photo}}">
                        <h2>{{$photo->title}}</h2>
                    </div>
                </a>
            @empty
                <p>Leeg</p>
            @endforelse
        </div>
        <br>
    </section>
@endsection