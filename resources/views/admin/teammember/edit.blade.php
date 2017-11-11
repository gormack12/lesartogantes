@extends('admin.layouts.app')

@section('content')
	<div class="col-md-10">
		<div class="row">
			<form class="form-horizontal" method="POST" action="{{ route('teammember.update', [$teammember->id]) }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT') }}

				<div class="form-group{{ $errors->has('picture') ? 'has-error' : '' }}">
					
					<div class="col-md-10 col-md-offset-2">
						<img src="{{ $teammember->path_to_picture }}" width="170" height="170" />
					</div>

					<label for="picture" class="col-md-2 control-label">Picture</label>

					<div class="col-md-10">
						<input type="file" id="picture" name="picture" />
						@if ($errors->has('picture'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('picture') }}</strong>
	                        </span>
	                    @endif
	                </div>
				</div>

				<div class="form-group{{ $errors->has('firstname') ? 'has-error' : '' }}">
					<label for="firstname" class="col-md-2 control-label">Firstname</label>

					<div class="col-md-10">
						<input type="text" id="firstname" name="firstname" class="form-control" value="{{ $teammember->firstname }}" required autofocus/>
					</div>
				</div>

				<div class="form-group{{ $errors->has('lastname') ? 'has-error' : '' }}">
					<label for="lastname" class="col-md-2 control-label">Lastname</label>

					<div class="col-md-10">
						<input type="text" id="lastname" name="lastname" class="form-control" value="{{ $teammember->lastname }}" required/>
					</div>
				</div>

				<div class="form-group{{ $errors->has('role') ? 'has-error' : '' }}">
					<label for="role" class="col-md-2 control-label">Role</label>

					<div class="col-md-10">
						<input type="text" id="role" name="role" class="form-control" value="{{ $teammember->role }}" required/>
					</div>
				</div>

				<div class="form-group{{ $errors->has('about') ? 'has-error' : '' }}">
					<label for="about" class="col-md-2 control-label">About</label>

					<div class="col-md-10">
						<textarea id="about" name="about" rows="7" class="form-control" required>{{ $teammember->about }}</textarea>
					</div>
				</div>

				<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="email" class="col-md-2 control-label">E-mail Adress</label>

					<div class="col-md-10">
						<input type="email" id="email" name="email" class="form-control" value="{{ $teammember->email }}" required/>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="submit" class="btn btn-primary">
							Update
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection