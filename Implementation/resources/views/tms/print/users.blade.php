@extends('master')
<div class="row">
	<div class="col-md-12">
		<br />
		<h1 align="center">User Information List</h1>
		<br />
		@if($message=Session::get('success'))
		<div class="alert alert-success">
				<p>{{$message}}</p>
		</div>
		@endif
		<style>
		@media print {
 	 #printPageButton {
    	display: none;
  }
}
</style>

		<div align="center">
         <button id="printPageButton" class="btn btn-success "onclick="window.print();" />Print</button> <br><br>

         <div align="left">
        <a href="{!! url('tms/admin/dashboard') !!}"button id="printPageButton" class="btn btn-primary"  > 
                                    {{ __('Back') }}</a>
	<br><br><br>
	<table class="table table-bordered ">

<tr>
		<th>Id</th>
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
	<td>{{$row->id}}</td>
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
      <script type="text/javascript">
			$("button").click(function (){
			window.print()
			});
		</script>
</div>
</div>
</div>
