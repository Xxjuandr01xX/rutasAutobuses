@props([
    "color"   => "",
    "icon"    => "",
    "mensage" => "",
])

@if ($color == '')
    <button type="submit" class="btn btn-primary w-100 rounded-0 shadow">
        {{ $mensage }}
    </button>
@else
    <button type="submit" class="btn btn-{{ $color }} w-100 rounded-0 shadow">
        <span class="fa {{ $icon }}"></span> {{ $mensage }}
    </button>
@endif



