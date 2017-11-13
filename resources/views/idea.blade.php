@extends('template')

@section('content')
	<div class="col-md-12">
		<div class="row">
			@if (count($idea) == 1)
				<div class="col-md-6 col-md-offset-3">
					<p>{!! nl2br($idea->content) !!}</p>
				</div>
			@endif
		</div>
	</div>
@endsection