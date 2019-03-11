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
					<th>Package Price</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				@foreach($programs as $row)

				<tr>
					<td>{{$row->program_name}}</td>
					<td>{{$row->detail}}</td>
					<td>
							<img src="/{{$row->image}}"  class="img-fluid image-thumbnail"  style="height:150px; width:200px">
					</td>
					<td>{{$row->price}}</td>
					<td>
						<a href="{{url('/tms/packageEdit',$row->id)}}">Edit</a>
					</td>
					<td>
						<form method="post" class="delete_form" action="{{url('/tms/packageEdit',$row->id)}}">


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
</script>
@endsection