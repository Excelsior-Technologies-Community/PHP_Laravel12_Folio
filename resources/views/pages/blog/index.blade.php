<?php
use function Laravel\Folio\name;
name('blog.index');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h2 class="text-2xl font-bold text-white">Blog Home</h2>
            <nav class="flex gap-6">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/about" class="text-white hover:text-indigo-200">About</a>
                <a href="/contact" class="text-white hover:text-indigo-200">Contact</a>
                <button id="theme-toggle" class="text-white">Toggle Mode</button>
            </nav>
        </div>
    </header>

    <main class="max-w-5xl mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-sm border dark:border-gray-800 hover:shadow-xl transition-all">
                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-3">AI Agent Architecture</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Learn how to build scalable AI agents with Laravel 12 and Folio routing.</p>
                <a href="/blog/article" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-indigo-700 transition">Read Article</a>
            </div>

            <div class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-sm border dark:border-gray-800 hover:shadow-xl transition-all">
                <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-3">RAG Explained</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Mastering Retrieval-Augmented Generation for your custom AI tools.</p>
                <a href="/blog/article" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-indigo-700 transition">Read Article</a>
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