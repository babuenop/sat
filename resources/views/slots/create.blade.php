@extends('base')
@section('main')
<div class="row">
 <div class="col form-control-sm-8 offset form-control-sm-2">
    <h1 class="display-5">Crear Maquina</h1>
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
      <form method="post" action="{{ route('slots.store') }}">
          @csrf
          <div class="form-row"> 
            <div class="form-group col md-6">    
              <input type="text" class="form-control form-control-sm" name="id" placeholder="id"/>
              </div>
            <div class="form-group col md-6">    
              <input type="text" class="form-control form-control-sm" name="serie" placeholder="Serie"/>
            </div>
            <div class="form-group col md-6">    
              <input type="text" class="form-control form-control-sm" name="posicionGic" placeholder="Posicion GIC"/>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col md-6">
                Fabricante
                <input type="text" class="form-control form-control-sm" name="fabricante"/>
              </div>
              <div class="form-group col md-6">
                Mueble
                <input type="text" class="form-control form-control-sm" name="mueble"/>
              </div>
              <div class="form-group col md-6">
                Modelo
                <input type="text" class="form-control form-control-sm" name="modelo"/>
          </div>                         
          <div class="form-group col md-6">
                Fecha de fabricacion
                <input type="date" class="form-control form-control-sm" name="fechaFabricacion" placeholder="FechaFabricacion"/>
          </div>                         
          </div>                         
          
          <div class="form-row">
            <div class="form-group col md-8">
                <input type="text" class="form-control form-control-sm" name="sociedad" placeholder="Sociedad"/>
              </div>
              <div class="form-group col md-4">
                <input type="text" class="form-control form-control-sm" name="activoFijo" placeholder="Activo Fijo"/>
              </div>                                    
          </div>



          <div class="form-row">
          <div class="form-group col md-8">
                Centro
                <input type="text" class="form-control form-control-sm" name="centro" />
              </div><div class="form-group col md-8">
                Subdivision
                <input type="text" class="form-control form-control-sm" name="subdivision" />
              </div>
            <div class="form-group col md-8">
                Fecha Ingreso
                <input type="date" class="form-control form-control-sm" name="fechaDeIngreso" />
              </div>
              <div class="form-group col md-4">
                Fecha de Salida
                <input type="date" class="form-control form-control-sm" name="fechaDeSalida" />
              </div>                                     
          </div>

          <div class="form-row">
            <div class="form-group col md-8">
                <input type="text" class="form-control form-control-sm" name="origen" placeholder="origen"/>
              </div>
              <div class="form-group col md-4">
                <input type="text" class="form-control form-control-sm" name="destino" placeholder="destino"/>
              </div>                                    
          </div>


          <div class="form-row">    
            <div class="form-group col md-8">
              <input type="text" class="form-control form-control-sm" name="estado" placeholder="Estado"/>
            </div>
            <div class="form-group col md-8">
              <input type="text" class="form-control form-control-sm" name="participado" placeholder="participado"/>
            </div>
          </div>
          <button type="submit" class="btn btn-primary-outline">Crear Maquina</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection