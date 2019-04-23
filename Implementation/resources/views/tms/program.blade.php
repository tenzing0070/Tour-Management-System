@extends('master')
@section('content') 
<div class="row">
	<div class ="clo-md-12">
		<br />
		<h3 align="center">Add Package details</h3>
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
		<form method="post" action="{{url('/tms/program')}}" enctype="multipart/form-data">
@csrf
			<div class="form-group">
				<input type="text" name="program_name" class="form-control" placeholder="Enter Program Name" />
				<br>
				<label>Details</label>
				<textarea type="text" name="detail" class="form-control" cols="30" rows="5" value="Enter package detail" /> </textarea>

				<input type="file" name="image" class="form-control" placeholder="Enter image" />
				<input type="text" name="price" class="form-control" placeholder="Enter price" />
				<input type="text" name="hotel" class="form-control" placeholder="Enter Hotel Name" />
			</div>
			<div class="form-group">
					<input type="submit" class="btn tbn-danger" />


			<a href="{!! url('tms/packageData') !!}"button type="submit" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
			</div>

		</form>
	</div>

</div>
@endsection