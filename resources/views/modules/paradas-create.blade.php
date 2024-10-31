<x-app-layout title="Registro de Paradas" :notifications="[]" username='{{ Auth::user()->name }}' userrol='{{ Auth::user()->id_rol_fk }}' script_name='none'>

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

    <form action="{{ route('Paradas.stored') }}" method="POST" class="p-4">
        @csrf
        @method('POST')

        <div class="row clearfix d-flex justify-content-center mt-2 mb-2">
            <div class="col-md-8">
                <x-input-group type="text" icon="fa-address-card" name="title" placeholder="Nombre de la parada"></x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mt-2 mb-2">
            <div class="col-md-8">
                <div class="input-group mt-1 mb-2">
                    <label for="" class=" input-group-text rounded-0">
                        Descripcion
                    </label>
                    <textarea class="form-control rounded-0" name="description" cols="15" rows="5"></textarea>
                </div>
            </div>
        </div>


        <div class="row clearfix d-flex justify-content-center mt-2">
            <div class="col-md-4">
                <a href="{{ route('Paradas.listado') }}" class="btn btn-warning w-100">
                    Volver
                </a>
            </div>
            <div class="col-md-4">
                <x-btn-submit color="primary" icon="fa-save" mensage="Registrar"></x-btn-submit>
            </div>
        </div>
    </form>

</x-app-layout>
