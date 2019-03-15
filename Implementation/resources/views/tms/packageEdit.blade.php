@extends('master')

@section('content')

<div class="row">
		<div class="col-md-12">
			<br />
			<h3>Edit Record</h3>
			<br />
			@if(count($errors)>0)

			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all()as $error)
					<li>{{$error}}</li>
			@endforeach
		</ul>
		@endif

			<form method="post" action="{!!url{'/packageEdit', {{ $programs->id)!!}">
@csrf
	<input type="hidden" name="_method" value="PATCH" />
	<div class="form-group">
		<input type="text" name="program_name" class="form-control" value="{{$program->program_name}}" placeholder="Enter package name" />
		</div>
	<div class="form-group">
		<input type="text" name="detail" class="form-control" value="{{$program->detail}}" placeholder="Enter package detail" />
		</div>
	<div class="form-group">
		<input type="text" name="image" class="form-control" value="{{$program->image}}" placeholder="Enter package image" />
		</div>
	<div class="form-group">
		<input type="text" name="price" class="form-control" value="{{$program->price}}" placeholder="Enter package price" />
		</div>
	<div class="form-group">
		<input type="text" name="hotel" class="form-control" value="{{$program->hotel}}" placeholder="Enter Hotel Name" />
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary"value="Edit" />
		</div>
	</form>

</div>

@endsection
