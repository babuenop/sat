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
                <h1>Salidas de Almacen</h1>
            </div>
        </div>
    </div>
    
<div>
<div class="row">
    <div class="col-6">
        <p contenteditable="" class="client">
            <strong>Origen</strong><br>
            Nombre cliente<br>
            Nombre emmpresa<br>
            Dirección empresa<br>
            Tel empresa
        </p>
    </div>

    <div class="col-6">
        <p contenteditable="" class="client">
            <strong>Destino</strong><br>
            [Nombre cliente]<br>
            [Nombre emmpresa]<br>
            [Dirección empresa]<br>
            [Tel empresa]
        </p>
    </div>
    </div>
</div>
<br>

    <table class="blueTable" table-bordered="">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Descripcion</th>
				<th>Proveedor</th>
				<th>Estado</th>
				<th>Cantidad</th>
				<th>Revisado Por</th>
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
			    </tr>
            </tbody>  
			
		</tr>
    </table>
        </form>
    </div>

  

  
</main>
        
    </body>
</html>


<!-- https://sistemasdemos.com/gratis/sales_invoice/ -->