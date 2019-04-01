@extends('layouts.my')
@section('content')
<center>
<br><br>
<a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Preview</a></center>
<script type="text/javascript">
$(document).ready(function(){
$('.btnprn').printPage();
});
</script>
<center>
<h1>User Information List</h1>
<table class="table" >
<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Nationality</th>
		<th>Email</th>
		<th>Password</th>
		<th>UserTypeId</th>
</tr>
 @foreach($users as $row)
<tr>
<td>{{ $row->name }}</td>
<td>{{ $row->username }}</td>
<td>{{ $row->address }}</td>
<td>{{ $row->phone }}</td>
<td>{{ $row->nationality }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->password }}</td>
<td>{{ $row->userTypeId }}</td> 
</tr>
@endforeach
</center>
@endsection