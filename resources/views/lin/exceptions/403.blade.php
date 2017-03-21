@extends(config('settings.theme').'.layouts.index')



@section('header')
	@include(config('settings.theme').'.header')
@endsection

@section('content')
    <img class="center-block img-fluid" src="{{ asset(config('settings.theme')) }}/img/exceptions/403.png" title="Error 403" alt="403" />
<div id="row">
    <div class="container">
        <h2>Forbidden access</h2><br />
        <p class="text-warning">
            You could 
            <a href="{{ route('home') }}">return to the home page</a> or search using the search box below.
        </p>
    </div>
</div>
@endsection

@section('footer')
    @include(config('settings.theme').'.footer')
@endsection				        