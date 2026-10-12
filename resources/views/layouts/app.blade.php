<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog Laravel')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
            background: #f4f4f4;
        }

        nav {
            margin-bottom: 30px;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            box-sizing: border-box;
        }

        button {
            padding: 8px 15px;
            cursor: pointer;
        }

        .error {
            color: red;
        }

        .success {
            background: #d1fae5;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('posts.index') }}">Blog</a>
    <a href="{{ route('posts.create') }}">Buat Post</a>
</nav>

@yield('content')

</body>
</html>