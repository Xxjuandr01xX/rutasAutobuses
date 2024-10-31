<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rutasModel;
use App\Models\rutasParadasModel;
use App\Models\NotificationModel;
use App\Models\busesModel;
use App\Models\paradasModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class rutasController extends Controller{

    public function index(){
        $rutas        = DB::select("select a.id as 'id_ruta',
                                    a.titulo as 'nombre_ruta',
                                    a.descripcion as 'descripcion_ruta',
                                    a.tipo_destino as 'tipo_destino',
                                    b.cod_placa as 'placa_bus',
                                    b.marca as 'marca_bus',
                                    b.modelo as 'modelo_bus',
                                    b.color as 'color_bus',
                                    a.horario_desde as 'h_desde',
                                    a.horario_hasta as 'h_hasta'
                                from rutas a INNER JOIN autobuses b ON a.id_bus_fk=b.id;");
        $notification = NotificationModel::all();
        return view('modules.rutas-home', [
            "rutas"         => $rutas,
            "notifications" => $notification
        ]);
    }

    public function create(){
        /**
         * formulario de creacion de una ruta
         */
        $buses          = busesModel::all();
        $paradas        = paradasModel::all();
        $notifications  = notificationModel::all();

        return view('modules.rutas-create', [
            "buses"   => $buses,
            "paradas" => $paradas
        ]);
    }

    public function drop_ruta($ruta){
        $rutas = rutasModel::find($ruta);
        if($rutas->delete()){
            if(DB::table('rutas_paradas')->where("id_ruta_fk","=","$ruta")->delete()){
                return to_route('rutas.home');
            }else{
                return to_route('Users.home');
            }
        }else{
            return to_route('Users.home');
        }
    }

    public function edit_ruta($ruta){
        $rutas = rutasModel::find($ruta);
        $paradas_ruta = DB::table('rutas_paradas')->where('id_ruta_fk', '=', $ruta)->get();
        $buses = busesModel::all();
        $paradas = paradasModel::all();
        return view('modules.rutas-edit', [
            "ruta" => $rutas,
            "parada_ruta" => $paradas_ruta,
            "paradas" => $paradas,
            "buses" => $buses
        ]);
    }


    public function stored(Request $r){
        $r->validate([
            "title"         =>  'required',
            "description"   =>  'required',
            "t_destino"     =>  'required',
            "bus"           =>  'required|numeric',
            "h_desde"       =>  'required',
            "h_hasta"       =>  'required',
            "parada"      =>  'required',
            "h_paso"      =>  'required'
        ]);
        $rutas = new rutasModel;
        $rutas->titulo          =  $r->title;
        $rutas->descripcion     =  $r->description;
        $rutas->tipo_destino    =  $r->t_destino;
        $rutas->id_bus_fk       =  $r->bus;
        $rutas->horario_desde   =  $r->h_desde;
        $rutas->horario_hasta   =  $r->h_hasta;
        if($rutas->save()){
            $id = rutasModel::latest('id')->first()->id;
            for($i=0; $i <= count($r->parada)-1; $i++){
                $rutasParadas = new rutasParadasModel;
                $rutasParadas->id_ruta_fk = $id;
                $rutasParadas->id_parada_fk = $r->parada[$i];
                $rutasParadas->hora_paso = $r->h_paso[$i];
                $rutasParadas->save();
            }
            return to_route('rutas.home');
        }else{
            return to_route('Users.home');
        }
    }
}
