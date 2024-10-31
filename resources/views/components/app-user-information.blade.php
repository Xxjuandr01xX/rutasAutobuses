
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $slot }}</span>
        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <form action="{{ route('Users.profile') }}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="id" style="visibility: hidden; display:none;" value="{{ Auth::user()->id }}">
            <button class="dropdown-item">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Perfil
            </button>
        </form>

        <div class="dropdown-divider"></div>

        <!--data-toggle="modal" data-target="#logoutModal"-->

        <a class="dropdown-item" href="{{ route('Users.logout') }}">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Cerrar Session
        </a>
    </div>
</li>
