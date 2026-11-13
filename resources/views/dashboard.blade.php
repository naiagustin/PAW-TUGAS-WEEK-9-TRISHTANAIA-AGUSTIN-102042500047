<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Aplikasi Akademik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-900 text-lg mb-2">
                    Selamat datang, <strong>{{ auth()->user()->name }}</strong>!
                </p>
                <p class="text-gray-600 mb-6">
                    Status Role Anda: <span class="px-2 py-1 bg-indigo-100 text-indigo-800 rounded font-semibold uppercase text-sm">{{ auth()->user()->role }}</span>
                </p>

                <h3 class="font-semibold text-gray-700 mb-3">Menu Uji Akses Route:</h3>
                <div class="flex flex-wrap gap-3">
                    <a href="/manajemen-pengguna" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 text-sm font-medium">
                        Manajemen Pengguna (Admin)
                    </a>
                    <a href="/kelola-materi" class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 text-sm font-medium">
                        Kelola Materi (Admin & Dosen)
                    </a>
                    <a href="/kelola-nilai" class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 text-sm font-medium">
                        Kelola Nilai (Admin & Dosen)
                    </a>
                    <a href="/lihat-materi" class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 text-sm font-medium">
                        Lihat Materi (Semua Role)
                    </a>
                    <a href="/lihat-nilai" class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 text-sm font-medium">
                        Lihat Nilai (Semua Role)
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>