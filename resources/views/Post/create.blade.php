<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/createPost.css')}}">
    <title>Добавление поста</title>
</head>
<body>
<div class="container">
    <div class="nav-block">
        <p>Добавление статьи</p>
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
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Название статьи</label><br><br>
                    <input type="text" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="content">Описание</label><br><br>
                    <textarea name="content" id="content"  rows="5"></textarea>
                </div>
                <a href="{{route('home')}}"><button>Опубликовать</button></a>
            </form>
        </div>
    </div>


</div>
</body>
</html>
