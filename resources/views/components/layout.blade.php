<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 min-h-screen transition-colors duration-300">
    <nav class="max-w-5xl mx-auto p-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">Folio Pro</h1>
        <button id="theme-toggle" class="p-2 rounded-lg bg-gray-200 dark:bg-gray-800 hover:scale-105 transition-all">
            <span class="dark:hidden">🌙 Dark</span>
            <span class="hidden dark:block">☀️ Light</span>
        </button>
    </nav>
    <main class="max-w-5xl mx-auto p-6">
        {{ $slot }}
    </main>
    <script>
        const toggleBtn = document.getElementById('theme-toggle');
        toggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });
    </script>
</body>
</html>