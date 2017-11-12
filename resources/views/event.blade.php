@extends('template')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery-clean.css') }}">
@endsection

@section('content')
	@if (count($event) == 0)
	
	@else
		<div class="container" >

			<div class="row">
				
				<div style="padding: 20px 140px;">
					<img src="{{ $event->path_to_hero_picture }}" style="width: 100%; max-height: 500px;" />
					
					<p>Theme: {{ $event->theme }}</p>

					<p>Name: {{ $event->name }}</p>

					<p>Description: {{ $event->description }}</p>
				</div>
			</div>
		</div>
	@endif
@endsection