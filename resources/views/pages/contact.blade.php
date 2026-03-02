<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff4f4;
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

        form input,
        form textarea {
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form button {
            padding: 10px 20px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <main>
        <p>Email: example@example.com</p>
        <form>
            <input type="text" placeholder="Your Name"><br>
            <input type="email" placeholder="Email"><br>
            <textarea placeholder="Message"></textarea><br>
            <button>Send Message</button>
        </form>
    </main>
    <footer>
        &copy; 2026 PHP_Laravel12_Folio
    </footer>
</body>

</html>