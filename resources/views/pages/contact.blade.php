<?php
use function Laravel\Folio\name;
name('contact');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white tracking-wide">Contact Us</h1>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/about" class="text-white hover:text-indigo-200">About</a>
                <button id="theme-toggle" class="text-white">Toggle Mode</button>
            </nav>
        </div>
    </header>

    <main class="max-w-xl mx-auto py-16 px-6">
        <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border dark:border-gray-800">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-900/30 text-green-400 rounded-xl font-semibold text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="/contact/send" class="space-y-4">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Your Name" required 
                           class="w-full p-4 rounded-xl border dark:border-gray-700 bg-gray-800 outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email Address" required 
                           class="w-full p-4 rounded-xl border dark:border-gray-700 bg-gray-800 outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <textarea name="message" placeholder="How can we help you?" rows="4" required 
                              class="w-full p-4 rounded-xl border dark:border-gray-700 bg-gray-800 outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white p-4 rounded-xl font-bold transition-transform hover:scale-[1.02]">
                    Send Message
                </button>
            </form>

            <div class="mt-8 text-center text-gray-400 text-sm">
                <p>Or email us directly:</p>
                <a href="mailto:support@foliopro.com" class="text-indigo-400 font-semibold underline">support@foliopro.com</a>
            </div>
        </div>
    </main>

    <footer class="text-center p-10 text-gray-600 border-t dark:border-gray-800">
        &copy; 2026 Folio Pro | Secure Portal
    </footer>

    <script>
        document.getElementById('theme-toggle').addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });
    </script>
</body>
</html>