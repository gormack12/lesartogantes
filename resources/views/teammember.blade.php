@extends('template')

@section('content')
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="">
					<img src="{{ $teammember->path_to_picture }}" class="img-circle person" alt="{{ $teammember->firstname }}" width="160" height="160" />
				</div>
			</div>
			
			<div class="col-md-6 col-md-offset-3">			
				<h4 class="text-center">{{ $teammember->firstname . " " . $teammember->lastname }}</h4>

				<h3 class="text-center">{{ ucfirst($teammember->role) }}</h3>

				<p>{!! nl2br($teammember->about) !!}</p>
				<br />
				<h4 style="font-weight: bold;font-family: 'Lato', sans-serif;">Adresse E-mail : {{ $teammember->email }}</h4>

			</div>
		</div>
	</div>
@stop