@extends('template')

@section('content')
	<div class="col-md-12">
		@if (count($idea) == 1)
			<h1>L'AUDACE</h1><br><br>
			<p class="idea-content">{!! nl2br($idea->content) !!}</p>
		@endif
	</div>
@endsection