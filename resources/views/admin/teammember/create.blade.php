@extends('admin.layouts.app')

@section('content')
	<div class="col-md-10">
		<div class="row">
			<form class="form-horizontal" method="POST" action="{{ route('teammember.store') }}" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group{{ $errors->has('picture') ? 'has-error' : '' }}">
					
					<label for="picture" class="col-md-2 control-label">Picture</label>

					<div class="col-md-10">
						<input type="file" id="picture" name="picture" required />
						@if ($errors->has('picture'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('picture') }}</strong>
	                        </span>
	                    @endif
	                </div>
				</div>

				<div class="form-group">
					<label for="firstname" class="col-md-2 control-label">Firstname</label>

					<div class="col-md-10">
						<input type="text" id="firstname" name="firstname" class="form-control" value="{{ old('firstname') }}" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="lastname" class="col-md-2 control-label">Lastname</label>

					<div class="col-md-10">
						<input type="text" id="lastname" name="lastname" class="form-control" value="{{ old('lastname') }}" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="role" class="col-md-2 control-label">Role</label>

					<div class="col-md-10">
						<input type="text" id="role" name="role" class="form-control" value="{{ old('role') }}" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="about" class="col-md-2 control-label">About</label>

					<div class="col-md-10">
						<textarea id="about" name="about" rows="7" class="form-control" required>{{ old('about') }}</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-md-2 control-label">E-mail Adress</label>

					<div class="col-md-10{{ $errors->has('email') ? 'has-error' : '' }}">
						<input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required/>
						@if ($errors->has('email'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('email') }}</strong>
	                        </span>
	                    @endif
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection