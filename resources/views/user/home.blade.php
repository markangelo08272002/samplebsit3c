@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<h2 class="mb-4">Welcome, {{ auth()->user()->name ?? 'John Doe' }} 👋</h2>

<div class="row mb-4">
  <div class="col-md-4">
    <div class="card text-white bg-primary mb-3">
      <div class="card-body">
        <h5 class="card-title">Total Posts</h5>
        <p class="display-6">34</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <h5 class="card-title">Messages</h5>
        <p class="display-6">12</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card text-white bg-warning mb-3">
      <div class="card-body">
        <h5 class="card-title">Notifications</h5>
        <p class="display-6">5</p>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">Recent Activity</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">📄 Posted "Laravel Tips & Tricks" — 2 hours ago</li>
    <li class="list-group-item">💬 Received new message from Alice — 4 hours ago</li>
    <li class="list-group-item">✅ Updated profile info — Yesterday</li>
  </ul>
</div>
@endsection
