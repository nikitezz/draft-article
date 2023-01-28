<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KinoSearch</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #181818;
            }
            .container{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .content-text{
                font-family: 'Nunito', sans-serif;
                color: white;
                font-weight: bold;
                font-size: 30px;
                margin-top: 300px;
                left: 0;
                text-align: center;
            }

            button{
                width: 110px;
                height: 40px;
                border: 2px solid orange;
                border-radius: 10px;
                outline: none;
                background-color: black;
                color: white;
                cursor: pointer;
                transition: 2s all;
                position: relative;
                left: 15%;
                font-family: 'Nunito', sans-serif;
                font-weight: 500;
            }
            button:hover{
                transform: scale(1.1);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="group-container">
                <p class="content-text">KinoSearch</p>
                <a href="{{route('home')}}"><button type="submit">Смотреть</button></a>
            </div>
        </div>
    </body>
</html>
