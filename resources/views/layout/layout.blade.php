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

            .alert-danger{
                color: red;
                padding: 10px;
                background-color: pink;
                font-size: 20px;
                opacity: 0.7;
            }

            .alert-success{
                color: green;
                padding: 10px;
                background-color: #6bff71;
                font-size: 20px;  
                opacity: 0.7; 
            }

            .submit{
                background-color: #00d234;
                font-size: 18px;
                color:white;
                padding: 8px;
                border-radius: 5px;

            }

            footer{
                bottom: 0;
                position: fixed;
                width: 100%;
                color: blue;
                background-color: #85ffef;
                opacity: 0.6;
                padding: 10px;
            }
        </style>
    </head>
    <script>
        @yield('script')
    </script>
    <body> 
        
        <div class = twisha> Twisha's Test Case  </div>
        @yield('body') </body>

    <footer>
        @yield('footer')
        <br>
        <font size= "2px">
            <u>Posted by:</u> Twisha Vyas
            <u>Contact information:</u> <a href="mailto:twishaavyas@gmail.com.com">twishaavyas@gmail.com</a>
        </font>
    </footer>
</html>
