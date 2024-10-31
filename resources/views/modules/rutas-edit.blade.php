<x-app-layout
    title="Actualizar Informacion de Rutas"
    :notifications="[]"
    username='{{ Auth::user()->name }}'
    userrol='{{ Auth::user()->id_rol_fk }}'
    script_name='none'
>

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


    <form action="{{ route('rutas.update', $ruta->id) }}" method = "POST">
        @csrf
        @method('PUT')

        <h6 class="text-center">
            <span class="fa fa-address-card"></span> Datos Generales
        </h6>

        <div class="row clearfix d-flex justify-content-center">
            <div class="col-md-8">
                <x-input-group type="text" icon="fa-address-card" name="title"
                    placeholder="Nombre de la Ruta"> {{ $ruta->titulo }} </x-input-group>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center">
            <div class="col-md-8">
                <div class="input-group mt-1 mb-2">
                    <label for="" class=" input-group-text rounded-0">
                        Descripcion
                    </label>
                    <textarea class="form-control rounded-0" name="description" cols="15" rows="5">
                        {{ $ruta->descripcion }}
                    </textarea>
                </div>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center">
            <div class="col-md-4">
                <div class="input-group mt-1 mb-2 w-100">
                    <label for="" class="input-group-text rounded-0">
                        <span class="fa fa-check"></span> Tipo de destino:
                    </label>

                    <select name="t_destino" id="" class="form-control">
                        <option value="SALIDA"> SALIDA </option>
                        <option value="REGRESO"> REGRESO </option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mt-1 mb-2 w-100">
                    <label for="" class=" input-group-text rounded-0">
                        <span class="fa fa-bus"></span>
                    </label>

                    <select name="bus" id="" class="form-control">
                        @foreach ($buses as $b)
                            <option value="{{ $b->id }}"> {{ $b->cod_placa }} - {{ $b->marca }} {{ $b->modelo }} {{ $b->color }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>



        <div class="row clearfix d-flex justify-content-center">
            <div class="col-md-4">
                <x-input-group type="time" icon="fa-clock" name="h_desde"
                    placeholder="Horario de Salida">
                    {{ $ruta->horario_desde }}
                </x-input-group>
            </div>

            <div class="col-md-4">
                <x-input-group type="time" icon="fa-clock" name="h_hasta"
                    placeholder="Horario de Llegada">
                    {{ $ruta->horario_hasta }}
                </x-input-group>
            </div>
        </div>

        <h6 class="text-center mt-3 mb-3">
            <span class="fa fa-map-marker"></span> Asignacion de Paradas
        </h6>

        <div id="container-paradas" class="mt-3 mb-3">
            @foreach ($parada_ruta as $pr)
                <div class="row clearfix d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="input-group w-100 mt-2">
                            <label for="" class="input-group-text">
                                <span class="fa fa-map-marker"></span>
                            </label>
                            <select name="parada[]" class="form-control rounded-0">
                                @foreach ($paradas as $p)
                                    @if ($pr->id_parada_fk == $p->id)
                                        <option value="{{ $p->id }}"> {{ $p->titulo }} </option>
                                    @endif
                                @endforeach
                                @foreach ($paradas as $p)
                                    @if ($pr->id_parada_fk != $p->id)
                                        <option value="{{ $p->id }}"> {{ $p->titulo }} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <x-input-group type="time" icon="fa-clock" name="h_paso[]"
                            placeholder="Hora de paso">
                            {{ $pr->hora_paso }}
                        </x-input-group>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="row clearfix d-flex justify-content-center mt-3">
            <div class="col-md-4">
                <x-btn-submit icon='fa-edit' color='warning' mensage='Actializar Informacion'></x-btn-submit>
            </div>
        </div>

    </form>

</x-app-layout>
