@extends('master')

@section('content')


<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Receipt</h3>
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif

<table class="table table-bordered">
				<tr>
					<th>Booking ID</th>
					<th>User Id</th>
					<th>Package Id</th>
					<th>Booking Date</th>
					<th>Package starts</th>
					<th>Package Ends</th>
					<th>Number of People</th>
					<th>Package Name</th>
					<th>Package Details</th>
					<th>Package Cost</th>
					<th>Hotel</th>
					<th>vat</th>
					<th>Total Cost</th>	
					
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