<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Penelitan') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50 text-slate-800">

    <div class="min-h-screen flex flex-col">

        <!-- Header -->
        <header class="sticky top-0 z-50 w-full bg-white/90 backdrop-blur-md border-b border-slate-200 shadow-xs">
            <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">

                <!-- Logo dan identitas -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/unair.png') }}" alt="Logo Unair" class="h-10 w-auto">
                    <div class="hidden md:block border-l pl-4 border-slate-300">
                        <h2 class="text-sm font-bold leading-tight text-blue-900 uppercase">Pengajuan Penelitian</h2>
                        <p class="text-[10px] font-medium text-slate-500 uppercase tracking-wide">Mahasiswa</p>
                    </div>
                </div>

                <!-- Navigasi utama -->
                <nav class="flex items-center gap-1">
                    <a href="#" class="flex flex-col items-center px-4 py-2 rounded-lg bg-blue-50 text-blue-700 border-b-2 border-blue-600">
                        <flux:icon.home variant="mini" class="w-5 h-5" />
                        <span class="text-[10px] font-bold uppercase mt-0.5">Layanan</span>
                    </a>
                    <a href="#" class="flex flex-col items-center px-4 py-2 rounded-lg text-slate-500 hover:bg-slate-100 transition">
                        <flux:icon.document-text variant="mini" class="w-5 h-5" />
                        <span class="text-[10px] font-bold uppercase mt-0.5">Permohonan</span>
                    </a>
                    <a href="#" class="relative flex flex-col items-center px-4 py-2 rounded-lg text-slate-500 hover:bg-slate-100 transition">
                        <flux:icon.bell variant="mini" class="w-5 h-5" />
                        <span class="text-[10px] font-bold uppercase mt-0.5">Notifikasi</span>
                        <span class="absolute top-2 right-3 flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                        </span>
                    </a>
                </nav>

                <!-- Dropdown Profil -->
                <div class="relative" x-data="{ open: false }">
                    <!-- Tombol Profil -->
                    <button @click="open = !open" class="flex items-center gap-3 hover:bg-slate-50 p-2 rounded-lg transition">
                        <div class="hidden sm:block text-right">
                            <p class="text-xs font-bold text-slate-800 leading-tight">{{ auth()->user()->name ?? 'EKHFA NARDARI' }}</p>
                            <p class="text-[10px] text-slate-500 font-medium">{{ auth()->user()->getRoleNames()->first() ?? 'Staff' }}</p>
                        </div>
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white font-bold text-sm shadow-sm">
                            {{ substr(auth()->user()->name ?? 'E', 0, 1) }}
                        </div>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border py-1 z-50" x-cloak>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 flex items-center gap-2 transition">
                                <flux:icon.arrow-right-start-on-rectangle class="w-4 h-4" />
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </header>

        <!-- Konten utama -->
        <main class="flex-1 max-w-4xl w-full mx-auto px-4 py-8">
            <div class="space-y-6">
                {{ $slot }}
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-slate-200 py-8">
            <div class="text-center">
                <div class="flex justify-center gap-1.5 mb-3">
                    <span class="h-1 w-6 rounded-full bg-blue-600"></span>
                    <span class="h-1 w-3 rounded-full bg-cyan-400"></span>
                </div>
                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">
                    &copy; {{ date('Y') }} RS Universitas Airlangga Surabaya
                </p>
            </div>
        </footer>

    </div>

    <!-- Tambahkan Alpine.js untuk dropdown -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @fluxScripts

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</body>

</html>