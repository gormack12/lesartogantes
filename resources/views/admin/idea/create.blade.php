@extends('admin.layouts.app')

@section('content')
    <div class="col-md-10">
		<form class="form-horizontal" method="POST" action="{{ route('idea.store') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="content" class="col-md-2 control-label">Idea</label>
				<div class="col-md-10">
					<textarea class="form-control" id="content" name="content" rows="5" autofocus required></textarea>
				</div>
			</div>
				
			<div class="form-group">
                <div class="col-md-8 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
		</form>
	</div>
@endsection