@extends('admin.layouts.app')

@section('content')
	<div class="col-md-10">
		@if (count($idea) == 0)
			<div class="row">
				<div class="col-md-3">
					<a href="{{ route('idea.create') }}" class="btn btn-primary">Add idea</a>
				</div>
			</div>
		@else
			<div class="row">
				<div class="col-md-12">
					<div style="border: 1px solid #ddd;border-radius: 3px;padding: 10px;">
						<p>{{ $idea->content }}</p>
					</div>
				</div>
			</div>
			
			<div class="row" style="padding: 10px 0;">
				<div class="col-md-12">
					<form method="POST" action="{{ route('idea.destroy', [$idea->id]) }}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						
						<a href="{{ route('idea.edit', [$idea->id]) }}" class="btn btn-primary">Edit</a>

						<button class="btn btn-primary" type="submit">Delete</button>
					</form>
				</div>
			</div>
		@endif
	</div>
@endsection