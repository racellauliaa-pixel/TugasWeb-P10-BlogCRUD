@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <x-alert />

    <div class="flex items-center justify-between flex-wrap gap-3 mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Daftar Post</h1>

        <form method="GET" action="{{ route('posts.index') }}" class="flex gap-2">
            <input type="text" name="q" value="{{ $keyword }}" placeholder="Cari judul post..."
                   class="border border-slate-300 rounded-lg px-3 py-2 text-sm w-56 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            <button type="submit"
                    class="bg-slate-800 text-white text-sm px-4 py-2 rounded-lg hover:bg-slate-700 transition">
                Cari
            </button>
            @if ($keyword !== '')
                <a href="{{ route('posts.index') }}"
                   class="text-sm px-3 py-2 text-slate-500 hover:underline">Reset</a>
            @endif
        </form>
    </div>

    @if ($posts->isEmpty())
        <p class="text-center text-slate-400 italic py-16">
            {{ $keyword !== '' ? 'Nggak ada post yang cocok dengan pencarian itu.' : 'Belum ada post. Yuk tambah dulu!' }}
        </p>
    @else
        <div class="grid sm:grid-cols-2 gap-5">
            @foreach ($posts as $post)
                <x-card :post="$post" />
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    @endif
@endsection