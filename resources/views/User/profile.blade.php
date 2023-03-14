<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль: {{auth()->user()->name}}</title>
    <style>

        body{
            background-color: #181818;

        }
        .icon{
            width: 60px;
            height: 60px;
            border-radius: 100%;
            background-color: #718096;
        }
        .name{
            color: white;
            margin-top: 10px;
        }
        p{
            color: white;
            font-size: 20px;
        }
        .content{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form{

            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="nav">
                <div class="icon">
                </div>
                <div class="name">
                    {{auth()->user()->name}}
                </div>
            </div>
        </header>
{{--        <div class="content">--}}
{{--            <p>Предложить статью</p>--}}

{{--            <div class="form">--}}
{{--                <form action="" method="post">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="title">Название статьи</label><br>--}}
{{--                        <input type="text" name="title" id="title">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
{{--    <p>Hello, {{auth()->user()->name}}</p>--}}
</body>
</html>
