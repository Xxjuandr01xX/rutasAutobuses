<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserQueryesController extends Controller{

    public function paradaFormQuery(){
        $paradas_list = DB::select("select a.id_parada_fk as 'id_parada', b.titulo as 'nombre_parada' from rutas_paradas a INNER JOIN paradas b
                                    ON a.id_parada_fk=b.id
                                    INNER JOIN rutas c
                                    ON a.id_ruta_fk=c.id");

        return view('modules.search-parada', [
            "notifications" => [],
            "paradas" => $paradas_list,
            "data_query" => []
        ]);

    }

    public function paradasTableResult(Request $request){
        $request->validate([
            "id_parada" => 'required|numeric|min:1'
        ]);

        $id_parada = $request->id_parada;

        //lista de paradas anexadas a las rutas
        $paradas_list = DB::select("select a.id_parada_fk as 'id_parada', b.titulo as 'nombre_parada' from rutas_paradas a INNER JOIN paradas b
                                    ON a.id_parada_fk=b.id
                                    INNER JOIN rutas c
                                    ON a.id_ruta_fk=c.id");

        //Inner join
        $arrDtaParada = DB::select("select a.id_parada_fk,
                                            a.hora_paso,
                                            b.id as 'id_ruta',
                                            b.titulo,
                                            b.horario_desde,
                                            b.horario_hasta,
                                            c.cod_placa,
                                            c.marca,
                                            c.modelo,
                                            c.color,
                                            d.titulo as 'nombre_parada'
                                    from rutas_paradas a
                                    inner join rutas b on a.id_ruta_fk = b.id inner join autobuses c
                                                    on b.id_bus_fk  = c.id inner join paradas d
                                                    on a.id_parada_fk = d.id
                                    where a.id_parada_fk= ".$id_parada." and b.id=a.id_ruta_fk
                        and b.id_bus_fk=c.id");

        return view('modules.search-parada', [
            "notifications" => [],
            "paradas"       => $paradas_list,
            "data_query"    => $arrDtaParada
        ]);
    }

    public function rutasViewQuery(){

    }

}
