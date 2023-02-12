<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin zone</title>
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
        .txt-info-page{
            font-size: 18px;
            color: white;
            font-weight: bold;
            font-family: "Arial Black";
            margin: auto;
            margin-top: -4%;
            margin-left: 40%;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="block-nav">
                <p class="logotype">KinoSearch</p>
                <p class="txt-info-page"> Страница для администратора</p>
            </div>
        </header>
        <div class="container">
        </div>
    </div>
</body>
</html>
