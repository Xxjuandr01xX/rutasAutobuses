<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\busesModel;

class busesController extends Controller{

    public function index(){
        $buses = busesModel::all();
        return view('modules.buses-index', [
            "buses" => $buses
        ]);
    }

    public function create(){
        return view('modules.buses-create');
    }

    public function stored(Request $request){
        $request->validate([
            "cod_placa"     => 'required',
            "marca"         => 'required|string|min:2',
            "modelo"        => 'required|string|min:2',
            "color"         => 'required|string|min:2',
            "nro_asientos"  => 'required'
        ]);
        $bus = new busesModel;
        $bus->cod_placa         = $request->cod_placa;
        $bus->marca             = $request->marca;
        $bus->modelo            = $request->modelo;
        $bus->color             = $request->color;
        $bus->cantidad_asientos = $request->nro_asientos;
        if($bus->save()){
            return to_route('buses.index');
        }else{
            return to_route('Users.home');
        }
    }

    public function delete_bus($bus){
        $buses = busesModel::find($bus);
        if($buses->delete()){
            return to_route('buses.index');
        }else{
            return to_route('Users.home');
        }
    }

    public function update_bus($bus){
        $buses = busesModel::find($bus);
        return view('modules.buses-update', [
            "bus" => $buses
        ]);
    }

    public function edit_bus(Request $request){
        $request->validate([
            "id"            => 'required',
            "cod_placa"     => 'required',
            "marca"         => 'required|string|min:2',
            "modelo"        => 'required|string|min:2',
            "color"         => 'required|string|min:2',
            "nro_asientos"  => 'required'
        ]);
        $bus = busesModel::find($request->id);
        $bus->cod_placa         = $request->cod_placa;
        $bus->marca             = $request->marca;
        $bus->modelo            = $request->modelo;
        $bus->color             = $request->color;
        $bus->cantidad_asientos = $request->nro_asientos;
        $bus->save();
        return to_route('buses.index');
    }

}
