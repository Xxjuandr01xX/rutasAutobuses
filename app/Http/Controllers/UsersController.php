<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\userDataRequest;
use App\Models\User;
use App\Models\PersonDataModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller{

    public function index(){
        //formulario para validacion de usuario
        return view('layout.login');
    }

    public function home(){
        /**
         * Funcion para ir al Dashborad principal
         */
        return view('modules.home');
    }

    public function logOut(Request $rq){
        $rq>session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function validateUser(LoginUserRequest $rq){
        $credenciales = [
            'email' => $rq->email,
            'password' => $rq->password
        ];
        if(Auth::attempt($credenciales)){
            return to_route('Users.home');
        }else{
            return to_route('Users.index');
        }
    }

    public function register(){
        //Formulario para registro de usuarios.
        return view('layout.registro');
    }

    public function get_profile(Request $r){
        $userTableData   = User::find($r->id);
        $personTableData = PersonDataModel::find($userTableData->id_person_fk);
        return view('modules.users-profile', [
            "persondata" => $personTableData,
            "userdata" => $userTableData
        ]);
    }

    public function update_profile(Request $request){
        $request->validate([
            "ced_ide"   =>  'required|numeric',
            "nombre"    =>  'required|string',
            "email"     =>  'required|string',
            "phone"     =>  'required|numeric',
            "username"  =>  'required|string',
            "password"  =>  'required',
            "id"        =>  'required|numeric'
        ]);
        $usuario = User::find($request->id);
        $persona = PersonDataModel::find($usuario->id_person_fk);
        $usuario->name = $request->username;
        $usuario->password = Hash::make($request->password);
        $usuario->email = $request->email;
        if($usuario->save()){
            $persona->nombre_apellido = $request->nombre;
            $persona->cedula = $request->ced_ide;
            $persona->email = $request->email;
            $persona->telefono = $request->phone;
            if($persona->save()){
                return to_route('Users.home');
            }else{
                return "NULL";
            }
        }else{
            return "FAIL";
        }
    }

    public function storesUser(userDataRequest $rq){
        $person = new PersonDataModel;
        $person->nombre_apellido = $rq->nombre." ".$rq->apellido;
        $person->cedula          = $rq->ced_ide;
        $person->email           = $rq->email;
        $person->telefono        = $rq->telefono;
        if($person->save()){
            $id = PersonDataModel::latest('id')->first();
            $usuario = new User;
            $usuario->name          = $rq->username;
            $usuario->id_person_fk  = $id->id;
            $usuario->email         = $rq->email;
            $usuario->id_rol_fk         = 2;
            $usuario->password      = Hash::make($rq->password);
            if($usuario->save()){
                return redirect('/');
            }else{
                return "no paso por user";
            }
        }else{
            return "no paso por person";
        }
    }
}
