@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                        Menu
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Inventario de Maquinas</a>
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Ingreso de Materiales</a>
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Salida de Materiales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
