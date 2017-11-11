@extends('admin.layouts.app')

@section('content')
	<div class="col-md-10">
		<div class="row">
			<form class="form-horizontal" method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
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

				<div class="form-group{{ $errors->has('theme') ? ' has-error' : '' }}">
					<label for="theme" class="col-md-2 control-label">Theme</label>

					<div class="col-md-10">
						<input id="theme" type="text" name="theme" class="form-control" value="{{ old('theme') }}" required autofocus="autofocus" />
						@if ($errors->has('theme'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('theme') }}</strong>
	                        </span>
	                    @endif
					</div>
				</div>

				<div class="form-group">
					<label for="name" class="col-md-2 control-label">Name</label>

					<div class="col-md-10">
						<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required />
						@if ($errors->has('name'))
							<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<label for="day" class="col-md-2 control-label">Date</label>

					<div class="col-md-3">
						<select id="day" name="day" class="form-control" required>
							<optgroup label="day">
								@for ($i = 1; $i <= 31; $i++)
									@if (old('day') == $i)
										<option value="{{ $i }}" selected="">{{ $i }}</option>
									@else
										<option value="{{ $i }}">{{ $i }}</option>
									@endif
								@endfor
							</optgroup>
						</select>
					</div>

					<div class="col-md-4">

						<select id="month" name="month" class="form-control" required>
							<optgroup label="month">
								@for ($i = 1; $i <= 12; $i++)
									@if (old('month') == $i)
										<option value="{{ $i }}" selected>{{ DateTime::createFromFormat ('!m', $i)->format('F') }}</option>
									@else
										<option value="{{ $i }}">{{ DateTime::createFromFormat ('!m', $i)->format('F') }}</option>
									@endif
								@endfor
							</optgroup>
						</select>
					</div>

					<div class="col-md-3">
						<select name="year" id="year" class="form-control" required>
							<optgroup label="year">
								@for ($i = date('Y'); $i <= date('Y') + 5; $i++)
									@if (old('year') == $i)
										<option value="{{ $i }}" selected>{{ $i }}</option>
									@else
										<option value="{{ $i }}">{{ $i }}</option>
									@endif
								@endfor
							</optgroup>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="location" class="col-md-2 control-label">Location</label>

					<div class="col-md-10">
						<input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}" required/>
					</div>
				</div>

				<div class="form-group">
					<label for="description" class="col-md-2 control-label">Description</label>
					
					<div class="col-md-10">
						<textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
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
	</div>
@endsection