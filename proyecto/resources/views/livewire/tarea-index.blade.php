<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" name="" id="" placeholder="Buscar..." class="form-control" wire:model="busqueda">  
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <th>
                Nombre
            </th>
            <th>
                Finalizada
            </th>
            <th>
                Fecha limite
            </th>
            <th>
                Urgencia
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Opciones
            </th>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                    </td>
                    <td>
                        {{ $tarea->estafinalizada() }}
                    </td>
                    <td>
                        {{ $tarea->fecha_limite }}
                    </td>
                    <td>
                        {{ $tarea->urgencia() }}
                    </td>
                    <td>
                        {{ $tarea->descripcion }}
                    </td>
                    <td>
                        <a href="{{ route('tarea.edit', $tarea) }}">Editar</a>
                        <a href="{{ route('tarea.show', $tarea) }}">Consultar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
