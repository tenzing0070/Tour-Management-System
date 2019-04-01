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
	<div class="form-group">
		<div align="center">
         <input type="button" value="Print" class="btn btn-danger"onclick="window.print()" /> <br><br>

         <div align="left">
        <a href="{!! url('tms/admin/dashboard') !!}"button type="submit" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
  
      </div>
      
 
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