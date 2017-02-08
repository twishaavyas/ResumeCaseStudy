<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style> @yield('style')
            html, body {
                background: url("/batman.jpg");
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                margin: 0;
                text-align: center;
                color: #7d7d7d;
                font-weight: bold;
            }

            .twisha{
                padding-top: 50px;
                font-size: 30px;
                font-weight: bold;
                color: #505050;
            }

        </style>
    </head>
    <body> 
        <div class = twisha> Twisha's Test Case  </div>
        @yield('body') </body>
</html>
