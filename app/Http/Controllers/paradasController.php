<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paradasModel;

class paradasController extends Controller{

    public function index(){
        /**
         * Listado de paradas Registradas en el sistema
         */
        $paradas = paradasModel::all();
        return view('modules.paradas-index', [
            "paradas" => $paradas,
            "notifications" => []
        ]);
    }

    public function create(){
        return view('modules.paradas-create', [
            "notifications" => []
        ]);
    }

    public function stored(Request $request){
        $request->validate([
            "title"       => 'required',
            "description" => 'required'
        ]);
        $parada = new paradasModel;
        $parada->titulo = $request->title;
        $parada->descripcion = $request->description;
        if($parada->save()){
            return to_route('Paradas.listado');
        }else{
            return to_route('Users.home');
        }
    }

    public function delete_parada($parada, Request $request){
        $paradas = paradasModel::find($parada);
        if($paradas->delete()){
            return to_route('Paradas.listado');
        }else{
            return to_route('Users.home');
        }
    }

    public function update_parada($parada, Request $request){
        $paradas = paradasModel::find($parada);
        return view('modules.paradas-update', [
            "paradas" => $paradas
        ]);
    }

    public function edit_parada(Request $request){
        $request->validate([
            "id"          => 'required',
            "title"       => 'required',
            "description" => 'required'
        ]);
        $paradas = paradasModel::find($request->id);
        $paradas->titulo = $request->title;
        $paradas->descripcion = $request->description;
        if($paradas->save()){
            return to_route('Paradas.listado');
        }else{
            return to_route('Users.home');
        }
    }

}
