@extends('template')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery-clean.css') }}">
@endsection

@section('content')
	@if (count($event) == 0)
	
	@else
		<div class="container" >

			<div class="row">
				
				<div class="col-md-6 col-md-offset-3">
					<img src="{{ $event->path_to_hero_picture }}" style="width: 100%";/>
				</div>
				
				<div class="col-md-6 col-md-offset-3">
					<p>{{ $event->theme }}</p>

					<p>{{ $event->name }}</p>

					<p>{{ $event->description }}</p>
				</div>
			</div>
		</div>
	@endif
@endsection