<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleHome.css">
    <title>Главная</title>
    <style>
        *{
            margin-top: 0;
            margin-left: 0;
        }
        body{
            background-color: #181818;
        }
        .wrapper{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow: hidden;
        }
        header{
            background-color: black;
            width: 99%;
            height: 70px;
            margin-left: 10px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            border: 1px orange solid;
        }
        .logotype{
            font-size: 18px;
            color: white;
            font-weight: bold;
            font-family: "Arial Black";
            padding: 20px 20px;
            margin-left: 10px;
        }
        .user-name{
            color: white;
            font-family: "Arial Black";
            position: relative;
            top: -80px;
            font-size: 15px;
            text-align: right;
            padding: 20px 50px ;
            cursor: pointer;
            transition: 0.4s all;
        }
        .user-name:hover{
            color: #cbd5e0;
        }
        .container{
            margin: auto;
            margin-top: 5%;
            width: 70%;
        }
        .block-item{
            width: 100%;
            height: 400px;
            background-color: black;
            border-radius: 15px;
            border: 1px orange solid;
            margin-top:30px;
        }
        .block-title{
            position: relative;
            color: white;
            font-size: 25px;
            font-weight: bolder;
            font-family: "Arial Black";
            left: 5%;
            top: 5%;

        }
        .logout{
            color: white;
            font-family: "Arial Black";
            position: relative;
            font-size: 15px;
            padding: 0px 50px ;
            margin: auto;
            top: 10px;
            cursor: pointer;
            left: 35%;
        }
        .block-auth{
            width: 70%;
            height: 50px;
            background-color: black;
            border-radius: 20px;
            margin: auto;
            margin-top: -5%;
            border: 1px orange solid;
        }
        .login{
            color: white;
            font-family: "Arial Black";
            position: relative;
            font-size: 15px;
            cursor: pointer;
            left: 30%;
            top: 20%;
        }
        .register{
            color: white;
            font-family: "Arial Black";
            position: relative;
            font-size: 15px;
            cursor: pointer;
            left: 40%;
            top: 20%;
        }
        .img-avatar{
            width: 45px;
            height: 45px;
            border-radius: 100%;
            margin: auto;
            position: relative;
            top: -150px;
            left: 87%;
            cursor: pointer;
            border: 2px orange solid;
        }



    </style>
</head>
<body>
</body>
<div class="wrapper">
    <header>
        <div class="block-nav">
            <p class="logotype">KinoSearch</p>
            @if(auth()->check())
                <p class="user-name">{{auth()->user()->name}}</p>
                @if(auth()->user()->avatar)
                    <img src="{{asset('storage/'. auth()->user()->avatar)}}" alt="" class="img-avatar">
                @endif
            @else
                <p class="user-name">Гость</p>
            @endif
        </div>
    </header>
    <div class="container">
        <div class="block-auth">
            @if(auth()->check())
                <a href="{{route('logout')}}" class="logout">Выйти с профиля</a>
            @else
                <a href="{{route('login.create')}}" class="login">Авторизация
                <a href="{{route('register.create')}}" class="register">Регистрация</a>
                        @endif
        </div>
        <div class="block-item">
            <div class="block-title">
                Test 1
            </div>
        </div>
        <div class="block-item">
            <div class="block-title">
                Test 2
            </div>
        </div>
        <div class="block-item">
            <div class="block-title">
                Test 3
            </div>
        </div>
        <div class="block-item">
            <div class="block-title">
                Test 4
            </div>
        </div>
    </div>
</div>
</html>
