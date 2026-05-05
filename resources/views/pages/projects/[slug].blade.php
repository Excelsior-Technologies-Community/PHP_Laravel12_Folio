<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project Detail</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #eef2ff;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 50px;
            text-align: center;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .tag {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background: #4f46e5;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<header>
    <h2>Project Details</h2>
    <nav>
        <a href="/">Home</a>
        <a href="/projects">Projects</a>
    </nav>
</header>

<div class="container">

    <div class="box">

        <h1>{{ $slug }}</h1>

        <p>
            @if($slug == 'laravel-crud')
                Laravel CRUD application with Create, Read, Update, Delete features.
            @elseif($slug == 'portfolio-site')
                Personal portfolio website using Laravel Folio routing.
            @elseif($slug == 'blog-system')
                Simple blog system using nested routing structure.
            @else
                No details available for this project.
            @endif
        </p>

        <div class="tag">Laravel 12</div>
        <div class="tag">Folio Routing</div>

    </div>

</div>

</body>
</html>