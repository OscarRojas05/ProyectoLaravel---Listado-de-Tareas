<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body class="bg-light">
    <div class="container shadow bg-white my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Mis tareas
                </h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('tarea.create') }}" class"btn btn-link">Crear nueva tarea</a>
                <a href="{{ route('tarea.index') }}" class"btn btn-link">Listar tareas</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>