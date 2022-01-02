<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{

    public function index()
    {
        Gate::authorize('viewAny', User::class);

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        Gate::authorize('create', User::class);

        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        Gate::authorize('create', User::class);
        $data = $request->validate([
            'username' => 'required|min:2|max:20',
            'name' => 'required|min:10|max:100',
            'email' => 'required|email|unique:users|min:14|max:70',
            'roles' => 'required|array|min:1|exists:roles,id'
        ]);

        $user = new User;
        $user->name = $data["name"];
        $user->username = $data["username"];
        $user->email = $data["email"];
        $user->password = Hash::make('vivaandaz');
        $user->syncRoles($data["roles"]);
        $user->save();

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        Gate::authorize('update', $user);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        Gate::authorize('update', $user);
        $data = $request->validate([
            'username' => 'required|min:2|max:20',
            'name' => 'required|min:10|max:100',
            'email' => 'required|email|unique:users,email,' . $user->getRouteKey() . '|min:14|max:70',
            'roles' => 'required|array|min:1|exists:roles,id'
        ]);

        if ($user->email !== $data["email"]) {
            $user->email_verified_at = null;
        }

        $user->name = $data["name"];
        $user->username = $data["username"];
        $user->email = $data["email"];
        $user->syncRoles($data["roles"]);
        $user->save();

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        Gate::authorize('delete', $user);
        $user->delete();
        return redirect()->route('users.index');
    }
}
