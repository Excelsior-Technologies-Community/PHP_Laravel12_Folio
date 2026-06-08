<?php
use function Laravel\Folio\name;
name('projects.index');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h2 class="text-2xl font-bold text-white tracking-wide">My Projects</h2>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/projects" class="text-white hover:text-indigo-200">Projects</a>
                <button id="theme-toggle" class="text-white">Toggle Mode</button>
            </nav>
        </div>
    </header>

    <main class="max-w-5xl mx-auto py-12 px-6">
        
        <section class="mb-12 text-center">
            <form method="GET" action="/projects" class="flex justify-center gap-2">
                <input type="text" name="search" placeholder="Search projects..." 
                       value="{{ request('search') }}"
                       class="w-full max-w-md px-5 py-3 rounded-xl border dark:border-gray-700 bg-white dark:bg-gray-900 focus:ring-2 focus:ring-indigo-500 outline-none transition">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-bold transition">
                    Search
                </button>
            </form>
        </section>

        @php
            $projects = [
                ['title' => 'Laravel CRUD', 'slug' => 'laravel-crud'],
                ['title' => 'Portfolio Site', 'slug' => 'portfolio-site'],
                ['title' => 'Blog System', 'slug' => 'blog-system'],
            ];

            $search = request('search');
            if ($search) {
                $projects = array_filter($projects, function ($p) use ($search) {
                    return str_contains(strtolower($p['title']), strtolower($search));
                });
            }
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-sm border dark:border-gray-800 hover:shadow-2xl transition-all hover:-translate-y-2">
                    <h4 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">{{ $project['title'] }}</h4>
                    <a href="/projects/{{ $project['slug'] }}" 
                       class="inline-block bg-gray-100 dark:bg-gray-800 hover:bg-indigo-600 hover:text-white dark:hover:bg-indigo-600 px-6 py-2 rounded-xl font-bold transition">
                       View Project
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-20 text-gray-500 dark:text-gray-400">
                    <p class="text-xl">No projects found.</p>
                </div>
            @endforelse
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