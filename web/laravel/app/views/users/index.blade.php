@extends('layouts.default')

@section('content')
    <h1>Users Summary</h1>
    <form action="{{ URL::to('users/create') }}" method="GET">
        <button type="submit" class="btn btn-success pull-right">
           <i class="fa fa-plus"></i> Create User
        </button>
    </form>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>#</th> <th>User Name</th> <th>User Email</th> <th> Action </th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td> {{ $user->id }} </td>
        <td>{{ $user->name }}</td>
        <td> {{ $user->email }}</td>
        <td>
            <form action="{{ URL::to('users/' . $user->id . '/edit') }}" method="GET">
                <button type="submit" class="btn btn-primary pull-right edit-button">
                    <i class="fa fa-edit"></i> Edit User
                </button>
            </form>
            <form action="{{ URL::to('users/' . $user->id . '/delete') }}" method="POST">
                <button type="submit" class="btn btn-danger pull-right">
                    <i class="fa fa-trash"></i> Delete User
                </button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@stop
