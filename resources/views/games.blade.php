@extends('layout.main')

@section('content')

    <div class="main-wrapper undefined-page">
        <div class="container">

            <h1>Marco non ha ancora creato la pagina : <span id="url-name">"{{ Route::currentRouteName() }}"</span></h1>
            <p>Se avrai pi&ugrave; fortuna la troverai la prossima volta!</p>
            <span>( &Egrave; un p&ograve; scansafatiche... )</span>

        </div>
    </div>

@endsection
