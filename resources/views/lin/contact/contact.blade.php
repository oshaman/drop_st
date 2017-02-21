@extends(config('settings.theme').'.layouts.index')



@section('header')
	{!! $header !!}
@endsection

@section('content')
	{!! $content !!}
@endsection

@section('footer')
	{!! $footer !!}
@endsection