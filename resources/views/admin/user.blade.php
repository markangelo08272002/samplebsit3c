@extends('layouts.adminapp')

@section('content')
<div class="container">
    <h2 class="mb-4">User Management</h2>



    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>

    </table>
</div>
@endsection
