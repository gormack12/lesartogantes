@extends('admin.layouts.app')

@section('content')
	<div class="col-md-10">
		<div class="row">
			@if(count($events) == 0)
				<div class="col-md-12">
					<a href="{{ route('event.create') }}" class="btn btn-primary">Add event</a>
				</div>
			@else
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Hero picture</th>
								<th>Name</th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($events as $event)
								<tr>
									<td>{{ $event->id }}</td>
									<td><img src="{{ $event->path_to_hero_picture }}" width="60" height="60" /></td>
									<td class="text-primary">{{ $event->name }}</td>
									<td><a class="btn btn-primary" href="{{ route('event.show', [$event->id]) }}">Show</a></td>
									<td><a class="btn btn-primary" href="{{ route('event.edit', [$event->id]) }}">Edit</a></td>
									<td>
										<form method="POST" action="{{ route('event.destroy', [$event->id]) }}">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button class="btn btn-primary" type="submit">Delete</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					<a class="btn btn-primary" href="{{ route('event.create') }}">Add event</a>
				</div>
			@endif
		</div>
	</div>
@endsection