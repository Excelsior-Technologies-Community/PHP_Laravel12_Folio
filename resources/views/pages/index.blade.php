<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
        }

        h1 {
            color: #4f46e5;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        a.button {
            background: #4f46e5;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Laravel Folio!</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <main>
        <p>This is your Home Page (Folio) with Laravel 12.</p>
        <a class="button" href="/blog">Visit Blog</a>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>