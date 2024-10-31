<x-app-layout title="Registro de Buses" :notifications="[]" username='{{ Auth::user()->name }}' userrol='{{ Auth::user()->id_rol_fk }}' script_name='none'>

    <!--Alertas de Validaciones-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buses.stored') }}" method="POST">
        @csrf
        @method('POST')

        <div class="row clearfix d-flex justify-content-center mt-2 mb-2">
            <div class="col-md-3">
                <x-input-group type="text" icon="fa-address-card" name="cod_placa" placeholder="Codigo de placa"></x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-2 mb-2">
            <div class="col-md-4">
                <x-input-group type="text" icon="fa-bus" name="marca" placeholder="Marca"></x-input-group>
            </div>
            <div class="col-md-4">
                <x-input-group type="text" icon="fa-bus" name="modelo" placeholder="Modelo"></x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-2 mb-2">
            <div class="col-md-4">
                <x-input-group type="text" icon="fa-bus" name="color" placeholder="color"></x-input-group>
            </div>
            <div class="col-md-4">
                <x-input-group type="number" icon="fa-bus" name="nro_asientos" placeholder="numero de asientos"></x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-6">
                <x-btn-submit color="primary" icon="fa-save" mensage="Registrar"></x-btn-submit>
            </div>
        </div>

    </form>

</x-app-layout>
