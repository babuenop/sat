@extends('base')
@section('main')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div>
    <a style="margin: 19px;" href="{{ route('materiales.create')}}" class="btn btn-secondary">Crear Material</a>
    </div>
<div class="container">
    <div class="row section">
        <div class="container">
            <div class="col-12">
                <h1>Materiales</h1>
            </div>
        </div>
    </div>
    
<div class="row">
<div class="col-sm-12">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>No. Material</td>
          <td>Descripcion</td>
          <td>Grupo Articulos</td>

          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($materials as $material)
        <tr>
            <td>{{$material->id}}</td>
            <td>{{$material->material}}</td>
            <td>{{$material->descripcion}}</td>
            <td>{{$material->grupoArticulos}}</td>

            <td>
                <a href="{{ route('materiales.edit',$material->id)}}" class="btn btn-secondary">Edit</a>
            </td>
            <td>
                <form action="{{ route('materiales.destroy', $material->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </div>

        
    </tbody>
  </table>
<div>
</div>
@endsection