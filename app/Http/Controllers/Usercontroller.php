<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use laracast\flash\flash;
use App\Http\Requests\UserRequest;


class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('Cod_usuario', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash("Se ha  ". $user->Nom_usuario. " de forma exitosa")->success();
        return redirect()->route('Usuarios.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Cod_usuario)
    {
        $user = User::find($Cod_usuario);
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Cod_usuario)
    {
        $user = User::find($Cod_usuario);
        $user->fill($request->all());
        $user->save();
        flash('El usuario '.  $user->Nom_usuario   . ' ah sido Editado de forma exitosa')->error();  

        return redirect()->route('Usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cod_usuario)
    {
        $user = User::find($Cod_usuario);
        $user->delete(); 

        flash('El usuario '.  $user->name  . ' ah sido borrado de forma exitosa')->error();  
         return redirect()->route('Usuarios.index');
    }
}
