@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row mb-3">
            <div class="col-12">
                <form method="GET" action="{{ route('users.index') }}" class="row g-2 align-items-center">
                    <div class="col-sm-8">
                        <input type="text" name="query" value="{{ old('query', $search ?? request('query')) }}"
                            class="form-control" placeholder="Search by name or email">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Clear</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection