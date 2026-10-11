@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')
    <x-alert />

    <div class="bg-white rounded-xl shadow-sm p-8">
        <h1 class="text-2xl font-bold text-slate-800 mb-6">Tambah Post Baru</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">Judul</label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400"
                       placeholder="Judul post">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">Isi Post</label>
                <textarea name="content" rows="6"
                          class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400"
                          placeholder="Tulis isi post di sini...">{{ old('content') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-600 mb-1">Gambar (opsional)</label>
                <input type="file" name="image" accept="image/*"
                       class="w-full text-sm text-slate-600 border border-slate-300 rounded-lg px-3 py-2">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-500 transition text-white text-sm font-medium px-5 py-2.5 rounded-lg">
                    Simpan
                </button>
                <a href="{{ route('posts.index') }}"
                   class="text-sm font-medium px-5 py-2.5 rounded-lg border border-slate-300 text-slate-600 hover:bg-slate-50 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection