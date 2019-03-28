@extends('master')
@section('content')

<div class="row">
<div class="container col-md-12">
	
		<br>
		<center>
<h1>User Information List </h1>
</center>
<br>
<div class="panel-heading">
	<form> 
		
         <input type="button" value="Print" onclick="window.print()" /> 
  
      </form>
      <br/>
      <br/>
 
      <script type="text/javascript">
			$("button").click(function (){
			window.print()

			});
		</script>
	</div>
	<br>

<table class="table table-bordered ">

<tr>

		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Nationality</th>
		<th>UserTypeId</th>
		<th>Email</th>
		<th>Password</th>
		


	</tr>
@foreach($users as $row)
<tr>

<td>{{ $row->name }}</td>
<td>{{ $row->username }}</td>
<td>{{ $row->address }}</td>
<td>{{ $row->phone }}</td>
<td>{{ $row->nationality }}</td>
<td>{{ $row->userTypeId }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->password }}</td>

</tr>
@endforeach

</table>
</div>
</div>
@endsection