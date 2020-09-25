@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-5">Crear Contacto</h1>
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
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <input type="text" class="form-control" name="first_name" placeholder="Nombre"/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="last_name" placeholder="Apellido"/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="email"/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="city" placeholder="Ciudad"/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="country" placeholder="Pais" />
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="job_title" placeholder="Cargo"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
    </div>
  </div>
</div>
</div>
@endsection