<?php
use function Laravel\Folio\name;
name('about');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white tracking-wide">About Folio Pro</h1>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/contact" class="text-white hover:text-indigo-200">Contact</a>
                <a href="/blog" class="text-white hover:text-indigo-200">Blog</a>
                <button id="theme-toggle" class="text-white">Toggle Mode</button>
            </nav>
        </div>
    </header>

    <main class="max-w-3xl mx-auto py-16 px-6">
        <div class="bg-white dark:bg-gray-900 p-10 rounded-3xl shadow-xl border dark:border-gray-800 text-center">
            <h2 class="text-4xl font-extrabold text-indigo-600 dark:text-indigo-400 mb-6">Revolutionary Folio Routing</h2>
            
            <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                This project leverages the power of Laravel 12 and Folio to simplify your development workflow. 
                Experience seamless page-based routing where every Blade file becomes an endpoint automatically.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                <div class="p-5 bg-indigo-900/20 rounded-2xl">
                    <h3 class="font-bold text-indigo-300 mb-2">Instant Routing</h3>
                    <p class="text-sm text-gray-400">No more manual controller route definitions.</p>
                </div>
                <div class="p-5 bg-indigo-900/20 rounded-2xl">
                    <h3 class="font-bold text-indigo-300 mb-2">Optimized Flow</h3>
                    <p class="text-sm text-gray-400">Lightweight file-based architecture for speed.</p>
                </div>
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