@extends('template')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery-clean.css') }}">
@endsection

@section('content')
	@if (count($event) == 0)
	
	@else
		<div class="container">

			<div style="padding: 20px 140px;">
				
				<div class="row">
					<div class="col-md-12">
						<figure>
							<img src="{{ $event->path_to_hero_picture }}" style="width: 100%";/>
						</figure>
					</div>

					<div class="col-md-6 col-md-offset-3 text-center">
						<h1 class="text-center">{{ $event->theme }}</h1>

						<p>{{ $event->name }}</p>

						<p>{{ $event->description }}</p>
					</div>
				</div>
			</div>
		</div>
	@endif
@endsection