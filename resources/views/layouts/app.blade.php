<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog') — Tugas Rutin 10</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col">

    <nav class="bg-slate-900 text-white">
        <div class="max-w-4xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('posts.index') }}" class="font-bold text-lg tracking-wide">TR10 • Blog CRUD</a>
            <a href="{{ route('posts.create') }}"
               class="bg-indigo-600 hover:bg-indigo-500 transition text-sm font-medium px-4 py-2 rounded-lg">
                + Post Baru
            </a>
        </div>
    </nav>

    <main class="flex-1 max-w-4xl mx-auto w-full px-6 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-xs text-slate-400 py-6">
        Tugas Rutin 10 Pemrograman Web Blog CRUD dengan Laravel
    </footer>

</body>
</html>