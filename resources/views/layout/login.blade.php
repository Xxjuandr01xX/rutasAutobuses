<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Titulo de la plagina y enlaces a hojas de estilo y scripts-->
    <x-head-scripts> Inicio de Session </x-head-scripts>

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-4">
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
                                        <div class="col-md-4">
                                            <img src="/img/autobus.png" alt="" width="100" height="100">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                    </div>

                                    <form action="{{ route('Users.validate') }}" method="POST" class="user">
                                        @csrf
                                        @method('POST');
                                        <x-input-group type="email" placeholder="Ingrese su email" icon="fa-envelope"
                                            name="email"></x-input-group>
                                        <x-input-group type="password" placeholder="Ingrese su contrasenia"
                                            icon="fa-lock" name="password"></x-input-group>
                                        <x-btn-submit color='success' icon='fa-unlock'
                                            mensage='Ingresar'></x-btn-submit>
                                    </form>

                                    <div class="text-center mt-4">
                                        <a class="small mt-2 mb-2" href="{{ route('Users.create') }}">Crear Nueva Cuenta !</a>
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
