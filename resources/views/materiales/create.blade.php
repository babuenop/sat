@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-5">Crear Material</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
    <div class="jumbotron">
      <form method="post" action="{{ route('materiales.store') }}">
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
          <button type="submit" class="btn btn-primary-outline">Agregar Material</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection