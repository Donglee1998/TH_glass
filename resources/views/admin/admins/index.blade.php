@extends('admin.layouts.master')
@section('content')
<table style="border-spacing: 10px;width: 100%" align="center">
        <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
            <td colspan="4">
                <a href="{{ route('admin_addadmin') }}">Add Admin</a>
            </td>
        </tr>
        <tr class="header" style="text-align: center">
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Roles</td>
            <td>Actions</td>
        </tr>
        @foreach($admin as $acc)
        <tr style="text-align: center">
            <td>{{$loop->index+1}}</td>
            <td>{{$acc->name}}</td>
            <td>{{$acc->email}}</td>
            <td>{{$acc->role_name}}
            <td><a href="#">Edit</a> | <a href="#" class="delete">Delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection