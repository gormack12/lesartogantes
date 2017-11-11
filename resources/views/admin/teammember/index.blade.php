@extends('admin.layouts.app')

@section('content')
	<div class="col-md-10">
		<div class="row">
		@if (count($teammembers) == 0)
			<div class="col-md-12">
				<a class="btn btn-primary" href="{{ route('teammember.create') }}">Add team member</a>
			</div>
		@else
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Picture</th>
							<th>Name</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($teammembers as $teammember)
							<tr>
								<td>{{ $teammember->id }}</td>
								<td><img src="{{ $teammember->path_to_picture }}" class="img-circle" width="70" height="70" alt="{{ $teammember->firstname }}" /></td>
								<td class="text-primary">{{ $teammember->firstname . ' ' . $teammember->lastname }}</td>
								<td><a class="btn btn-primary" href="{{ route('teammember.show', [$teammember->id]) }}">Show</a></td>
								<td><a class="btn btn-primary" href="{{ route('teammember.edit', [$teammember->id]) }}">Edit</a></td>
								<td>
									<form method="POST" action="{{ route('teammember.destroy', [$teammember->id]) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-primary" type="submit">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				
				<a class="btn btn-primary" href="{{ route('teammember.create') }}">Add team member</a>
			</div>			
		@endif
		</div>
	</div>
@endsection