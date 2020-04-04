<?php

namespace App\Http\Controllers\dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserPost;
use App\Http\Requests\UpdateUserPut;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function index()
    {
        $users = User::orderBy('id','asc')->paginate(10);
        return view('dashboard.usuarios.index', ['users' => $users]);
    }


  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.usuarios.crear', ['user' => new User()]);
    }


      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        ///Validado con Request/StoreUserPost
        User::create(
            [
                'name' => $request['name'],
                'apellido' => $request['apellido'],
                'rol' => 'admin', // rol de admin
                'email' => $request['email'],
                'password' => $request['password'],
            ]
        );
        return back()->with('status', 'Administrador creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.usuarios.ver', ["user" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.usuarios.actualizar', ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPut $request, User $user)
    {
        ///Validado con Request/UpdateUserPut
        if($request['pass1']==null){
            $user->update(
                [
                    'name' => $request['name'],
                    'apellido' => $request['apellido'],
                    'email' => $request['email'],
                    'rol'=>$request['rol']
                ]
            );
        }else{
            $user->update(
                [
                    'name' => $request['name'],
                    'apellido' => $request['apellido'],
                    'email' => $request['email'],
                    'rol'=>$request['rol'],
                    'password'=> Hash::make($request['pas1'])
                ]
            );

        }


        return back()->with('status', 'Usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuario eliminado con exito');
    }
}
