@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                User Details
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="card-text"><strong>Created:</strong> {{ $user->created_at->format('M d, Y') }}</p>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to list</a>
            </div>
        </div>
    </div>
@endsection