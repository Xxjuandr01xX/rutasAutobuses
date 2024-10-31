<x-app-layout title="Home" :notifications="[]" username="{{ Auth::user()->name }}" userrol="{{ Auth::user()->id_rol_fk }}" script_name="none">

    <h3>
        Has iniciado Session correctamente !
    </h3>

    <x-app-slider-content>
        <div class="carousel-item active">
            <img src="https://picsum.photos/seed/picsum/1084/800" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/seed/picsum/1084/800" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/seed/picsum/1084/800" class="d-block w-100" alt="...">
        </div>
    </x-app-slider-content>

</x-app-layout>
