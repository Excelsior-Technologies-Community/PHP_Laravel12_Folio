<?php
use function Laravel\Folio\name;
name('projects.show');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | Project Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Project Details</h2>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/projects" class="text-white hover:text-indigo-200">Projects</a>
                <button id="theme-toggle" class="text-white p-2 rounded-lg bg-indigo-500 dark:bg-indigo-800">
                    Toggle Mode
                </button>
            </nav>
        </div>
    </header>

    <div class="max-w-3xl mx-auto mt-12 px-6">
        <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border dark:border-gray-800 transition-all">
            
            <h1 class="text-4xl font-extrabold text-indigo-600 dark:text-indigo-400 capitalize mb-6">
                {{ str_replace('-', ' ', $slug) }}
            </h1>

            <div class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                @if($slug == 'laravel-crud')
                    Robust Laravel application for efficient database management.
                @elseif($slug == 'portfolio-site')
                    Interactive personal portfolio built with modern routing.
                @elseif($slug == 'blog-system')
                    Scalable content system with advanced routing features.
                @else
                    <div class="p-4 bg-red-900/20 text-red-400 rounded-xl">
                        No details available for this project.
                    </div>
                @endif
            </div>

            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-indigo-900 text-indigo-300 rounded-full text-sm font-semibold">Laravel 12</span>
                <span class="px-4 py-2 bg-indigo-900 text-indigo-300 rounded-full text-sm font-semibold">Folio Routing</span>
                <span class="px-4 py-2 bg-indigo-900 text-indigo-300 rounded-full text-sm font-semibold">Tailwind CSS</span>
            </div>
        </div>
    </div>

    <footer class="text-center mt-20 p-10 text-gray-500 dark:text-gray-600 border-t dark:border-gray-800">
        &copy; 2026 Folio Pro
    </footer>

    <script>
        document.getElementById('theme-toggle').addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });
    </script>
</body>
</html>