<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twisha</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: url("/batman.jpg");
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                margin: 0;
            }

            .content {
                text-align: center;
                padding-top: 50px;
            }

            .m-b-md {
                font-size: 40px; 
                font-weight: bold;
            }
        </style>
    </head>
    <body>
            <div class="m-b-md content">
                Twisha's Test Cases
                <br>
                <br>
                <br>
                <br>
                <a href="{{ route('resume.create') }}" class="btn btn-primary">Create new entry</a>

            </div>
       
    </body>

</html>
