<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.index", ['users' => $users]);
    }

    public function create(User $user)
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        // Validação dos dados com mensagens personalizadas
        $validatedData = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:user,email',
    'password' => 'required|string|min:8 | max:20',
],
    [
        'email.unique' => 'Este email já existe. Por favor insira um email diferente.',
    ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'Usuário cadastrado com Sucesso!');
    }

    public function show(User $user)
    {
        return view("users.show", ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view("users.edit", ['user' => $user]);
    }

    public function update(User $user)
    {
        $user->fill(request()->all());
        $user->save();
        return redirect()->route('users.index')->with('success', 'Usuário atualizado com Sucesso!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuário deletado com Sucesso!');
    }
}
