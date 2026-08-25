<x-layouts::dashboard>

    <div class="mb-6">
        <h1 class="font-display text-2xl font-bold text-[#0F2A25]">Dashboard Bendahara</h1>
        <p class="mt-1 text-sm text-gray-500">Ringkasan keuangan dan status pembayaran komunitas kamu.</p>
    </div>

    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <h2 class="font-display text-lg font-bold text-[#0F2A25]">Aksi Cepat</h2>
        <div class="flex flex-wrap gap-2">
            <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-teal-600/25 transition hover:bg-teal-700 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Terbitkan Tagihan
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Input Tunai
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Ekspor Laporan
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
        @foreach ([
            ['label' => 'Total Anggota Aktif', 'value' => '148 Anggota', 'sub' => '+3 baru bulan ini', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
            ['label' => 'Tagihan Bulan Ini', 'value' => 'Rp 14.800.000', 'sub' => 'Periode Maret 2026', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
            ['label' => 'Sudah Lunas', 'value' => 'Rp 9.200.000', 'sub' => '92 transaksi terverifikasi', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
            ['label' => 'Menunggu Verifikasi', 'value' => '18 Transaksi', 'sub' => 'Segera konfirmasi bukti', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
            ['label' => 'Total Tunggakan', 'value' => 'Rp 5.600.000', 'sub' => 'Oleh 56 anggota', 'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z'],
        ] as ['label' => $label, 'value' => $value, 'sub' => $sub, 'icon' => $iconPath])
            <div class="rounded-xl border border-gray-100 bg-white p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">{{ $label }}</p>
                    <svg class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $iconPath }}"/>
                    </svg>
                </div>
                <p class="mt-2 font-mono text-xl font-semibold text-[#0F2A25]">{{ $value }}</p>
                <p class="mt-1 text-xs text-gray-400">{{ $sub }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6 grid gap-6 xl:grid-cols-5">

        <div class="rounded-xl border border-gray-100 bg-white p-6 xl:col-span-3">
            <div class="mb-4 flex flex-wrap items-center justify-between gap-2">
                <h3 class="font-display text-base font-bold text-[#0F2A25]">Pemasukan vs Pengeluaran (6 Bulan Terakhir)</h3>
                <div class="flex items-center gap-4 text-xs text-gray-500">
                    <span class="flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-teal-600"></span> Pemasukan</span>
                    <span class="flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-amber-500"></span> Pengeluaran</span>
                </div>
            </div>
            <div id="cashflow-chart" class="h-72 w-full"></div>
        </div>

        <div class="rounded-xl border border-gray-100 bg-white p-6 xl:col-span-2">
            <div class="mb-4 flex items-center justify-between">
                <h3 class="font-display text-base font-bold text-[#0F2A25]">Aktivitas Pembayaran Terbaru</h3>
                <a href="#" class="text-sm font-semibold text-teal-700 hover:text-teal-900">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs uppercase tracking-wide text-gray-400">
                            <th class="py-2 pr-3 font-semibold">Nama Anggota</th>
                            <th class="py-2 pr-3 font-semibold">Jenis</th>
                            <th class="py-2 pr-3 font-semibold">Nominal</th>
                            <th class="py-2 font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['Budi Santoso', 'Iuran Bulanan', 'Rp 100.000', 'Lunas', 'bg-green-50 text-green-700'],
                            ['Siti Rahmawati', 'Sumbangan', 'Rp 250.000', 'Menunggu Verifikasi', 'bg-amber-50 text-amber-700'],
                            ['Slamat Rahardjo', 'Iuran Bulanan', 'Rp 100.000', 'Tunggakan', 'bg-red-50 text-red-700'],
                            ['Dewi Lestari', 'Sumbangan', 'Rp 150.000', 'Lunas', 'bg-green-50 text-green-700'],
                            ['Andi Wijaya', 'Iuran Bulanan', 'Rp 100.000', 'Lunas', 'bg-green-50 text-green-700'],
                        ] as [$nama, $jenis, $nominal, $status, $badge])
                            <tr class="border-b border-gray-50 last:border-0">
                                <td class="py-3 pr-3 font-medium text-[#0F2A25]">{{ $nama }}</td>
                                <td class="py-3 pr-3 text-gray-500">{{ $jenis }}</td>
                                <td class="py-3 pr-3 font-mono text-[#0F2A25]">{{ $nominal }}</td>
                                <td class="py-3">
                                    <span class="inline-flex items-center px-2.5 py-1 text-xs font-semibold rounded-full {{ $badge }}">{{ $status }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layouts::dashboard>
