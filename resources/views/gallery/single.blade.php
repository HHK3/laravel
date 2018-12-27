@extends('layout.master')

@section('content')
    <section class="sec5">
        <br>
        <h2>{{$photo->title}}</h2>

        <div id="singleLinks">
            <p><a href="{{ route('gallery.index')}}" class="btn btn-primary">Back to Gallery</a></p>
            <p><a href="{{ asset('gallery/delete/'. $photo->id) }}" class="btn btn-primary">Delete</a></p>
            <p><a href="{{ asset('gallery/edit/' . $photo->id)}}" class="btn btn-primary">Edit</a></p>
        </div>

        <div id="prevNext">
            @if (isset($previous))
                <div class="alert alert-success">
                    <a href="{{ asset('gallery/photo/'. $previous->id) }}">
                        <div class="btn-content">
                            <div class="btn-content-title"><i class="fa fa-arrow-left"></i> Previous Post</div>
                        </div>
                    </a>
                </div>
            @endif

            @if (isset($next))
                <div class="alert alert-success">
                    <a href="{{ asset('gallery/photo/'. $next->id) }}">
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post <i class="fa fa-arrow-right"></i></div>
                        </div>
                    </a>
                </div>
            @endif
        </div>

        <div class="photoSingle">
                <div class="photo">
                    <img src="{{ asset('uploadphotos/'. $photo->photo) }}" class="image" alt="{{$photo->photo}}">
                    <h2>{{$photo->description}}</h2>
                </div>
        </div>

        <br>
    </section>
@endsection