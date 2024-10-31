<x-app-layout
    title="Buscar paradas"
    :notifications="$notifications"
    username='{{ Auth::user()->name }}'
    userrol='{{ Auth::user()->id_rol_fk }}'
    script_name='none'
>

    <div class="row clearfix d-flex justify-content-center mb-5">
        <div class="col-md-3">
            <button class="btn btn-success w-100 p-3 rounded-0" data-toggle="modal" data-target="#paradaSelectModal">
                <span class="fa fa-map-marker"></span>
                SELECCIONAR PARADA
            </button>
        </div>
    </div>


    @if ($data_query == "" || $data_query == [])

    @else

        <div class="row clearfix d-flex justify-content-center mb-5">
            <div class="col-md-8">
                <table class="table table-stripped table-bordered table-hover">
                    @foreach ($data_query as $dta)
                        <tr>
                            <td> <span class="fa fa-map-marker"></span> Nombre de la parda</td>
                            <td>
                                {{ $dta->nombre_parada }}
                            </td>
                        </tr>
                        <tr>
                            <td> <span class="fa fa-map"></span> Ruta</td>
                            <td>
                                {{ $dta->titulo }}
                            </td>
                        </tr>
                        <tr>
                            <td> <span class="fa fa-clock"></span> Horario de la ruta</td>
                            <td>
                                Hora de Inicio:{{ $dta->horario_desde }} Hora de termino: {{ $dta->horario_hasta }}
                            </td>
                        </tr>
                        <tr>
                            <td> <span class="fa fa-clock"></span> Hora de paso</td>
                            <td>
                                {{ $dta->hora_paso }}
                            </td>
                        </tr>

                        <tr>
                            <td> <span class="fa fa-bus"></span> Descripcion de Autobus</td>
                            <td>
                                PLACA: {{ $dta->cod_placa }} BUS: {{ $dta->marca }} {{ $dta->modelo }} {{ $dta->color }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="row clearfix d-flex justify-content-center mb-5">
            <div class="col-md-3">
                <a href="{{ route('parada.search') }}" class="btn btn-warning rounded-0 w-100 p-3">
                    <span class="fa fa-home"></span> volver
                </a>
            </div>
        </div>

    @endif







    <!-- Modal -->
    <div class="modal fade" id="paradaSelectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listado de Paradas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <x-app-data-table :columns="['Nombre Parada', 'Seleccionar']" color='primary' id="data-table-paradas">
                    @foreach ($paradas as $p)
                        <tr>
                            <td> {{ $p->nombre_parada }} </td>
                            <td>
                                <form action="{{ route('parada.result') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="text" name="id_parada" style="display: none;" value="{{ $p->id_parada }}">
                                    <button type="submit" class="btn btn-success btn-sm rounded-circle">
                                        <span class="fa fa-check"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </x-app-data-table>
            </div>
        </div>
        </div>
    </div>

    <script> $(document).ready(()=>$("#data-table-paradas").dataTable()) </script>

</x-app-layout>
