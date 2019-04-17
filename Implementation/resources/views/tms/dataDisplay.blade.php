@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Package Booked  Information</h3>
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif
		<div align="center">
			<a  id="btn-convert" class="btn btn-danger" href="{{url('pdf')}}">Convert to PDF</a><br><br>		
		<div align="left">
			&nbsp;&nbsp;<a href="{!! url('/tms/admin/dashboard') !!}"button type="submit" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
			<br />
			<br />
		<table class="table table-bordered">
				<tr>
					<th>Booking Id</th>
					<th>User Id</th>
					<th>Package Id</th>
					<th>Booking Date</th>
					<th>Package starts</th>
					<th>Package Ends</th>
					<th>Number of People</th>				
				</tr>
		@foreach($demos as $row)

				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->userId}}</td>
					<td>{{$row->PackId}}</td>
					<td>{{$row->bookdate}}</td>
					<td>{{$row->from_date}}</td>
					<td>{{$row->to_date}}</td>
					<td>{{$row->nop}}</td>
				</tr>
@endforeach	
		</table>
	</div>
</div>
	</div>
</div>