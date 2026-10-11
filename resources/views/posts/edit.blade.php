@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <x-alert />

    <div class="bg-white rounded-xl shadow-sm p-8">
        <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">Judul</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}"
                       class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">Isi Post</label>
                <textarea name="content" rows="6"
                          class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400">{{ old('content', $post->content) }}</textarea>
            </div>

            @if ($post->image)
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1">Gambar Saat Ini</label>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                         class="w-40 h-28 object-cover rounded-lg">
                </div>
            @endif

            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">Ganti Gambar (opsional)</label>
                <input type="file" name="image" accept="image/*"
                       class="w-full text-sm text-slate-600 border border-slate-300 rounded-lg px-3 py-2">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-500 transition text-white text-sm font-medium px-5 py-2.5 rounded-lg">
                    Update
                </button>
                <a href="{{ route('posts.index') }}"
                   class="text-sm font-medium px-5 py-2.5 rounded-lg border border-slate-300 text-slate-600 hover:bg-slate-50 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection