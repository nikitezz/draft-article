<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/suggested.css')}}">
</head>
<body>
    <div class="container">
        <div class="nav-block">
            <p>Предложить свою статью</p>
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
                <form action="{{route('suggested.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Название статьи</label><br><br>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Описание</label><br><br>
                        <textarea name="content" id="content"  rows="5"></textarea>
                    </div>
                    <a href="{{route('home')}}"><button>Отправить</button></a>
                </form>
            </div>
        </div>

    </div>
</body>
</html>
