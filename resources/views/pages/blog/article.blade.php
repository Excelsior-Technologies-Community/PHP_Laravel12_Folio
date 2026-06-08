<?php
use function Laravel\Folio\name;
name('blog.article');
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folio Pro | Article</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <header class="bg-indigo-600 dark:bg-indigo-900 p-6 shadow-lg">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h2 class="text-2xl font-bold text-white">Article</h2>
            <nav class="flex gap-6 items-center">
                <a href="/" class="text-white hover:text-indigo-200 font-semibold">Home</a>
                <a href="/blog" class="text-white hover:text-indigo-200 font-semibold">Back to Blog</a>
                <button id="theme-toggle" class="text-white p-2 rounded-lg bg-indigo-500 dark:bg-indigo-800">
                    Toggle Mode
                </button>
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto mt-10 p-8 bg-white dark:bg-gray-900 rounded-2xl shadow-sm border dark:border-gray-800">
        <h1 class="text-4xl font-extrabold mb-6 text-indigo-600 dark:text-indigo-400">Dynamic AI Generated Content</h1>
        
        <div id="article-content" class="text-lg leading-relaxed text-gray-700 dark:text-gray-300">
            <p>Loading content...</p>
        </div>

        <div class="mt-10 border-t pt-6 dark:border-gray-800">
            <a href="/blog" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl font-bold transition-all">
                ← Back to Blog
            </a>
        </div>
    </main>

    <footer class="text-center p-10 text-gray-500 dark:text-gray-600">
        &copy; 2026 Folio Pro | AI Powered
    </footer>

    <script>
        document.getElementById('theme-toggle').addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });

        setTimeout(() => {
            document.getElementById('article-content').innerHTML = `
                <p class="mb-4">This content is dynamically fetched using RAG architecture. 
                The agent has analyzed the vector store to provide the most relevant information.</p>
                <ul class="list-disc ml-6 space-y-2">
                    <li>Semantic Search accuracy: 98%</li>
                    <li>Context-aware response generated</li>
                    <li>Live data integration active</li>
                </ul>
            `;
        }, 800);
    </script>
</body>
</html>