<?php
use function Laravel\Folio\name;
name('home');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white tracking-wide">Folio Pro Home</h1>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/about" class="text-white hover:text-indigo-200">About</a>
                <a href="/contact" class="text-white hover:text-indigo-200">Contact</a>
                <a href="/blog" class="text-white hover:text-indigo-200">Blog</a>
                <button id="theme-toggle" class="text-white p-2 bg-indigo-500 dark:bg-indigo-800 rounded-lg">
                    Toggle Mode
                </button>
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto py-20 px-6 text-center">
        <div class="bg-white dark:bg-gray-900 p-12 rounded-[3rem] shadow-2xl border dark:border-gray-800">
            <h1 class="text-5xl font-extrabold text-indigo-600 dark:text-indigo-400 mb-6">Welcome to Laravel 12</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 max-w-2xl mx-auto">
                Build high-performance applications with seamless Folio file-based routing. 
                Experience the power of modern PHP architecture.
            </p>
            <div class="flex justify-center gap-4">
                <a href="/blog" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-4 rounded-2xl font-bold transition-all hover:scale-105">
                    Visit Blog
                </a>
                <a href="/projects" class="bg-gray-200 dark:bg-gray-800 hover:bg-gray-300 dark:hover:bg-gray-700 px-8 py-4 rounded-2xl font-bold transition-all">
                    View Projects
                </a>
            </div>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl border dark:border-gray-800">
                <h3 class="font-bold mb-2 text-indigo-500">Folio Routing</h3>
                <p class="text-sm text-gray-500">Smart file-based routing system.</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl border dark:border-gray-800">
                <h3 class="font-bold mb-2 text-indigo-500">Tailwind UI</h3>
                <p class="text-sm text-gray-500">Fully responsive modern design.</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl border dark:border-gray-800">
                <h3 class="font-bold mb-2 text-indigo-500">Dark Mode</h3>
                <p class="text-sm text-gray-500">Optimized for day and night.</p>
            </div>
        </div>
    </main>

    <footer class="text-center p-10 text-gray-500 dark:text-gray-600 border-t dark:border-gray-800">
        &copy; 2026 Folio Pro
    </footer>

    <script>
        document.getElementById('theme-toggle').addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });
    </script>
</body>
</html>