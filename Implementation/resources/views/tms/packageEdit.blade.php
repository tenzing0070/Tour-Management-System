@extends('master')
@section('content')
<div class="row">
		<div class="col-md-12">
			<br />
			<h3>Edit Record</h3>
			<br />
@foreach($program as $data)
			<form method="post" action="{{ url('tms/packageUpdate', $data->id) }}">
@csrf
	{{method_field('put')}}
	<input type="hidden" name="_method" value="PATCH" />
	<div class="form-group">
		<input type="text" name="id" class="form-control" value="{{$data->id}}" placeholder="Package ID" /disabled>
		</div>
	<div class="form-group">
		<input type="text" name="program_name" class="form-control" value="{{$data->program_name}}" placeholder="Enter package name" />
		</div>
	<div class="form-group">
		<input type="text" name="detail" class="form-control" value="{{$data->detail}}" placeholder="Enter package detail" />
		</div>
	<div class="form-group">
		<input type="file" name="image" class="form-control" placeholder="Enter package image" />
		<img src="/{{$data->image}}">
		</div>
	<div class="form-group">
		<input type="text" name="price" class="form-control" value="{{$data->price}}" placeholder="Enter package price" />
		</div>
	<div class="form-group">
		<input type="text" name="hotel" class="form-control" value="{{$data->hotel}}" placeholder="Enter Hotel Name" />
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary"value="Edit" />
		</div>
	</form>
	@endforeach

</div>
</div>

@endsection
