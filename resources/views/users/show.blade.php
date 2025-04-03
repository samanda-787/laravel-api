@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>User Details</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Created At:</strong> {{ $user->created_at->format('M d, Y') }}</p>
            
            <a href="{{ route('users.index') }}" class="btn btn-primary">
                Back to Users List
            </a>
        </div>
    </div>
</div>
@endsection