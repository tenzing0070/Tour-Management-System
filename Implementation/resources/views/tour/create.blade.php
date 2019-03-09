@extends('master')
@section('content') 
<div class="row">
	<div class ="clo-md-12">
		<br />
		<h3 align="center">Add Package details</h3>
		<br />
		<form method="post" action="{{url('/tms/package')}}">
			<div class="form-group">
				<input type="text" name="package_name" class="form-control" placeholder="Enter Program Name" />
				<input type="text" name="package_detail" class="form-control" placeholder="Enter package detail" />
			</div>
			<div class="form-group">
					<input type="submit" class="btn tbn-primary" />
			</div>
		</form>
	</div>

</div>
@endsection