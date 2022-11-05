@extends('master')

@section('contenido')
    <h1>Listado de alumnos</h1><hr>
    <a href="{{ url('/especialidad/registrar') }}" class="btn btn-secondary">Registrar Alumno</a><br><br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($especialidades as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>
                        <a href="{{url('/especialidad/editar')}}/{{$a->id}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{url('/especialidad/eliminar')}}/{{$a->id}}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$especialidades->links()}}
    </div>

@stop

<style>
    div nav ul {
        justify-content: center;
    }
</style>