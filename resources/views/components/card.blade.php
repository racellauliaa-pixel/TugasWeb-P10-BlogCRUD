@props(['post'])

<div class="bg-white rounded-xl shadow-sm overflow-hidden flex flex-col">
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
             class="w-full h-40 object-cover">
    @else
        <div class="w-full h-40 bg-slate-100 flex items-center justify-center text-slate-300 text-sm">
            Tanpa Gambar
        </div>
    @endif

    <div class="p-5 flex-1 flex flex-col">
        <h2 class="font-semibold text-slate-800 mb-2">{{ $post->title }}</h2>
        <p class="text-sm text-slate-500 flex-1">
            {{ Str::limit(strip_tags($post->content), 90) }}
        </p>

        <div class="flex items-center gap-3 mt-4 text-sm">
            <a href="{{ route('posts.show', $post) }}" class="text-indigo-600 font-medium hover:underline">
                Baca &rarr;
            </a>
            <a href="{{ route('posts.edit', $post) }}" class="text-slate-500 hover:underline">
                Edit
            </a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST"
                  onsubmit="return confirm('Yakin mau hapus post ini?');" class="ml-auto">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-rose-500 hover:underline">Hapus</button>
            </form>
        </div>
    </div>
</div>