<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NuevoUsuarioRequest;
use App\Http\Requests\EditarUsuarioRequest;

class UsuarioController extends Controller
{
    public function index()
    {
        $tipo_usuario=Role::all()->pluck('description','id');
        return view('usuarios.listado',compact('tipo_usuario'));
    }

    public function create()
    {
        //
    }

    public function store(NuevoUsuarioRequest $request)
    {
        $usuario = User::create($request->except('tipo_usuario'));
        $usuario->roles()->attach($request->tipo_usuario);
        
        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        return User::with('roles')->find($id);
    }

    public function edit(User $user)
    {
        //
    }

    public function update(EditarUsuarioRequest $request,User $usuario)
    {
        if ($request->password != NULL) {
            $usuario->update($request->except('tipo_usuario'));
        }else{
            $usuario->update($request->except('tipo_usuario','password'));
        }
        $role = Role::find($request->tipo_usuario);
        $usuario->roles()->sync([$request->tipo_usuario]);
        
        return response()->json($usuario, 200);
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }
}
