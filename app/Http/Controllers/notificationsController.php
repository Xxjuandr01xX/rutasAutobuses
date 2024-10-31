<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rutasModel;
use App\Models\rutasParadasModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\NotificationModel;

class notificationsController extends Controller{

    public function detail($notification){
        ///se valida si el usuario tiene notificaciones pendientes
        $noti = DB::select("select a.id_notification_fk as 'id_notificacion',
                                   b.title              as 'title',
                                   b.description        as 'descripcion'
                            from notification_leidas a INNER JOIN notification b ON a.id_notification_fk=b.id
                            WHERE a.ind_leido NOT IN(1)
                            AND a.id_notification_fk=b.id
                            AND a.id_usuario_fk=".Auth::user()->id);

        $notifications = NotificationModel::find($notification);

        return view('modules.notification-detail', [
            "notification" => $notifications,
            "notifications" => $noti
        ]);
    }

    public function viewed(Request $request){

    }
}
