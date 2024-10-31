<x-app-layout title="Perfil de Usuario" :notifications="[]" username="{{ Auth::user()->name }}" userrol="{{ Auth::user()->id_rol_fk }}" script_name="none">

    <form action="{{ route('User.update') }}" method="POST">
        @csrf
        @method('POST')

        <input type="text" name="id" value="{{ Auth::user()->id }}" style="visibility: hidden; display:none;">

        <div class="row clearfix d-flex justify-content-center mt-3 mb-3">
            <div class="col-md-4">
                <x-input-group type="number" icon="fa-address-card" name="ced_ide" placeholder="cedula de identidad">
                    {{ $persondata->cedula }}
                </x-input-group>
            </div>
            <div class="col-md-4">
                <x-input-group type="text"   icon="fa-user" name="nombre" placeholder="Nombre Completo">
                    {{ $persondata->nombre_apellido }}
                </x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-3 mb-3">
            <div class="col-md-4">
                <x-input-group type="email" icon="fa-envelope" name="email" placeholder="Correo Electronico">
                    {{ $persondata->email }}
                </x-input-group>
            </div>
            <div class="col-md-4">
                <x-input-group type="number" icon="fa-phone" name="phone" placeholder="Numero Telefonico">
                    {{ $persondata->telefono }}
                </x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-3 mb-3">
            <div class="col-md-4">
                <x-input-group type="text" icon="fa-user" name="username" placeholder="Nombre de Usuario">
                    {{ $userdata->name }}
                </x-input-group>
            </div>
            <div class="col-md-4">
                <x-input-group type="password" icon="fa-lock" name="password" placeholder="Controsenia"></x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-5 mb-3">
            <div class="col-md-8">
                <x-btn-submit icon='fa-edit' color='warning' mensage='Actualizar'></x-btn-submit>
            </div>
        </div>

    </form>

</x-app-layout>
