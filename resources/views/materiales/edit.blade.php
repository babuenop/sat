@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-5">Actualizar Material</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <div class="jumbotron">
        <form method="post" action="{{ route('materiales.update', $material->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">    
              <input type="text" class="form-control" name="material" placeholder="No. Material"/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="grupoArticulos" placeholder="Proveedor"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Actualizar</button>
        </form>
        </div>
    </div>
</div>
@endsection