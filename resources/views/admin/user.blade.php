@extends('layouts.adminapp')

@section('content')
<div class="container">
    <h2 class="mb-4">User Management</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($users->count() > 0)
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($users as $index => $user)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">Update</a>
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

    </table>
    @else
        <p>No users found.</p>
    @endif
</div>
@endsection
