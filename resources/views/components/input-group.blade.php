
@props([
    "type" => "",
    "icon" => "",
    "name" => "",
    "placeholder" => " "
])


<div class="input-group mb-2 mt-2">
    <label for="" class="input-group-text rounded-0">
        <span class="fa {{ $icon }}"></span>
    </label>
    @if ($type == '')
        <input type="text" class="form-control"   placeholder=" {{ $placeholder }} " name = "{{ $name }}" value="{{ $slot }}">
    @else
        <input type="{{ $type }}" class="form-control rounded-0"   placeholder=" {{ $placeholder }} " name = "{{ $name }}" value="{{ $slot }}">
    @endif
</div>
