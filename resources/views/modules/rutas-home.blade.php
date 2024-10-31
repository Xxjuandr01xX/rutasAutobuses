<x-app-layout
    title="Listado de Rutas"
    :notifications="$notifications"
    username='{{ Auth::user()->name }}'
    userrol='{{ Auth::user()->id_rol_fk }}'
    script_name='none'
>


<div class="row ckearfix d-flex justify-content-end mt-3 mb-4">
    <div class="col-md-3">
        <a href="{{ route('rutas.create') }}" class="btn btn-sm btn-success p-3 w-100 rounded-0 shadow">
            <span class="fa fa-plus"></span> <span class="fa fa-map"></span> Registrar Nueva Ruta
        </a>
    </div>
</div>


<x-app-data-table
    :columns="['Titulo', 'Tipo Destino', 'Autobus', 'Hora salida', 'Hora Llegada', 'Opciones']"
    color='primary'
    id="data-table-rutas"
>

    @foreach ($rutas as $r)
        <tr>
            <td>{{ $r->nombre_ruta }}</td>
            <td>{{ $r->tipo_destino }}</td>
            <td>{{ $r->placa_bus }} - {{ $r->marca_bus }} {{ $r->modelo_bus }} COLOR : {{ $r->color_bus }}</td>
            <td>{{ $r->h_desde }}</td>
            <td>{{ $r->h_hasta }}</td>
            <td>
                <div class="btn-group">
                    <form action="{{ route('rutas.delete', $r->id_ruta) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <span class="fa fa-trash"></span>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</x-app-data-table>


<!--para inicializar datatable -->
<script> $(document).ready(()=>$("#data-table-rutas").dataTable()) </script>


</x-app-layout>
