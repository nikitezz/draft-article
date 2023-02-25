<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="block-delete">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="text" style="color: white">Введите id post для удаление статьи</label><br>
        <input type="number" name="number" id="number">
        <a href="{{'home'}}">
            <button type="submit">Удалить</button>
        </a>
    </form>
</div>
</body>
</html>
