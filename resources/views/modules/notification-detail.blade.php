<x-app-layout
    title="Notificaciones del Sistema"
    :notifications="$notifications"
    username='{{ Auth::user()->name }}'
    userrol='{{ Auth::user()->id_rol_fk }}'
    script_name='none'
>

<div class="container-fluid">
    <div class="row clearfix d-flex justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">
                <span class="text-success fa fa-check"></span> {{ $notification->title }}
            </h3>
        </div>
    </div>

    <div class="row clearfix d-flex justify-content-center mt-5 mb-5">
        <div class="col-md-6">
            <h4 class="text-justify text-center">
              {{ $notification->description }}
            </h4>
        </div>
    </div>

    <div class="row clearfix d-flex justify-content-center mt-5 mb-5">
        <div class="col-md-3">
            <form action="#" method="POST">
                @csrf
                @method('POST')
                <input type="text" name="notication_id" value="{{ $notification->id }}" style="visibility: hidden" />
                <button type="submit" class="btn btn-success btn-sm rounded-0 w-100 p-4">
                    <span class="fa fa-edit"></span> Marcar como leido
                </button>
            </form>
        </div>
    </div>
</div>


</x-app-layout>
