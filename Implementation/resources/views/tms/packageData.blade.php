@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br />
		<h3 align="center">Package Data</h3>
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif

		<div align="right">
			<a href="{{url('/tms/program')}}" class="btn btn-primary">Add</a>
			<br />
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
					<td>{{$row->program_name}}</td>
					<td>{{$row->detail}}</td>
					<td>{{$row->image}}</td>
					<td><a href="
						{{action('ProgramController@edit', '$row->id')}}">Edit</a></td>

				

				@endforeach	
		</table>
	</div>
</div>


</div>
<<!-- script>
	$(document).ready(function(){


		$('.delete_form').on('submit',function(){
				if(confirm("Are you sure you want to delete it?"))
				{
					return true;
				}
		});
		else
		{
			return false;
		}
	});
)};
</script> -->
@endsection