@extends('tema.app')
@section('title', 'Tarea')

@section('contenido')
    <h3>
        <i>{{ $tarea->nombre }}</i>
    </h3>
    <ul>
        <li>
            Finalizada: <strong>{{ $tarea->estaFinalizada() }}</strong>
        </li>
        <li>
            Urgencia: <strong>{{ $tarea->urgencia() }}</strong>
        </li>
        <li>
            Feche limite: <strong>{{ $tarea->fecha_limite->format('H:i d / m / Y') }}</strong>
        </li>
    </ul>
    <p>
        {{ $tarea->descripcion }}
    </p>
    <hr>
    <div class="row">
        <div class="col-sm-12 mb-3">
            <form action="{{ route('tarea.destroy', $tarea) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">
                    Borrar
                </button>
            </form>
        </div>
    </div>
@endsection