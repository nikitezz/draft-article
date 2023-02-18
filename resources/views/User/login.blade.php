<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
    <style>

    </style>
    <title>Авторизация</title>
</head>
<body>
<div class="container">
    <div class="nav-block">
        <p>Авторизация</p>
        <div class="form-block">
            <div class="mt-5">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label><br><br>
                    <input type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label><br><br>
                    <input type="password" name="password" id="password" value="{{old('password')}}">
                </div>
                <a href="{{route('home')}}"><button type="submit">Send</button></a>
            </form>
        </div>
        <a href="{{route('register.create')}}"><button type="submit">Регистрация</button></a>
    </div>
</div>
</body>
</html>
