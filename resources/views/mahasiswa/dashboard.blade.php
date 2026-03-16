<x-app-layout>
    <div class="p-4 md:p-6 space-y-6 max-w-5xl mx-auto">

        <!-- Header Sederhana -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">
                    ✨ Penelitian Mahasiswa
                </h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Kelola pengajuan penelitian Anda dengan mudah
                </p>
            </div>

            <!-- Date Badge Minimalis -->
            <div class="bg-white dark:bg-gray-800 px-4 py-2 rounded-xl shadow-sm border text-sm text-gray-600">
                {{ now()->format('d M Y') }}
            </div>
        </div>

        <!-- Hero Section - Ajukan Penelitian -->
        <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-500 to-cyan-400 rounded-3xl shadow-xl">
            <!-- Pattern Background -->
            <div class="absolute inset-0 opacity-10">
                <svg class="absolute left-0 top-0 h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 0 L100 100 M100 0 L0 100" stroke="white" stroke-width="1" />
                </svg>
            </div>

            <div class="relative z-10 p-8 text-white">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-white/20 p-4 rounded-2xl backdrop-blur">
                            <flux:icon.beaker class="size-8" />
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold">Ajukan Penelitian Baru</h2>
                            <p class="text-blue-100 mt-2 max-w-lg text-sm">
                                Mulai pengajuan penelitian Anda ke Rumah Sakit Universitas Airlangga. Proses cepat, transparan, dan terintegrasi.
                            </p>

                            <!-- Step Indicators -->
                            <div class="flex items-center gap-6 mt-4">
                                <div class="flex items-center gap-2">
                                    <div class="bg-white/30 rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold">1</div>
                                    <span class="text-xs">Isi Form</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="bg-white/30 rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold">2</div>
                                    <span class="text-xs">Upload Berkas</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="bg-white/30 rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold">3</div>
                                    <span class="text-xs">Verifikasi</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="bg-white/30 rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold">4</div>
                                    <span class="text-xs">Selesai</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold hover:bg-blue-50 transition flex items-center justify-center gap-2 shadow-lg whitespace-nowrap">
                        <flux:icon.plus class="size-5" />
                        Pengajuan Baru
                    </a>
                </div>
            </div>
        </div>

        <!-- Pengajuan Terbaru (Simplified) -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl border overflow-hidden">
            <div class="p-6 border-b flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-white flex items-center gap-2">
                        <flux:icon.clock class="size-5 text-blue-600" />
                        Pengajuan Terbaru
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        3 pengajuan aktif terakhir
                    </p>
                </div>
                <a href="#" class="text-sm text-blue-600 hover:underline flex items-center gap-1">
                    Lihat Semua
                    <flux:icon.arrow-right class="size-4" />
                </a>
            </div>

            <div class="divide-y dark:divide-gray-700">
                <!-- Item 1 -->
                <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">
                                    Diproses
                                </span>
                                <span class="text-xs text-gray-400">#REG-001/2026</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 dark:text-white mb-1">
                                Analisis Rekam Medis Pasien Diabetes
                            </h3>
                            <p class="text-sm text-gray-500">Universitas Airlangga • 10 Maret 2026</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                            <flux:icon.chevron-right class="size-5" />
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">
                                    Selesai
                                </span>
                                <span class="text-xs text-gray-400">#REG-002/2026</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 dark:text-white mb-1">
                                Studi Kualitas Pelayanan Rawat Jalan
                            </h3>
                            <p class="text-sm text-gray-500">UIN Sunan Ampel • 20 Februari 2026</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                            <flux:icon.chevron-right class="size-5" />
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">
                                    Ditolak
                                </span>
                                <span class="text-xs text-gray-400">#REG-003/2026</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 dark:text-white mb-1">
                                Pengaruh Lingkungan Kerja terhadap Kinerja Perawat
                            </h3>
                            <p class="text-sm text-gray-500">Universitas Surabaya • 5 Februari 2026</p>
                        </div>
                        <a href="#" class="text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                            <flux:icon.chevron-right class="size-5" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Card -->
        <div class="bg-blue-50 dark:bg-blue-950/30 border border-blue-200 dark:border-blue-900 rounded-xl p-4 flex items-start gap-3">
            <flux:icon.information-circle class="size-5 text-blue-600 shrink-0 mt-0.5" />
            <div class="text-sm text-blue-800 dark:text-blue-300">
                <span class="font-semibold">Info:</span> Pengajuan diproses dalam 3-5 hari kerja.
                Untuk bantuan, hubungi tim riset di <span class="font-mono">(031) 1234-5678</span>
            </div>
        </div>

    </div>
</x-app-layout>