<x-app-layout title="Buses" :notifications="[]" username='{{ Auth::user()->name }}' userrol='{{ Auth::user()->id_rol_fk }}' script_name='none'>

    <div class="row ckearfix d-flex justify-content-end mt-3 mb-4">
        <div class="col-md-2">
            <a href="{{ route('buses.create') }}" class="btn btn-sm btn-success w-100 rounded-0 shadow">
                <span class="fa fa-plus"></span> Agregar Buses
            </a>
        </div>
    </div>

    <x-app-data-table :columns="['Marca', 'Modelo', 'Placa', 'color', 'Nro asientos', 'Opciones']" color='primary' id="data-table-buses">
        @foreach ($buses as $b)
            <tr>
                <td>{{ $b->marca }}</td>
                <td>{{ $b->modelo }}</td>
                <td>{{ $b->cod_placa }}</td>
                <td>{{ $b->color }}</td>
                <td>{{ $b->cantidad_asientos }}</td>
                <td>
                    <div class="btn-group">
                        <form action="{{ route('buses.delete', $b->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <span class="fa fa-trash"></span>
                            </button>
                        </form>
                        <a href="{{ route('buses.update', $b->id) }}" class="btn btn-warning btn-sm">
                            <span class="fa fa-edit"></span>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-app-data-table>


    <!--para inicializar datatable -->
    <script> $(document).ready(()=>$("#data-table-buses").dataTable()) </script>
</x-app-layout>
