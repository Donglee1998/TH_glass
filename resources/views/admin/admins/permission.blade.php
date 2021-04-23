@extends('admin.layouts.master')
@section('content')
	<table class="table table-striped">
    <thead>
      <tr>
      	<th>#</th>
        <th>Roles</th>
        <th style="width: 60%; text-align: center;">Permission</th>
        <th>Admin</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($admin as $acc)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$acc->role_name}}</td>
        <td>{{$acc->permission_name}}</td>
        <td>{{$acc->email}}</td>
      </tr>
     	@endforeach
    </tbody>
  </table>
	
@endsection