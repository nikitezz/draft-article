<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Admin zone</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }


    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="block-nav">
                <p class="logotype">LastCode</p>
                <p class="txt-info-page"> Страница для администратора</p>
            </div>
        </header>
        <div class="container">
            <br>
            <a href="{{route('posts.create')}}"><button>Добавление поста</button></a><br>
            <div class="block-table">
                <table>
                    <tr><th>Name</th><th>Email</th><th>Password</th><th>is_admin</th></tr>
                    @foreach($user as $users)
                        <tr><td>{{$users->name}}</td><td>{{$users->email}}</td>
                            <td>{{$users->password}}</td><td>{{$users->is_admin}}</td></tr>
                    @endforeach
                </table>
            </div>
            <br>
            <br>
            <div class="block-article">
                <table>
                    <tr><th>Id</th><th>Title</th><th>Content</th><th>Date</th></tr>
                    @foreach($post as $posts)
                        <tr><td>{{$posts->id}}</td>
                            <td>{{$posts->title}}</td>
                            <td>{{$posts->content}}</td>
                            <td>{{$posts->created_at}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>
            <br>


        </div>
    </div>
</body>
</html>
