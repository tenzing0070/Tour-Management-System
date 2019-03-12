@extends('master')
@section('content') 
<div class="row">
	<div class ="clo-md-12">
		<br />
		<h3 align="center">Upload Picture</h3>
		<br />
		 @if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@if(Session::has('success'))
			<div class="alert alert-success">
			<p>{{\Session::get('success')}}</p>
		</div>
		@endif
		@if(Session::has('itemNameExists'))
			<div class="alert alert-success">
			<p>{{\Session::get('itemNameExists')}}</p>
		</div>
		@endif

		<form method="post" action="{{url('/tms/pictureAdmin')}}" enctype="multipart/form-data">
@csrf
	<div class="form-group">
		<input type="text" name="pname" class="form-control" placeholder="Enter Picture Name" />
		<input type="file" name="image" class="form-control" placeholder="Enter image" />
		</div>
			<div class="form-group">
					<input type="Submit" class="btn tbn-primary" />
			</div>
		</form>
	</div>

</div>


	<!--  -->
@endsection
