<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserSearch extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user-search', [
            'users' => User::query()->where('name', 'like', "%{$this->search}%")->paginate(10)->onEachSide(1),
        ]);
    }
}
