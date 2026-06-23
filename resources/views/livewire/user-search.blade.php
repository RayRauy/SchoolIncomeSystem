<div class="container mt-3">
    <div class="container">
        <div class="row justify-content-start mb-2">
            <div class="col-md-6">
                <div class="search-container">
                    <input wire:model.live.debounce.200ms="search" 
                    type="text" class="form-control search-input" placeholder="Search...">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $users->links("pagination::bootstrap-5") }}
    </div>
</div>