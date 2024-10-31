@props([
    "columns" => '',
    "id" => '',
    "color" => ''
])

<div class="table-resposive">
    <table class="table w-100 table-stripped table-hover shadow" id="{{ $id }}">
        <thead>
            <tr class="bg-{{ $color }} text-white text-center">
                @foreach ($columns as $x)
                    <th>
                       {{ $x }}
                    </th>
                @endforeach
            </tr>
        </thead>

        <tbody class="text-center">
            {{ $slot }}
        </tbody>
    </table>
</div>
