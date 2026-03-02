<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f8ff;
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
    </style>
</head>

<body>
    <header>
        <h1>User Profile</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/users/{{ $id }}">Refresh</a>
        </nav>
    </header>
    <main>
        <p>User ID: <strong>{{ $id }}</strong></p>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>