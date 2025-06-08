<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mostra o formulário de criação de usuário
    public function create()
    {
        return view('app.register');
    }

    // Armazena os dados do usuário
    public function store(UserRequest $request)
    {
        // valida os dados da requisição
        $data = $request->validated();
        // cadastra o usuário
        User::create($data);
        // redireciona em caso de sucesso
        return redirect()->route('user.create')->with('success', 'Cadastro realizado com sucesso! Faça login para acessar o sistema.');
    }

    // Mostra o formulário de edição de usuário
    public function edit()
    {
        $user = auth()->user();
        return view('app.users.edit', compact('user'));
    }

    // Atualiza os dados do usuário
    public function update(UserRequest $request)
    {
        // valida os dados da requisição
        $data = $request->validated();
        // atualiza o usuário
        auth()->user()->update($data);
        // redireciona em caso de sucesso
        return redirect()->route('user.edit')->with('success', 'Dados atualizados com sucesso!');

    }



}