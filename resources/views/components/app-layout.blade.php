@props([
    "title"     => '',
    "username"  => '',
    "userrol"   => '',
    "script_name" => '',
    "notifications" => ''
])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="dashboard">
    <meta name="author" content="">
    <x-head-scripts> {{ $title }} </x-head-scripts>
</head>
<body id="page-top">
    <div id="wrapper">
        <x-app-menu type_user="{{ $userrol }}"></x-app-menu>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <x-app-user-information>
                            {{ $username }}
                        </x-app-user-information>
                    </ul>
                </nav>

                <div class="container-fluid">
                    <div class="row clearfix d-flex justify-content-center">
                        <div class="col-md-11">
                            <h1 class="h3 mb-4 text-gray-800"> {{ $title }} </h1>
                            <x-app-content-section> {{ $slot }} </x-app-content-section>
                        </div>
                    </div>
                </div>

            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ing. Juan Rincon</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    @if ($script_name == '' || $script_name == null || $script_name == 'none')

    @else
        <script src="/js/system/{{ $script_name }}.js"></script>
    @endif

</body>
</html>
