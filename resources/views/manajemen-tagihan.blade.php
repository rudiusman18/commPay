<x-layouts::dashboard>

    <div class="mb-6">
        <h1 class="font-display text-2xl font-bold text-[#0F2A25]">Manajemen Tagihan</h1>
        <p class="mt-1 text-sm text-gray-500">Pantau invoice bulanan, sumbangan berkala, maupun insidental komunitas.</p>
    </div>

    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <div class="flex flex-wrap gap-2">
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                Jenis: Semua Iuran
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                Bulan: Maret 2026
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-wrap gap-2">
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Kirim Pengingat WA
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-teal-600/25 transition hover:bg-teal-700 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
                Terbitkan Tagihan Massal
            </button>
        </div>
    </div>

    <div class="rounded-xl border border-gray-100 bg-white p-6">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[820px] text-left text-sm">
                <thead>
                    <tr class="border-b border-gray-100 text-xs uppercase tracking-wide text-gray-400">
                        <th class="w-10 py-3">
                            <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-600" aria-label="Pilih semua">
                        </th>
                        <th class="py-3 pr-3 font-semibold">No. Invoice</th>
                        <th class="py-3 pr-3 font-semibold">Nama Anggota</th>
                        <th class="py-3 pr-3 font-semibold">Jenis Iuran</th>
                        <th class="py-3 pr-3 font-semibold">Nominal</th>
                        <th class="py-3 pr-3 font-semibold">Jatuh Tempo</th>
                        <th class="py-3 pr-3 font-semibold">Status</th>
                        <th class="py-3 text-right font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['INV/202603/001', 'Budi Santoso', 'Rutin Bulanan', 'Rp 100.000', '25 Mar 2026', 'Lunas', 'bg-green-50 text-green-700'],
                        ['INV/202603/002', 'Siti Rahmawati', 'Sumbangan', 'Rp 250.000', '25 Mar 2026', 'Menunggu Verifikasi', 'bg-amber-50 text-amber-700'],
                        ['INV/202603/003', 'Slamat Rahardjo', 'Rutin Bulanan', 'Rp 100.000', '25 Mar 2026', 'Belum Bayar', 'bg-red-50 text-red-700'],
                        ['INV/202603/004', 'Dewi Lestari', 'Rutin Bulanan', 'Rp 100.000', '25 Mar 2026', 'Lunas', 'bg-green-50 text-green-700'],
                        ['INV/202603/005', 'Rian Aditya', 'Rutin Bulanan', 'Rp 100.000', '25 Mar 2026', 'Belum Bayar', 'bg-red-50 text-red-700'],
                        ['INV/202603/006', 'Ahmad Subarjo', 'Edisi Acara', 'Rp 200.000', '15 Mar 2026', 'Dibatalkan', 'bg-gray-100 text-gray-500'],
                    ] as [$invoice, $nama, $jenis, $nominal, $tempo, $status, $badge])
                        <tr class="border-b border-gray-50 last:border-0 transition hover:bg-gray-50/50">
                            <td class="py-3.5">
                                <input type="checkbox" class="rounded border-gray-300 text-teal-600 focus:ring-teal-600" aria-label="Pilih {{ $invoice }}">
                            </td>
                            <td class="py-3.5 pr-3 font-mono font-medium text-[#0F2A25]">{{ $invoice }}</td>
                            <td class="py-3.5 pr-3 font-medium text-[#0F2A25]">{{ $nama }}</td>
                            <td class="py-3.5 pr-3 text-gray-500">{{ $jenis }}</td>
                            <td class="py-3.5 pr-3 font-mono text-[#0F2A25]">{{ $nominal }}</td>
                            <td class="py-3.5 pr-3 font-mono text-gray-500">{{ $tempo }}</td>
                            <td class="py-3.5 pr-3">
                                <span class="inline-flex items-center px-2.5 py-1 text-xs font-semibold rounded-full {{ $badge }}">{{ $status }}</span>
                            </td>
                            <td class="py-3.5">
                                <div class="flex items-center justify-end gap-1">
                                    <button type="button" class="rounded-lg p-2 text-gray-400 transition hover:bg-gray-100 hover:text-gray-700" title="Cetak">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="rounded-lg p-2 text-gray-400 transition hover:bg-gray-100 hover:text-gray-700" title="Menu lainnya">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6h.01M12 12h.01M12 18h.01"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts::dashboard>
