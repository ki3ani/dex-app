<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #ffff00;
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



        @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200');

        body  {
            background-image: url('http://dairy.co.ke/dist/img/bg.jpg');
        background-size:cover;
                -webkit-animation: slidein 20s;
                animation: slidein 30s;

                -webkit-animation-fill-mode: forwards;
                animation-fill-mode: forwards;

                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;

                -webkit-animation-direction: alternate;
                animation-direction: alternate;              
        }

        @-webkit-keyframes slidein {
        from {background-position: top; background-size:2000px; }
        to {background-position: -100px 0px;background-size:2000px;}
        }

        @keyframes slidein {
        from {background-position: top;background-size:2000px; }
        to {background-position: -100px 0px;background-size:2000px;}

        }



        .center
        {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(75, 75, 250, 0.3);
        border-radius: 3px;
        }
        .center h1{
        text-align:center;
        color:white;
        font-family: 'Source Code Pro', monospace;
        text-transform:uppercase;
        }

        #footer{
            text-align: center;
            width: 100%;
            background:cornsilk;
            position:absolute;
            bottom: 0;
        }
        </style>
            <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    </head>
    <body>
              
                @yield('content');
               
      
        <div id="footer"><span>Shardx Solutions <br>&copy;2023 </span></div>
    </body>
</html>