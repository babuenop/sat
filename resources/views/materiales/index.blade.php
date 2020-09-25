<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sat Panama</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Helveltica', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            header {
                margin: 1rem 0 0;
                font-size: .9rem;
                padding: 0 0 1rem 0;
                border-bottom: 2pt solid #1ab394;
            }
            img {
                border: 0
            }

            h1 {
                margin: 0;
                padding: 0;
                font-size: 2rem;
                color: #1ab394;
                display: block;
                font-size: 18px;
                margin-block-start: 0.67em;
                margin-block-end: 0.67em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: bold;
            }

            table.blueTable {
                
                width: 100%;
                text-align: left;
                border-collapse: collapse;
            }
            table.blueTable td, table.blueTable th {
                border: 1px solid #AAAAAA;
                padding: 3px 2px;
            }
            table.blueTable tbody td {
                font-size: 12px;
            }
            
            table.blueTable thead {
                background: #444444;
                border-bottom: 2px solid #444444;
            }
            table.blueTable thead th {
                font-size: 12px;
                color: #FFFFFF;
                
            }
            table.blueTable thead th:first-child {
                border-left: none;
            }

            table.blueTable tfoot {
                font-size: 12px;           
                color: #FFFFFF;
                border-top: 2px solid #444444;
            }
            table.blueTable tfoot td {
                font-size: 10px;
            }
            table.blueTable tfoot .links {
                text-align: right;
            }
            table.blueTable tfoot .links a{
                display: inline-block;
                background: #1C6EA4;
                color: #FFFFFF;
                padding: 2px 8px;
                border-radius: 5px;
            }
            .client {
                font-size: 12px;
                padding: 15px
            }
            

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<body>
@include('layouts.navbars.navbar')    

    <main role="main">


        <div class="container">
            <form>
            <div class="container">
            <header class="row">
                <div class="logoholder text-center" background="dark">
                <img src="img/logo.jpg" width="140" height="40">
                </div>

            </header>

        <div class="row section">
            <div class="container">
                <div class="col-12">
                    <h1>Inventario de Materiales</h1>
                </div>
            </div>
        </div>     
     
        <div class="jumbotron">
            <form action="{{route('materiales.store')}}" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="material" class="form-control" placeholder="No Material" value="{{old('material')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" value="{{old('descripcion')}}">                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="grupoArticulos" class="form-control" placeholder="Proveedor"value="{{old('grupoArticulos')}}">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col text-center">
                    <div class="form-group">
                        @csrf
                            <button type="submit" class="btn btn btn-success ">Enviar</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>


        <table class="blueTable" table-bordered="">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                </tr>
            </thead>  
                <tbody>
                @foreach($materiales as $materiales)
                    <tr>
                        <td>{{$materiales->material}}</td>
                        <td>{{$materiales->descripcion}}</td>
                        <td>{{$materiales->grupoArticulos}}</td>
                    </tr>
                @endforeach
                </tbody>  
                
            </tr>
        </table>

    </div>
 
</main>
        
    </body>
</html>


<!-- https://sistemasdemos.com/gratis/sales_invoice/ -->
<!-- https://richos.gitbooks.io/laravel-5/content/anexos/crud.html -->