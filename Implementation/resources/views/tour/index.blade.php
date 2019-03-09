@extend('master')

@section('contect')

<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Package Data</h3>
		<br />
		<table class="table table-bordered">
				<tr>
					<th>Package Name</th>
					<th>Package Details</th>
					<th>Package Image</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				@foreach($programs as $row)
				<tr>
					<td>{{$row['program_name']}}</td>
					<td>{{$row['detail']}}</td>
					<td>{{$row['image']}}</td>
					<td></td>
					<td></td>
					
				</tr>
				@endforeach
		</table>
	</div>
</div>
@endsection