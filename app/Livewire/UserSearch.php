<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserSearch extends Component
{
    use WithPagination;
    public $userSearch = '';
    public $perPage = 10;
    public $sortBy = '';

    public function updatingUserSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user-search', [
            'users' => User::query()->where('name', 'LIKE', "%{$this->userSearch}%")->paginate($this->perPage)->onEachSide(1),
        ]);
    }
}
