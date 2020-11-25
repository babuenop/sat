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
    <a style="margin: 19px;" href="{{ route('slots.create')}}" class="btn btn-secondary btn-sm">+</a>
    </div>

<div>
    
    </div>
<div class="container">
    <div class="row section">
        <div class="container">
            <div class="col-12">
                <h1>Inventario de Maquinas</h1>
            </div>
        </div>
    </div>
    
<div class="row">
<div class="col-sm-12">
  <table class="table table-striped">
    <thead >
        <tr>
          <th>ID</th>
          <th>Serie</th>
          <th>Fabricante</th>
          <th>Posicion GIC</th>
          <th>Mueble</th>
          <th>Modelo</th>
          <th>Estado</th>
          <th>Participado</th>
          <th colspan = 2 style="text-align: center;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($slots as $slot)
        <tr>
            <td>{{$slot->id}}</td>
            <td>{{$slot->serie}}</td>
            <td>{{$slot->fabricante}}</td>
            <td>{{$slot->posicionGic}}</td>
            <td>{{$slot->mueble}}</td>
            <td>{{$slot->modelo}}</td>
            <td>{{$slot->estado}}</td>
            <td>{{$slot->participado}}</td>
            

            <td style="text-align: center;">
              <a href="#" class="editBtn" >Editar</a>   
            </td>  
            <td style="text-align: center;">
              <form action="" method="post">
                @csrf
                @method('DELETE')
                <button class="delBtn" type="submit">Borrar</button>
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