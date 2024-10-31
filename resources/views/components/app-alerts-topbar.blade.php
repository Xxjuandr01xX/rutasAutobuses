@props([ "num_alerts" => ''])

<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        @if ($num_alerts < 1)
            <span class="badge badge-danger badge-counter"></span>
        @else
            <span class="badge badge-danger badge-counter">{{ $num_alerts }}</span>
        @endif
    </a>

    <!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header"> Centro de Alertas </h6>

        {{ $slot }}

        <a class="dropdown-item text-center small text-gray-500" href="#"> --- </a>
    </div>
</li>
