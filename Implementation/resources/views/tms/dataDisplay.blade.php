@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Package Booked Customer Information</h3>
		<br />

		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif

		<div align="right">
			<a href="{{url('tms/dataDisplay/pdf')}}" class="btn btn-primary">Convert into PDF</a>
			

		<div align="left">
			<a href="{!! url('tms/admin/dashboard') !!}"button type="submit" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
			<br />
			<br />


		<table class="table table-bordered">
				<tr>
					<th>User Id</th>
					<th>Package Id</th>
					<th>Booking Date</th>
					<th>Package starts</th>
					<th>Package Ends</th>
					<th>Number of People</th>
					
				</tr>
		@foreach($demos as $row)

				<tr>
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