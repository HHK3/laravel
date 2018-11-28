@extends('layout.master')
@section('content')
    @if( session()->has('formData'))
        <section class="sec5">
            <br>
            <h2>Uw bericht is verzonden!</h2>
            <div class="well well-sm">
                <h1>Hier zijn je ingevulde gegevens</h1>
                <p>
                    <strong>First Name:</strong> {{ session('formData.firstname') }}<br/>
                    <strong>Middle Name:</strong>
                    {{ session('formData.middlename') }}<br/>
                    <strong>Last Name:</strong> {{ session('formData.lastname') }}<br/>
                    <strong>Email: </strong> {{ session('formData.email') }}<br/>
                    <strong>Geboortedatum: </strong> {{ session('formData.geboortedatum') }}<br/>
                    <strong>Website: </strong> {{ session('formData.website')}}<br/>
                </p>
                {{--<p>--}}
                    {{--<a href="{{ route('home') }}">Back To Homepage</a>--}}
                {{--</p>--}}
            </div>
        </section>
    @endif
@endsection