<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('query');

        $users = User::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->orderBy('id')
            ->paginate(10)->onEachSide(1)
            ->appends(['query' => $search]);

        return view('user-without-livewire.index', compact('users', 'search'));
    }

    public function show(User $user)
    {
        return view('user-without-livewire.show', compact('user'));
    }

    public function search(Request $request)
    {
        return redirect()->route('users.index', ['query' => $request->input('query')]);
    }
}
