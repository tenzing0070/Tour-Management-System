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
			<a href="{!! url('tms/admin/dashboard') !!}"button type="submit" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
			</div>
		</form>
	</div>
	<div class="col-md-12">
		<br />
		<h3 align="center">Picture Data</h3>
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif
		<div align="right">		
		<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Package Name</th>
					<th>Package Image</th>
					<th>Delete</th>

				</tr>
				@foreach($picture as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->pname}}</td>				
					<td>
							<img src="/{{$row->picture}}"  class="img-fluid image-thumbnail"  style="height:150px; width:200px">
					</td>				
					<td>
						<form method="post" class="delete_form" action="{{url('/tms/pictureAdmin',$row->id)}}">
						@csrf
						{!! method_field('DELETE') !!}
							<button type="submit" class="btn btn-danger">Delete</button> 
						</form>
						<!-- <a href="{{url('/tms/packageEdit',$row->id)}}">Delete</a> -->
					</td>
					<input type="hidden" name="_method" value="DELETE" />
											
				</tr>
				@endforeach	
		</table>
	</div>
</div>
	<!--  -->
@endsection
