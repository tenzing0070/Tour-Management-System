@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Comment  Information</h3>
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif		
		<div align="left">
			&nbsp;&nbsp;<a href="{!! url('/tms/admin/dashboard') !!}"button type="submit" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
			<br />
			<br />
		<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Your Comment</th>
				</tr>
		@foreach($contacts as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->email}}</td>
					<td>{{$row->address}}</td>
					<td>{{$row->comment}}</td>
				</tr>
				
				@endforeach	
		</table>
	</div>
</div>

	</div>
@endsection