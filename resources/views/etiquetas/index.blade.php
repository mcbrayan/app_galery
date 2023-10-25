@extends('adminlte::page')

@section('App Galery')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>App Galery</h1>
        <a class="btn btn-secondary" href="{{ route('etiqueta.create') }}">Crear Etiqueta</a>
    </div>
@stop
@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>

        </div>
    @endif

    <div class="card-body">

        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th colspan="2"></th>
                </tr>

            </thead>
            @foreach ($etiquetas as $etiqueta)
                <tr>
                    <td>{{ $etiqueta->id }}</td>
                    <td>{{ $etiqueta->title }}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{ route('etiqueta.edit', $etiqueta) }}">Editar</a>
                    </td>
                    <td width="10px">
                        <form method="POST" action="{{ route('etiqueta.destroy', $etiqueta) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            <tbody>


            </tbody>

        </table>

    </div>

    </div>

@stop
