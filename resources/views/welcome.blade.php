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

            h1 {
                margin: 0;
                padding: 0;
                font-size: 2rem;
                color: #1ab394;
                display: block;
                font-size: 2em;
                margin-block-start: 0.67em;
                margin-block-end: 0.67em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: bold;
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
            
            <div class="col-4">
                <p contenteditable="">
                
                <strong>Sat Panama</strong><br>
                Bodega Cirsa<br>
                Complejo Industrual Parque Sur.<br>
                </p>
            </div>
            
            <div class="col-4">
                <p contenteditable="">
                Fecha: <br>
                Acta: <br>
                </p>
            </div>
            </div>
        </header>

    <div class="row section">
        <div class="container">
            <div class="col-12">
                <h1>Salidas de Almacen</h1>
            </div>
        </div>
    </div>
    <table class="table" table-bordered="">
				<thead>
					<tr>
					<th>Codigo</th>
					<th>Descripcion</th>
					<th>Proveedor</th>
					<th>Estado</th>
					<th>Cantidad</th>
					<th>Revisado Por</th>
					<th>Editar</th>
					<th>Borrar</th>
					</tr>
				</thead>  
			<tbody>
				<tr>
				<td>47792</td>
				<td>MON-LCD. TL ,NON-LIT 19 INCH DT-TS TOVIS</td>
				<td>IGT</td>
				<td>REPARADO</td>
				<td>10</td>
				<td>FERNANDEZ ARQUIÑEZ ADALBERTO </td>
				<td><a href="editar.php?IdActa=678&amp;Codigo=47792"><img src="../img/edit.png" width="25" height="25"></a></td>
				<td><a href="php/BorrarMaterial.php?IdActa=678&amp;Codigo=47792"><img src="../img/del.png" width="25" height="25"></a></td>
				
			</tr></tbody>  
			
			</tr></tbody></table>
        </form>
    </div>

  

  
</main>
        
    </body>
</html>


<!-- https://sistemasdemos.com/gratis/sales_invoice/ -->