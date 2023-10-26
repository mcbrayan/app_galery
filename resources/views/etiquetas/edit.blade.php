@extends('adminlte::page')
@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>App Galery</h1>
        <a class="btn btn-secondary" href="{{ route('etiqueta.index', $etiqueta) }}">Actulizar Etiqueta</a>
    </div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>

        </div>
    @endif
    <div>
        <input class="" type="text" name="" id="" value="{{ $etiqueta->title }}">

    </div>
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror

@stop
