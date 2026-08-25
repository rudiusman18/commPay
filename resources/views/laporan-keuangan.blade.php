<x-layouts::dashboard>

    <div class="mb-6">
        <h1 class="font-display text-2xl font-bold text-[#0F2A25]">Laporan Keuangan</h1>
        <p class="mt-1 text-sm text-gray-500">Buku kas digital, jurnal transaksi masuk/keluar, dan daftar tunggakan.</p>
    </div>

    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <div class="flex flex-wrap gap-2">
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                Tahun: 2026
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                Bulan: Maret
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-wrap gap-2">
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-50 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                </svg>
                Unduh PDF
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-green-700 transition hover:bg-green-50 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Unduh Excel
            </button>
        </div>
    </div>

    <div class="grid gap-4 sm:grid-cols-3">
        @foreach ([
            ['Total Pemasukan', 'Rp 32.400.000', 'text-green-700'],
            ['Total Pengeluaran', 'Rp 14.200.000', 'text-red-700'],
            ['Saldo Kas Sekarang', 'Rp 18.200.000', 'text-teal-700'],
        ] as [$label, $value, $color])
            <div class="rounded-xl border border-gray-100 bg-white p-6">
                <p class="text-sm text-gray-500">{{ $label }}</p>
                <p class="mt-2 font-mono text-2xl font-bold {{ $color }}">{{ $value }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6 grid gap-6 xl:grid-cols-5">

        <div class="rounded-xl border border-gray-100 bg-white p-6 xl:col-span-3">
            <h3 class="font-display text-base font-bold text-[#0F2A25]">Jurnal Arus Kas</h3>
            <div class="mt-4 overflow-x-auto">
                <table class="w-full min-w-[560px] text-left text-sm">
                    <thead>
                        <tr class="border-b border-gray-100 text-xs uppercase tracking-wide text-gray-400">
                            <th class="py-2 pr-3 font-semibold">Tanggal</th>
                            <th class="py-2 pr-3 font-semibold">Deskripsi</th>
                            <th class="py-2 pr-3 font-semibold">Kategori</th>
                            <th class="py-2 pr-3 text-right font-semibold">Masuk</th>
                            <th class="py-2 text-right font-semibold">Keluar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['10 Mar 2026', 'Penarikan Biaya Listrik', 'Operasional', null, 'Rp 350.000'],
                            ['09 Mar 2026', 'Kolektif Iuran Rutin - 12 Anggota', 'Iuran Bulanan', 'Rp 1.200.000', null],
                            ['05 Mar 2026', 'Bantuan Konsumsi Kegiatan Posyandu', 'Kegiatan', null, 'Rp 500.000'],
                            ['01 Mar 2026', 'Kolektif Iuran Rutin - 24 Anggota', 'Iuran Bulanan', 'Rp 2.400.000', null],
                        ] as [$tanggal, $deskripsi, $kategori, $masuk, $keluar])
                            <tr class="border-b border-gray-50 last:border-0">
                                <td class="py-3 pr-3 font-mono text-gray-500">{{ $tanggal }}</td>
                                <td class="py-3 pr-3 font-medium text-[#0F2A25]">{{ $deskripsi }}</td>
                                <td class="py-3 pr-3 text-gray-500">{{ $kategori }}</td>
                                <td class="py-3 pr-3 text-right font-mono font-semibold text-green-700">{{ $masuk ?? '-' }}</td>
                                <td class="py-3 text-right font-mono font-semibold text-red-700">{{ $keluar ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="rounded-xl border border-gray-100 bg-white p-6 xl:col-span-2">
            <h3 class="font-display text-base font-bold text-[#0F2A25]">Kategori Pengeluaran</h3>
            <div id="expense-donut" class="mx-auto mt-2 h-52 w-full max-w-[240px]"></div>
            <ul class="mt-2 space-y-2">
                <li class="flex items-center justify-between text-sm">
                    <span class="flex items-center gap-2 text-gray-600">
                        <span class="h-2.5 w-2.5 rounded-sm bg-teal-600"></span>
                        Kegiatan Sosial
                    </span>
                    <span class="font-mono font-semibold text-[#0F2A25]">65%</span>
                </li>
                <li class="flex items-center justify-between text-sm">
                    <span class="flex items-center gap-2 text-gray-600">
                        <span class="h-2.5 w-2.5 rounded-sm bg-amber-400"></span>
                        Operasional
                    </span>
                    <span class="font-mono font-semibold text-[#0F2A25]">35%</span>
                </li>
            </ul>
        </div>

    </div>

    <div class="mt-6 rounded-xl border border-gray-100 bg-white p-6">
        <h3 class="font-display text-base font-bold text-[#0F2A25]">Daftar Anggota Menunggak</h3>
        <div class="mt-4 overflow-x-auto">
            <table class="w-full min-w-[640px] text-left text-sm">
                <thead>
                    <tr class="border-b border-gray-100 text-xs uppercase tracking-wide text-gray-400">
                        <th class="py-2 pr-3 font-semibold">Nama Anggota</th>
                        <th class="py-2 pr-3 font-semibold">WhatsApp</th>
                        <th class="py-2 pr-3 font-semibold">Durasi Tunggakan</th>
                        <th class="py-2 pr-3 font-semibold">Total Nominal</th>
                        <th class="py-2 text-right font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['Slamat Rahardjo', '+62 813-5678-9012', '3 Bulan', 'Rp 300.000'],
                        ['Rian Aditya', '+62 899-8901-2345', '1 Bulan', 'Rp 100.000'],
                    ] as [$nama, $wa, $durasi, $nominal])
                        <tr class="border-b border-gray-50 last:border-0">
                            <td class="py-3 pr-3 font-medium text-[#0F2A25]">{{ $nama }}</td>
                            <td class="py-3 pr-3 font-mono text-gray-500">{{ $wa }}</td>
                            <td class="py-3 pr-3 font-mono font-semibold text-red-600">{{ $durasi }}</td>
                            <td class="py-3 pr-3 font-mono font-semibold text-[#0F2A25]">{{ $nominal }}</td>
                            <td class="py-3 text-right">
                                <button type="button" class="inline-flex items-center rounded-lg border border-gray-200 px-3 py-1.5 text-xs font-semibold text-gray-700 transition hover:bg-gray-50 active:translate-y-px">
                                    Kirim WA
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts::dashboard>
