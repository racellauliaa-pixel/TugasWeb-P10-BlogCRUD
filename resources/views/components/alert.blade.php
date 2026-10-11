@if (session('success'))
    <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-rose-50 border border-rose-200 text-rose-700 text-sm px-4 py-3 rounded-lg mb-6">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="bg-rose-50 border border-rose-200 text-rose-700 text-sm px-4 py-3 rounded-lg mb-6">
        <p class="font-semibold mb-1">Ada input yang belum sesuai:</p>
        <ul class="list-disc list-inside space-y-0.5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif