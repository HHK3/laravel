@extends('layout.master')
@section('content')
    @if( session()->has('formData'))
        <section class="sec5">
            <br>
            <h2>Uw bericht is verzonden!</h2>
            <div class="well well-sm">
                <h1>Hier zijn je ingevulde gegevens</h1>
                <p>
                    <strong>First Name:</strong> {{ session('formData.searchterm') }}<br/>
                </p>
                {{--<p>--}}
                {{--<a href="{{ route('home') }}">Back To Homepage</a>--}}
                {{--</p>--}}
            </div>
        </section>
    @endif
@endsection