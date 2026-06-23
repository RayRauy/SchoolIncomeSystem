<div class="container mt-3">
    <div class="topbar-custom d-flex flex-wrap align-items-center gap-2" id="filters">
        {{-- Left Side --}}
        <div class="flex align-items-center mb-2">
            <div class="search-container mb-0">
                <input wire:model.live.debounce.200ms="userSearch" type="text" class="form-control search-input mb-0"
                    placeholder="Search...">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>

        <div class="flex align-items-center mb-2 filter-container mb-2">
            <div class="dropdown filter-container ms-auto">
                <!-- Button -->
                <button class="form-select search-input mb-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Sort By
                </button>

                <!-- Menu -->
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                    @foreach (['ID', 'Name', 'Email'] as $option)
                        <li>
                            <button class="dropdown-item {{ $sortBy == $option ? 'active' : '' }}"
                                wire:click="$set('sortBy', {{ $option }})">
                                Sort By {{ $option }}
                            </button>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        {{-- Per Page Far Right --}}
        <div class="flex align-items-center mb-2 filter-container ms-auto">
            <div class="dropdown filter-container ms-auto">
                <!-- Button -->
                <button class="form-select search-input mb-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ $perPage }} per page
                </button>

                <!-- Menu -->
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                    @foreach ([10, 15, 20] as $size)
                        <li>
                            <button class="dropdown-item {{ $perPage == $size ? 'active' : '' }}"
                                wire:click="$set('perPage', {{ $size }})">
                                {{ $size }} per page
                            </button>
                        </li>
                    @endforeach
                </ul>

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