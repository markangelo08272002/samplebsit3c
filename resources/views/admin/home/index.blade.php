@extends('layouts.adminapp')

@section('title', 'Dashboard')

@section('content')
  <div class="container-fluid">
    <h3 class="mb-4">Dashboard Overview</h3>

    <div class="row">
      <div class="col-md-4">
        <div class="card text-white bg-primary">
          <div class="card-body">
            <h5 class="card-title">Total Users</h5>
            @if(App\Models\User::count() > 0)
                <p class="card-text display-4">{{ App\Models\User::count() }}</p>
            @else
                <p class="card-text display-4 text-muted">No users found</p>
            @endif
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-white bg-success">
          <div class="card-body">
            <h5 class="card-title">Events Posted</h5>
            <p class="card-text display-4">8</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-white bg-warning">
          <div class="card-body">
            <h5 class="card-title">Pending Approvals</h5>
            <p class="card-text display-4">3</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        Recent Activities
      </div>
      <div class="card-body">
        <ul>
          <li>New event “TechTalk 2025” added</li>
          <li>User Jane updated profile</li>
          <li>3 new messages received</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
