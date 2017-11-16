@extends('template')

@section('content')
	<div class="col-md-12">
		<div class="row" style="padding-top: 30px;">
			@if (count($teammembers))
				@foreach($teammembers as $teammember)
					@php
						$id = $teammember->id;
						$name = preg_replace('/\s+/', '', strtolower($teammember->firstname.$teammember->lastname));
					@endphp
					<div class="col-md-3 teammember-container">
						<div class="teammember">
							<a href="{{ route('teammember', [$id, $name]) }}">
								<img src="{{ $teammember->path_to_picture }}" class="img-circle person" alt="{{ $teammember->firstname }}" width="180" height="180">

								<span class="text-center">{{ $teammember->firstname . ' ' . $teammember->lastname }}</span>
							</a>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
@endsection