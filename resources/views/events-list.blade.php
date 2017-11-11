@extends('template')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery-clean.css') }}">
@endsection

@section('content')
	@if (count($events) > 0)
		@foreach ($events as $event)
			@if ($loop->first)
			<div class="container gallery-container">
				
				<div class="tz-gallery">
					
					<div class="row">

						<a href="{{ route('event', [$event->id, preg_replace('/\s+/', '_', $event->name)]) }}" class="jumbotron hero-image main-event-link" style="display: block; background-image: url('{{ $event->path_to_hero_picture }}');">
		                 	<div class="main-caption">
	                    			<h1>{{ ucwords($event->name) }}</h1>
	                    		<br />
	                    		<h2>{{ $event->location }}</h2>
	                       		
	                    		<br />
	                       		<p>Event abstract</p>
	                		</div>
	                	</a>

	           		</div>
				
				</div>
			
			</div>
			@endif
		@endforeach

		@php
			$events = $events->slice(1)
		@endphp
		
		<div class="container gallery-container">

			<div class="tz-gallery">

				<div class="row"> 
			
					@foreach ($events as $event)
					
							<div class="col-sm-6 col-md-4">
					            <div class="thumbnail">
					                <a class="lightbox" href="{{ route('event', [$event->id, preg_replace('/\s+/', '_', $event->name)]) }}">
					                    <img src="{{ $event->path_to_hero_picture }}" alt="hero-image">
					                </a>
					
					                 <div class="caption">
					                    <h2>{{ ucwords($event->name) }}</h2>
					                    <h3>{{ ucwords($event->location) }}</h3>
					                </div>
					            </div>
				            </div>

					@endforeach
		
		        </div>
			
			</div>

		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		<script>
		    baguetteBox.run('.tz-gallery');
		</script>
	
	@endif
@endsection