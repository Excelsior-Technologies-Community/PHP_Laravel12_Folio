<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Folio | Contact</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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

        form input,
        form textarea {
            width: 320px;
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

        .success {
            color: green;
            margin-bottom: 15px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
            margin-top: 40px;
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
        <a href="/projects">Projects</a>
    </nav>
</header>

<main>

    <p>Email: example@example.com</p>

    <!-- SUCCESS MESSAGE -->
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <!-- CONTACT FORM -->
    <form method="POST" action="/contact/send">
        @csrf

        <input type="text" name="name" placeholder="Your Name" required><br>

        <input type="email" name="email" placeholder="Email" required><br>

        <textarea name="message" placeholder="Message" required></textarea><br>

        <button type="submit">Send Message</button>
    </form>

</main>

<footer>
    &copy; 2026 PHP_Laravel12_Folio
</footer>

</body>
</html>