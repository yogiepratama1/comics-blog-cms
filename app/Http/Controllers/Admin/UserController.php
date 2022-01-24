<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.owner.users-index', [
            'users' => User::all(),
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.owner.users-edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'role_id' => 'required',
        ];
        $validatedData = $request->validate($rules);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/admin/dashboard')->with('berhasil', 'User telah diupdate');
    }
}
