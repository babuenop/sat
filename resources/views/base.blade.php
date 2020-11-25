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
            .form-group{
                font-size: 0.755rem;
                font-weight: bold;
            }
            .form-control{
                display:block;
                font-size: .875rem
                padding: 0.5rem;
            }
            .form-control-sm{
                font-size: .975rem
                
                padding: 0.5rem;
            }
            
            
            table {
                width: 40%;
            }
            .table td, th {
                padding: 0.2rem;
                border-right:3px solid #ffffff;
               
            }
            
            tr, td {
                font-size: 0.6878rem;
                white-space: nowrap;
                line-height: 1.18181818;
                border-right:3px solid #ffffff;
                border-toṕ: 1px solid #d1d1d1;
                padding: 0.363636363636rem 0.5454545454rem;
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


            .editBtn {
                box-shadow:inset 0px 1px 0px 0px #54a3f7;
                background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
                background-color:#007dc1;
                border-radius:3px;
                border:1px solid #124d77;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:1em;
                padding:0 1.666666666rem 0 0.333333333333rem;
                text-decoration:none;
                text-shadow:0px 1px 0px #154682;
                text-align: center;
            }
            .editBtn:hover {
                background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
                background-color:#0061a7;
            }
            .editBtn:active {
                position:relative;
                top:1px;
            }

            .delBtn {
                box-shadow:inset 0px 1px 0px 0px #f5978e;
                background:linear-gradient(to bottom, #f24537 5%, #c62d1f 100%);
                background-color:#f24537;
                border-radius:3px;
                border:1px solid #d02718;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:1em;
                padding:0 1.666666666rem 0 0.333333333333rem;
                text-decoration:none;
                text-shadow:0px 1px 0px #9f0000;
                text-align: center;
            }
            .delBtn:hover {
                background:linear-gradient(to bottom, #c62d1f 5%, #f24537 100%);
                background-color:#c62d1f;
            }
            .delBtn:active {
                position:relative;
                top:1px;
            }
         




        </style>
    </head>
<body>
 @include('layouts.navbars.navbar')  
 <br>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>