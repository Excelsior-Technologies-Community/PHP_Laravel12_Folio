<?php
use function Laravel\Folio\name;
name('users.profile');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">User Profile</h1>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200">Home</a>
                <a href="/users/{{ $id }}" class="text-white hover:text-indigo-200">Refresh</a>
                <button id="theme-toggle" class="text-white">Toggle Mode</button>
            </nav>
        </div>
    </header>

    <main class="max-w-2xl mx-auto mt-16 px-6">
        <div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-2xl border dark:border-gray-800 text-center">
            
            <div class="w-32 h-32 bg-indigo-100 dark:bg-indigo-900 rounded-full mx-auto mb-6 flex items-center justify-center text-4xl text-indigo-600 dark:text-indigo-400 font-bold border-4 border-indigo-50">
                U{{ $id }}
            </div>

            <h2 class="text-3xl font-extrabold mb-2">User Account #{{ $id }}</h2>
            <p class="text-gray-500 dark:text-gray-400 mb-8">Member since June 2026</p>

            <div class="grid grid-cols-2 gap-4 text-left">
                <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                    <p class="text-xs text-gray-400 uppercase font-bold">Status</p>
                    <p class="font-semibold text-green-500">Active</p>
                </div>
                <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
                    <p class="text-xs text-gray-400 uppercase font-bold">Role</p>
                    <p class="font-semibold">Subscriber</p>
                </div>
            </div>

            <div class="mt-8">
                <a href="/users/{{ (int)$id + 1 }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-xl font-bold transition-all">
                    Next User
                </a>
            </div>
        </div>
    </main>

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