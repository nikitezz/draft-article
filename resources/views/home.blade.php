<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
    <title>Главная</title>
    <style>
        .block-time{
            color: white;
            margin-top: -2%;
            margin-left: 1%;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="block-nav">
            <p class="logotype">LastCode &lt;/&gt;</p>
            @if(auth()->check())
                <a href="{{route('profile')}}"><p class="user-name">{{auth()->user()->name}}</p></a>
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
        @foreach($posts as $post)
            <div class="block-item">
                <div class="block-title">
                    {{$post->title}}
                </div>
                <div class="block-content">
                    {{$post->content}}
                </div>
                <div class="block-time">
{{--                    <p>{{$post->created_at}}</p>--}}
                    <p>{{$post->getPostDate()}}</p>
                </div>
{{--                <div class="block-img">--}}
{{--                    <img src="/public/storage/images/67udPZJDcfpffusUoeum4mObyGe7VrwkLUV5kV5C.jpg" alt="">--}}
{{--                </div>--}}
            </div>
        @endforeach


    </div>
</div>
</body>

</html>
