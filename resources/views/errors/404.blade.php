@extends('base.template')
@section('title', '¡Whoops!')

@section('content')
    <div class="errors container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="__error_container">
                    <div class="text-center">
                        <h1 class="text-center display-1">🚧 La página que buscas <strong>cambió de ruta</strong> o <strong>no existe</strong> 🚧</h1>
                        <a href="{{ url('/') }}" class="btn btn-primary btn-lg mt-5">Volver a Quetzal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
