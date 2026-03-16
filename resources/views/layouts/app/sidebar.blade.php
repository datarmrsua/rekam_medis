<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')

    {{-- Optimasi Loading --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* ===== LOADER PREMIUM (PERSIS CONTOH) ===== */
        #loader-wrapper {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: radial-gradient(circle at 30% 30%, #0a1a2f, #030712);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.8s;
        }

        .loader-orb {
            position: relative;
            width: min(140px, 25vw);
            height: min(140px, 25vw);
            max-width: 140px;
            max-height: 140px;
        }

        .loader-orb__ring {
            position: absolute;
            inset: 0;
            border-radius: 50%;
            border: 4px solid transparent;
            border-top-color: #FFD700;
            border-right-color: rgba(255, 215, 0, 0.3);
            animation: spin 1.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
            filter: drop-shadow(0 0 10px rgba(255, 215, 0, 0.5));
        }

        .loader-orb__ring:nth-child(2) {
            inset: min(12px, 2vw);
            border-top-color: #60A5FA;
            border-right-color: rgba(96, 165, 250, 0.2);
            animation-direction: reverse;
            animation-duration: 2.2s;
        }

        .loader-orb__ring:nth-child(3) {
            inset: min(24px, 4vw);
            border-top-color: #FFFFFF;
            border-right-color: rgba(255, 255, 255, 0.2);
            animation-duration: 1.8s;
            opacity: 0.8;
        }

        .loader-orb__core {
            position: absolute;
            inset: min(40px, 7vw);
            background: linear-gradient(135deg, #003366, #001a33);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.1);
                opacity: 1;
            }
        }

        .loader-brand {
            margin-top: clamp(1.5rem, 5vw, 2.5rem);
            text-align: center;
            padding: 0 1rem;
        }

        .loader-brand__title {
            color: white;
            font-size: clamp(1rem, 4vw, 1.25rem);
            font-weight: 800;
            letter-spacing: clamp(3px, 2vw, 6px);
            text-transform: uppercase;
            background: linear-gradient(135deg, #ffffff 0%, #FFD700 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .loader-brand__divider {
            width: min(50px, 15vw);
            height: 3px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            margin: clamp(10px, 3vw, 15px) auto;
            border-radius: 2px;
        }

        .loader-brand__sub {
            color: rgba(255, 255, 255, 0.8);
            font-size: clamp(0.6rem, 2.5vw, 0.7rem);
            font-weight: 500;
            letter-spacing: clamp(2px, 1.5vw, 3px);
            text-transform: uppercase;
        }

        /* Animasi fade untuk konten */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Transisi sidebar */
        .sidebar-transition {
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .content-transition {
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-50 dark:bg-gray-950 font-['Inter',sans-serif] antialiased overflow-hidden fade-in">

    <!-- Loader Premium - Persis Contoh -->
    <div id="loader-wrapper">
        <div class="loader-orb">
            <div class="loader-orb__ring"></div>
            <div class="loader-orb__ring"></div>
            <div class="loader-orb__ring"></div>
            <div class="loader-orb__core">
                <svg class="w-10 h-10 text-[#FFD700]" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
            </div>
        </div>
        <div class="loader-brand">
            <div class="loader-brand__title">Instalasi Rekam Medis</div>
            <div class="loader-brand__divider"></div>
            <div class="loader-brand__sub">Rumah Sakit Universitas Airlangga</div>
        </div>
    </div>

    @php
    $isSidebarCollapsed = true; // Default tertutup
    @endphp

    <div x-data="{ 
        sidebarOpen: false, // Default tertutup
        init() {
            // Baca dari localStorage jika ada
            const saved = localStorage.getItem('sidebarCollapsed');
            if (saved !== null) {
                this.sidebarOpen = saved === 'false';
            } else {
                this.sidebarOpen = false; // Default tertutup
            }
        },
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
            localStorage.setItem('sidebarCollapsed', !this.sidebarOpen);
        }
    }" class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        <aside
            :class="sidebarOpen ? 'w-64' : 'w-20'"
            class="fixed inset-y-0 left-0 bg-[#003366] dark:bg-[#002244] border-r border-[#FFD700]/20 shadow-xl flex flex-col sidebar-transition z-30">

            {{-- Header Sidebar --}}
            <div class="flex items-center justify-between px-4 py-5 border-b border-[#FFD700]/20">
                <div class="flex items-center gap-3 overflow-hidden">
                    {{-- Logo dengan Tepi Kuning Tipis --}}
                    @props(['size' => '10'])

                    <div {{ $attributes->merge(['class' => "w-$size h-$size flex items-center justify-center flex-shrink-0 border border-[#FFD700]/30 rounded-full p-1"]) }}>
                        <img
                            src="{{ asset('assets/img/unair.png') }}"
                            alt="Logo Universitas Airlangga"
                            class="w-full h-full object-contain">
                    </div>

                    {{-- Teks UNAIR --}}
                    <div x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="flex flex-col">
                        <span class="font-bold text-sm tracking-wider text-white whitespace-nowrap">RS UNAIR</span>
                        <span class="text-[10px] text-[#FFD700]/80 tracking-wider whitespace-nowrap">INSTALASI REKAM MEDIS</span>
                    </div>
                </div>
            </div>

            {{-- Navigasi Sidebar --}}
            <nav class="flex-1 px-3 py-6 space-y-6 overflow-y-auto overflow-x-hidden">
                {{-- Menu Utama --}}
                <div>
                    <div x-show="sidebarOpen" x-transition class="text-[#FFD700]/50 text-[10px] tracking-[2px] font-bold px-3 mb-2 whitespace-nowrap">
                        MENU UTAMA
                    </div>
                    <div class="space-y-1">
                        {{-- Dashboard --}}
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center gap-3 px-3 py-2.5 text-sm rounded-lg transition-all duration-200 group relative {{ request()->routeIs('dashboard') ? 'bg-[#FFD700]/15 text-[#FFD700] font-medium' : 'text-white hover:bg-white/10 hover:text-white' }}"
                            :class="{ 'justify-center': !sidebarOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-[#FFD700]' : 'text-white/70' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="whitespace-nowrap">Dashboard</span>

                            {{-- Tooltip saat collapsed --}}
                            <span x-show="!sidebarOpen" class="absolute left-full ml-2 bg-[#003366] text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50 shadow-lg" x-cloak>Dashboard</span>
                        </a>

                        {{-- Wabah --}}
                        <a href="#"
                            class="flex items-center gap-3 px-3 py-2.5 text-sm text-white rounded-lg hover:bg-white/10 hover:text-white transition-all duration-200 group relative"
                            :class="{ 'justify-center': !sidebarOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">Form Wabah</span>
                            <span x-show="!sidebarOpen" class="absolute left-full ml-2 bg-[#003366] text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50 shadow-lg" x-cloak>Data Kredensial</span>
                        </a>

                        {{-- Riwayat --}}
                        <a href="#"
                            class="flex items-center gap-3 px-3 py-2.5 text-sm text-white rounded-lg hover:bg-white/10 hover:text-white transition-all duration-200 group relative"
                            :class="{ 'justify-center': !sidebarOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">Riwayat</span>
                            <span x-show="!sidebarOpen" class="absolute left-full ml-2 bg-[#003366] text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50 shadow-lg" x-cloak>Riwayat</span>
                        </a>
                    </div>
                </div>

                {{-- Sistem --}}
                <div>
                    <div x-show="sidebarOpen" x-transition class="text-[#FFD700]/50 text-[10px] tracking-[2px] font-bold px-3 mb-2 whitespace-nowrap">
                        SISTEM
                    </div>
                    <div class="space-y-1">
                        {{-- Pengaturan --}}
                        <a href="#"
                            class="flex items-center gap-3 px-3 py-2.5 text-sm text-white rounded-lg hover:bg-white/10 hover:text-white transition-all duration-200 group relative"
                            :class="{ 'justify-center': !sidebarOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">Pengaturan</span>
                            <span x-show="!sidebarOpen" class="absolute left-full ml-2 bg-[#003366] text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50 shadow-lg" x-cloak>Pengaturan</span>
                        </a>

                        {{-- Log Activity --}}
                        <a href="#"
                            class="flex items-center gap-3 px-3 py-2.5 text-sm text-white rounded-lg hover:bg-white/10 hover:text-white transition-all duration-200 group relative"
                            :class="{ 'justify-center': !sidebarOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">Log Activity</span>
                            <span x-show="!sidebarOpen" class="absolute left-full ml-2 bg-[#003366] text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity duration-200 whitespace-nowrap z-50 shadow-lg" x-cloak>Log Activity</span>
                        </a>
                    </div>
                </div>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main
            :class="sidebarOpen ? 'ml-64' : 'ml-20'"
            class="flex-1 content-transition">

            {{-- Navbar dengan Toggle Sidebar --}}
            <nav class="bg-[#003366] dark:bg-[#002244] border-b border-[#FFD700]/20 sticky top-0 z-40 shadow-md">
                <div class="px-6 py-3">
                    <div class="flex items-center justify-between">
                        {{-- Left Section dengan Toggle Button --}}
                        <div class="flex items-center gap-4">
                            {{-- Tombol toggle sidebar di navbar --}}
                            <button
                                @click="toggleSidebar"
                                class="text-white/70 hover:text-[#FFD700] transition-colors p-1.5 rounded-lg hover:bg-white/10"
                                :title="sidebarOpen ? 'Ciutkan Sidebar' : 'Perluas Sidebar'">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 transition-transform duration-300"
                                    :class="{ 'rotate-180': !sidebarOpen }"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                                </svg>
                            </button>

                            {{-- Breadcrumb --}}
                            <div class="hidden lg:flex items-center space-x-2 text-sm">
                                <span class="text-white/70">UNAIR</span>
                                <span class="text-[#FFD700]">/</span>
                                <span class="text-white font-medium">@yield('title', 'Dashboard')</span>
                            </div>
                        </div>

                        {{-- Right Section --}}
                        <div class="flex items-center gap-4">
                            {{-- Search Bar --}}
                            <div class="relative hidden md:block">
                                <input type="text"
                                    placeholder="Cari..."
                                    class="w-64 pl-10 pr-4 py-2 text-sm bg-white/10 border border-[#FFD700]/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-[#FFD700] focus:ring-1 focus:ring-[#FFD700] transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white/50 absolute left-3 top-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            {{-- Notifications --}}
                            <button class="relative p-2 text-white/70 hover:text-[#FFD700] transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span class="absolute top-2 right-2 w-2 h-2 bg-[#FFD700] rounded-full border-2 border-[#003366]"></span>
                            </button>

                            {{-- Vertical Divider --}}
                            <div class="h-6 w-px bg-white/20 mx-1"></div>

                            {{-- User Profile Dropdown --}}
                            <flux:dropdown position="bottom" align="end">
                                <button class="flex items-center gap-3 p-1 rounded-lg hover:bg-white/10 transition-all outline-none group">
                                    <div class="flex flex-col items-end hidden sm:flex">
                                        <span class="text-xs font-bold text-white leading-none uppercase">{{ auth()->user()->name }}</span>
                                        <span class="text-[10px] text-[#FFD700] font-medium leading-none mt-1">Online</span>
                                    </div>

                                    {{-- Profile Avatar/Icon --}}
                                    <div class="w-9 h-9 rounded-full bg-[#FFD700] border-2 border-[#FFD700]/30 flex items-center justify-center text-[#003366] font-black text-sm shadow-inner group-hover:scale-105 transition-transform">
                                        {{ auth()->user()->initials() }}
                                    </div>
                                </button>

                                <flux:menu class="w-48">
                                    <flux:menu.item icon="user" :href="route('profile.edit')" wire:navigate>Profil Saya</flux:menu.item>
                                    <flux:menu.item icon="cog-8-tooth">Pengaturan Akun</flux:menu.item>

                                    <flux:menu.separator />

                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <flux:menu.item
                                            as="button"
                                            type="submit"
                                            icon="arrow-right-start-on-rectangle"
                                            class="w-full text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20">
                                            Keluar
                                        </flux:menu.item>
                                    </form>
                                </flux:menu>
                            </flux:dropdown>
                        </div>
                    </div>
                </div>
            </nav>

            {{-- Content --}}
            <div class="pt-1 lg:pt-2 px-6 lg:px-10 pb-3 lg:pb-5 overflow-y-auto h-[calc(100vh-64px)]">
                {{-- Loading Indicator untuk navigasi --}}
                <div wire:loading.flex class="fixed top-20 right-4 z-50 items-center gap-2 bg-[#003366] text-white px-4 py-2 rounded-lg shadow-lg">
                    <svg class="animate-spin h-4 w-4 text-[#FFD700]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="text-sm">Memuat...</span>
                </div>

                {{-- Slot Content --}}
                {{ $slot }}
            </div>
        </main>
    </div>

    @fluxScripts

    <script>
        // Loader premium dengan timing yang tepat
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader-wrapper');
            setTimeout(() => {
                loader.style.opacity = '0';
                loader.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 800);
            }, 1500); // 1.5 detik sesuai contoh
        });

        // Fallback jika load terlalu cepat
        document.addEventListener('DOMContentLoaded', function() {
            // Minimal tampil 1.5 detik
            setTimeout(function() {
                const loader = document.getElementById('loader-wrapper');
                if (loader.style.opacity !== '0') {
                    loader.style.opacity = '0';
                    loader.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        loader.style.display = 'none';
                    }, 800);
                }
            }, 1500);
        });
    </script>
</body>

</html>