<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role_id',1)->paginate(15);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 1;
        $user = User::create($data);
        return redirect()->route('admin.users.index')
            ->banner('Usuário cadastrado com sucesso!');
    }

    public function edit($user)
    {
        $user = User::findOrFail($user);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $user)
    {
        $data = $request->all();
        $user = User::findOrFail($user);
        $user->update($data);
        return redirect()->route('admin.users.index')
            ->banner('Usuário atualizado com sucesso!');
    }

    public function destroy($user)
    {
        $user = User::findOrFail($user);
        $user->delete();
        return redirect()->route('admin.users.index')
            ->banner('Usuário deletado com sucesso!');
    }

}
