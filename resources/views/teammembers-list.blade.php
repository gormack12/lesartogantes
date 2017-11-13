@extends('template')

@section('content')
	<div class="col-md-12">
		<div class="row">
			@if (count($teammembers))
				<div class="col-md-12 text-center">
					<h1 style="font-weight: bold;font-size: 4.5em;font-family: 'Raleway', sans-serif;padding-bottom: 30px;margin:0;">Les Ar(t)ogantes</h1>
				</div>

				@foreach($teammembers as $teammember)
					@php
						$id = $teammember->id;
						$name = preg_replace('/\s+/', '', strtolower($teammember->firstname.$teammember->lastname));
					@endphp
					<div class="col-md-3 teammember-container">
						<div class="teammember">
							<a href="{{ route('teammember', [$id, $name]) }}">
								<img src="{{ $teammember->path_to_picture }}" class="img-circle person" alt="{{ $teammember->firstname }}" width="210" height="210">

								<span class="text-center">{{ $teammember->firstname . ' ' . $teammember->lastname }}</span>
							</a>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
@endsection