<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NuevoUsuarioRequest;
use App\Http\Requests\EditarUsuarioAdministradorRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_usuario=Role::all()->pluck('description','id');
        return view('usuarios.listado',compact('tipo_usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NuevoUsuarioRequest $request)
    {
        $usuario = User::create($request->except('tipo_usuario'));
        
        return response()->json($usuario, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(EditarUsuarioAdministradorRequest $request, User $user)
    {
        User::findOrFail($user->id)->update($request->except('_token'));
        return redirect()->action(
            'Admin\UsuarioController@index'
        )->with('exito', 'El administrador ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::findOrFail($user->id)->delete();
        return redirect()->action(
             'Admin\UsuarioController@index'
        )->with('exito', 'El administrador ha sido eliminado');
    }
}
