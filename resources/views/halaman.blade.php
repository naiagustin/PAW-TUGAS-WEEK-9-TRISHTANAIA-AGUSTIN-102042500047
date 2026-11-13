<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $judul }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4 p-4 bg-blue-50 border-l-4 border-blue-500 text-blue-700">
                    <p class="font-bold">Akses Berhasil Diberikan!</p>
                    <p>Anda masuk sebagai: <strong>{{ auth()->user()->name }}</strong> (Role: <span class="uppercase font-semibold">{{ auth()->user()->role }}</span>)</p>
                </div>

                <p class="text-gray-700 mb-6">{{ $deskripsi }}</p>

                <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                    &larr; Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>