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
		<div align="right">
			<a  id="btn-convert" class="btn btn-md btn-primary-outline display-7" style="border-radius: 45px;" href="{{url('tms/index1')}}">Back to HomePage</a>
			<br> <br> <br>

		<table class="table table-bordered">
				<tr>
					<th>Booking Id</th>
					<th>User Id</th>
					<th>Package Id</th>
					<th>Booking Date</th>
					<th>Package starts</th>
					<th>Package Ends</th>
					<th>Number of People</th>
					<th>Package Name</th>
					<th>Price/Person</th>
					<th>Hotel</th>
					<th>Total Amount</th>
				</tr>
		@foreach($demos as $row)

				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->userId}}</td>
					<td>{{$row->PackId}}</td>
					<td>{{$row->bookdate}}</td>
					<td>{{$row->from_date}}</td>
					<td>{{$row->to_date}}</td>
					<td id="n">{{$row->nop}}</td>
					<td>{{$row->program_name}}</td>
					<td id="p">{{$row->price}}</td>
					<td>{{$row->hotel}}</td>
					<td id="tot"></td>

				</tr>

				@endforeach	
		</table>
		<script type="text/javascript">
			var p=document.getElementById("p").textContent;
			var n=document.getElementById("n").textContent;
			var cal=p*n;
			document.getElementById("tot").textContent=cal;
		</script>

</div>

	</div>
</div>