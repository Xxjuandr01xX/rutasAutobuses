<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Titulo de la plagina y enlaces a hojas de estilo y scripts-->
    <x-head-scripts> Registro de Nuevo Usuario </x-head-scripts>

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="p-5">

                                    <!--Alertas de Validaciones-->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="row clearfix d-flex justify-content-center mb-5 mt-5">
                                        <div class="col-md-2">
                                            <img src="/img/autobus.png" alt="" width="100" height="100">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrar Nuevo Usuario</h1>
                                    </div>

                                    <form action="{{ route('Users.stored') }}" method="POST" class="user">
                                        @csrf
                                        @method('POST');
                                        <div class="row clearfix d-flex justify-content-center">
                                            <div class="col-md-6">
                                                <x-input-group type="text" placeholder="Nombre" icon="fa-user" name="nombre"></x-input-group>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input-group type="text" placeholder="Apellido" icon="fa-user" name="apellido"></x-input-group>
                                            </div>
                                        </div>

                                        <x-input-group type="number" placeholder="Cedula" icon="fa-address-card" name="ced_ide"></x-input-group>

                                        <div class="row clearfix d-flex justify-content-center">
                                            <div class="col-md-6">
                                                <x-input-group type="text" placeholder="Telefono" icon="fa-phone" name="telefono"></x-input-group>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input-group type="mail" placeholder="correo" icon="fa-envelope" name="email"></x-input-group>
                                            </div>
                                        </div>

                                        <div class="row clearfix d-flex justify-content-center">
                                            <div class="col-md-6">
                                                <x-input-group type="text" placeholder="nombre de usuario" icon="fa-user" name="username"></x-input-group>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input-group type="password" placeholder="contresenia" icon="fa-lock" name="password"></x-input-group>
                                            </div>
                                        </div>


                                        <x-btn-submit color='warning' icon='fa-save' mensage='Registrar'></x-btn-submit>
                                    </form>

                                    <div class="text-center">
                                        <a class="small" href="/"> Volver al Inicio de Session</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>\

        </div>
    </div>
</body>

</html>
