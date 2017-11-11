@extends('template')

@section('content')
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<p>{!! count($idea) == 1 ? nl2br($idea->content) : '' !!}</p>
			</div>
		</div>
	</div>
@endsection