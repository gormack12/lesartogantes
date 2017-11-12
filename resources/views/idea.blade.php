@extends('template')

@section('content')
	<div class="col-md-12">
		<div class="row">
			@if (count($idea) == 1)
				<p>{!! $idea->content !! }</p>
			@endif
		</div>
	</div>
@endsection