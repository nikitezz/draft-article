<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <style>
        body{
            background-color: #181818;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        p{
            color: white;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-top: 50%;
        }
        label{
            color: white;
            font-size: 14px;
            font-family: "Arial Black";
        }
        .form-group{
            padding: 10px;
        }
        input{
            width: 250px;
            height: 25px;
            outline: none;
            border-radius: 6px;
            border: 2px solid orange;
            background-color: #edf2f7;
            transition: 0.5s all;
        }
        input:hover{
            transform: scale(1.1);
        }
        button{
            width: 180px;
            height: 40px;
            margin-left: 15%;
            margin-top: 5%;
            font-family: "Arial Black";
            border: 2px solid orange;
            border-radius: 10px;
            outline: none;
            background-color: black;
            color: white;
            cursor: pointer;
            transition: 0.5s all;
        }
        button:hover{
            transform: scale(1.1);
        }

    </style>
</head>
<body>
<div class="container">
    <div class="nav-block">
        <p>Регистрация</p>
        <div class="form-block">
            <form action="{{route('register.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label><br><br>
                    <input type="text" name="name" id="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br><br>
                    <input type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label><br><br>
                    <input type="password" name="password" id="password" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <label for="avatar">Аватарка</label><br><br>
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>
                <a href="{{route('home')}}"><button type="submit">Зарегистрироваться</button></a>
            </form>
        </div>
    </div>

</div>
</body>
</html>
