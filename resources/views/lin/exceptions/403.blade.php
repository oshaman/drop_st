@extends(config('settings.theme').'.layouts.index')



@section('header')
	@include(config('settings.theme').'.header')
@endsection

@section('content')
<div id="contents">
    <img src="{{ asset(config('settings.theme')) }}/images/exceptions/403.png" title="Error 403" alt="403" />
    <div class="body">
        <p>
            Forbidden access<br />You could 
            <a href="{{ route('home') }}">return to the home page</a> or search using the search box below.
        </p>
    </div>
</div>
@endsection

@section('footer')
    @include(config('settings.theme').'.footer')
@endsection				        