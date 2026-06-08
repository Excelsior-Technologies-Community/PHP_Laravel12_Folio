<?php
use function Laravel\Folio\name;
name('chat.session');
?>

<x-layout>
    <div class="max-w-3xl mx-auto">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold dark:text-white">Session: #{{ $id }}</h1>
                <button id="theme-toggle" class="bg-indigo-100 dark:bg-gray-700 text-indigo-700 dark:text-indigo-300 px-4 py-2 rounded-lg font-medium hover:scale-105 transition-all">
                    Toggle Mode
                </button>
            </div>

            <div id="chat-box" class="h-96 overflow-y-auto border-t dark:border-gray-700 pt-4 space-y-4 pr-2">
                <div class="p-3 bg-gray-100 dark:bg-gray-700 rounded-lg text-sm max-w-[80%]">
                    Agent initialized for session {{ $id }}. How can I assist you today?
                </div>
            </div>

            <div class="mt-4 flex gap-2">
                <input type="text" id="user-input" placeholder="Ask something..." 
                       class="flex-1 bg-gray-50 dark:bg-gray-900 border dark:border-gray-600 p-3 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none dark:text-white">
                <button id="send-btn" class="bg-indigo-600 text-white px-6 rounded-xl font-bold hover:bg-indigo-700">
                    Send
                </button>
            </div>
        </div>
    </div>

    <script>
        const chatBox = document.getElementById('chat-box');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');
        const toggleBtn = document.getElementById('theme-toggle');

        toggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });

        function sendMessage() {
            const message = userInput.value;
            if (!message) return;

            chatBox.innerHTML += `<div class="p-3 bg-indigo-600 text-white rounded-lg text-sm ml-auto max-w-[80%]">${message}</div>`;
            userInput.value = '';
            chatBox.scrollTop = chatBox.scrollHeight;

            setTimeout(() => {
                chatBox.innerHTML += `<div class="p-3 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-100 rounded-lg text-sm max-w-[80%]">
                    RAG-based response for: <strong>${message}</strong>. Data retrieved successfully.
                </div>`;
                chatBox.scrollTop = chatBox.scrollHeight;
            }, 1000);
        }

        sendBtn.addEventListener('click', sendMessage);
        userInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); });
    </script>
</x-layout>