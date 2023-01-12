<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <title>Авторизация</title>
</head>
<body>
<div class="container">
    <form action="{{route('login')}}" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{old('password')}}">
        </div>
        <button type="submit">Send</button>
    </form>
</div>
</body>
</html>
