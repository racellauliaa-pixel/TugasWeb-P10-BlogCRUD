@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-alert />

    <article class="bg-white rounded-xl shadow-sm p-8">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                 class="w-full h-64 object-cover rounded-lg mb-6">
        @endif

        <h1 class="text-2xl font-bold text-slate-800 mb-2">{{ $post->title }}</h1>
        <p class="text-xs text-slate-400 mb-6">
            Dipublikasikan {{ $post->created_at->translatedFormat('d F Y, H:i') }}
        </p>

        <div class="text-slate-700 leading-relaxed whitespace-pre-line">{{ $post->content }}</div>

        <div class="flex gap-3 mt-8 pt-6 border-t border-slate-100">
            <a href="{{ route('posts.edit', $post) }}"
               class="text-sm font-medium px-5 py-2.5 rounded-lg border border-slate-300 text-slate-600 hover:bg-slate-50 transition">
                Edit
            </a>
            <a href="{{ route('posts.index') }}" class="text-sm font-medium text-indigo-600 px-5 py-2.5 hover:underline">
                &larr; Kembali ke Daftar
            </a>
        </div>
    </article>
@endsection