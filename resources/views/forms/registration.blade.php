@extends ('layout.master')

@section('content')
    @if ($errors->any())
        <h4>Het formulier bevat fouten:</h4>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Uw gegevens</h2>
    <form action="{{ route('registration.form.handle') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="">Voornaam:</label>
                    <input type="text" name="firstname" class="form-control"
                           value="{{old ('firstname')}}"/>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Achternaam:</label>
                    <input type="text" name="lastname" class="form-control"
                           value="{{old ('lastname')}}"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">E-mail:</label>
            <input type="email" name="email" class="form-control" value="{{old ('email')}}"/>
        </div>
        <div class="form-group">
            <label for="">Onderwerp:</label>
            <input type="text" name="onderwerp" class="form-control" value="{{old ('onderwerp')}}"/>
        </div>
        <div class="form-group">
            <label for="">Bericht</label>
            <input type="text" name="bericht" class="form-control" value="{{old ('bericht')}}"/>
        </div>

        <p>
            <button type="submit" class="btn btn-primary">Opsturen</button>
        </p>
    </form>
@endsection
