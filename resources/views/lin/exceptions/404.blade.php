@extends(config('settings.theme').'.layouts.index')



@section('header')
	@include(config('settings.theme').'.header')
@endsection

@section('content')
<div id="contents">
<div id="sidebar">
        <p>
            <h4>We are sorry but the page you are looking for does not exist.<br />You could
            <a href="{{ route('home') }}">return to the home page</a> or search using the search box below.</h4>
        </p>
</div>
<div id="">
    <img src="{{ asset(config('settings.theme')) }}/images/exceptions/404.png" title="Error 404" alt="404" />
</div>
</div>
@endsection

@section('footer')
    @include(config('settings.theme').'.footer')
@endsection				        