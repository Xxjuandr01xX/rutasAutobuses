<x-app-layout title="Paradas" :notifications="[]" username='{{ Auth::user()->name }}' userrol='{{ Auth::user()->id_rol_fk }}' script_name='none'>

    <div class="row ckearfix d-flex justify-content-end mt-3 mb-4">
        <div class="col-md-2">
            <a href="{{ route('Paradas.create') }}" class="btn btn-sm btn-success w-100 rounded-0 shadow">
                <span class="fa fa-plus"></span> Agregar Parada
            </a>
        </div>
    </div>

    <div class="p-3">
        <x-app-data-table :columns="['Nombre', 'Descripcion', 'Opciones']" color='primary' id="data-table-paradas">
            @foreach ($paradas as $p)
                <tr>
                    <td>{{ $p->titulo }}</td>
                    <td>{{ $p->descripcion }}</td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('Parada.delete', $p->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </form>
                            <a href="{{ route('Paradas.update', $p->id) }}" class="btn btn-warning btn-sm">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-app-data-table>
    </div>




    <!--para inicializar datatable -->
    <script> $(document).ready(()=>$("#data-table-paradas").dataTable()) </script>
</x-app-layout>
