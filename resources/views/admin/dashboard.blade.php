<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">

        <!-- Header Section -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Dashboard</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-sm text-gray-500 dark:text-gray-400">Selamat datang,</span>
                <span class="bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-medium">Admin</span>
            </div>
        </div>

        <!-- Statistik Cards dengan Lorem Ipsum -->
        <div class="grid auto-rows-min gap-6 md:grid-cols-4">
            <!-- Card 1 -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Lorem Ipsum</p>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2">1,234</p>
                        <p class="text-xs text-green-600 mt-2 flex items-center gap-1">
                            <span>↑</span> +12.5% dari bulan lalu
                        </p>
                    </div>
                    <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Dolor Sit Amet</p>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2">567</p>
                        <p class="text-xs text-green-600 mt-2 flex items-center gap-1">
                            <span>↑</span> +5.2% dari bulan lalu
                        </p>
                    </div>
                    <div class="bg-green-100 dark:bg-green-900/30 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Consectetur Adipiscing</p>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2">89</p>
                        <p class="text-xs text-red-600 mt-2 flex items-center gap-1">
                            <span>↓</span> -2.1% dari bulan lalu
                        </p>
                    </div>
                    <div class="bg-yellow-100 dark:bg-yellow-900/30 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Elit Sed Do</p>
                        <p class="text-2xl font-bold text-gray-800 dark:text-white mt-2">3,456</p>
                        <p class="text-xs text-green-600 mt-2 flex items-center gap-1">
                            <span>↑</span> +8.3% dari bulan lalu
                        </p>
                    </div>
                    <div class="bg-purple-100 dark:bg-purple-900/30 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik / Chart Section dengan Lorem Ipsum -->
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Grafik 1 -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Lorem Ipsum Dolor</h3>
                <div class="h-64 flex items-end justify-between gap-2">
                    <div class="w-full flex flex-col items-center gap-2">
                        <div class="w-full bg-blue-500 h-32 rounded-t-lg"></div>
                        <span class="text-xs text-gray-500">Jan</span>
                    </div>
                    <div class="w-full flex flex-col items-center gap-2">
                        <div class="w-full bg-blue-500 h-40 rounded-t-lg"></div>
                        <span class="text-xs text-gray-500">Feb</span>
                    </div>
                    <div class="w-full flex flex-col items-center gap-2">
                        <div class="w-full bg-blue-500 h-28 rounded-t-lg"></div>
                        <span class="text-xs text-gray-500">Mar</span>
                    </div>
                    <div class="w-full flex flex-col items-center gap-2">
                        <div class="w-full bg-blue-500 h-48 rounded-t-lg"></div>
                        <span class="text-xs text-gray-500">Apr</span>
                    </div>
                    <div class="w-full flex flex-col items-center gap-2">
                        <div class="w-full bg-blue-500 h-36 rounded-t-lg"></div>
                        <span class="text-xs text-gray-500">Mei</span>
                    </div>
                    <div class="w-full flex flex-col items-center gap-2">
                        <div class="w-full bg-blue-500 h-44 rounded-t-lg"></div>
                        <span class="text-xs text-gray-500">Jun</span>
                    </div>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- Grafik 2 -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Sed Do Eiusmod</h3>
                <div class="h-64 flex items-center justify-center">
                    <div class="grid grid-cols-2 gap-4 w-full">
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-24 rounded-full border-8 border-blue-500 flex items-center justify-center">
                                <span class="text-2xl font-bold text-blue-600">45%</span>
                            </div>
                            <p class="text-sm mt-2 text-gray-600 dark:text-gray-300">Kategori A</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-24 rounded-full border-8 border-green-500 flex items-center justify-center">
                                <span class="text-2xl font-bold text-green-600">30%</span>
                            </div>
                            <p class="text-sm mt-2 text-gray-600 dark:text-gray-300">Kategori B</p>
                        </div>
                        <div class="flex flex-col items-center col-span-2 mt-2">
                            <div class="w-24 h-24 rounded-full border-8 border-yellow-500 flex items-center justify-center mx-auto">
                                <span class="text-2xl font-bold text-yellow-600">25%</span>
                            </div>
                            <p class="text-sm mt-2 text-gray-600 dark:text-gray-300">Kategori C</p>
                        </div>
                    </div>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-4 text-center">Tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <!-- Tabel Data dengan Lorem Ipsum -->
        <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-sm">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Data Terbaru</h3>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 dark:bg-gray-700/50 text-gray-600 dark:text-gray-300">
                        <tr>
                            <th class="p-3">ID</th>
                            <th class="p-3">Lorem Ipsum</th>
                            <th class="p-3">Dolor Sit</th>
                            <th class="p-3">Amet</th>
                            <th class="p-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y dark:divide-gray-700">
                        <tr>
                            <td class="p-3">001</td>
                            <td class="p-3">Lorem ipsum dolor</td>
                            <td class="p-3">Consectetur</td>
                            <td class="p-3">15 Mar 2026</td>
                            <td class="p-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Selesai</span></td>
                        </tr>
                        <tr>
                            <td class="p-3">002</td>
                            <td class="p-3">Sed do eiusmod</td>
                            <td class="p-3">Adipiscing</td>
                            <td class="p-3">14 Mar 2026</td>
                            <td class="p-3"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Proses</span></td>
                        </tr>
                        <tr>
                            <td class="p-3">003</td>
                            <td class="p-3">Tempor incididunt</td>
                            <td class="p-3">Elit sed</td>
                            <td class="p-3">13 Mar 2026</td>
                            <td class="p-3"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Baru</span></td>
                        </tr>
                        <tr>
                            <td class="p-3">004</td>
                            <td class="p-3">Ut labore et</td>
                            <td class="p-3">Dolore magna</td>
                            <td class="p-3">12 Mar 2026</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs">Ditolak</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-between mt-4">
                <p class="text-xs text-gray-500">Menampilkan 1-4 dari 24 data</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1 border rounded text-sm">Previous</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded text-sm">Next</button>
                </div>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="text-center text-xs text-gray-400 dark:text-gray-500 py-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

    </div>
</x-layouts::app>