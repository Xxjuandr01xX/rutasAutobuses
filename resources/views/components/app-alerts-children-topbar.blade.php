@props(['icon' => '', "title" => '', "description" => '', "id" => ''])

<a class="dropdown-item d-flex align-items-center" href="{{ route('notification.detail',$id) }}">
    <div class="mr-3">
        <div class="icon-circle bg-primary">
            <i class="fas {{ $icon }} text-white"></i>
        </div>
    </div>
    <div>
        <div class="small text-gray-500">{{ $title }}</div>
        <span class="font-weight-bold">{{ $description }}</span>
    </div>
</a>
