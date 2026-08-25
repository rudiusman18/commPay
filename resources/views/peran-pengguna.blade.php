<x-layouts::app body-class="bg-white text-gray-900 antialiased">

    <x-layouts::header />

    <section class="bg-gradient-to-br from-teal-50 via-white to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
            <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 text-xs font-semibold rounded-full mb-4">Peran Pengguna</span>
            <h1 class="font-display text-4xl font-extrabold text-gray-900 mb-4">Satu Platform, Tiga Akses Sempurna</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Hak akses dirancang intuitif sesuai tanggung jawab masing-masing bagian. Tidak ada yang melihat lebih dari yang perlu.</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h2 class="font-display text-2xl font-bold text-gray-900 mb-3">Super Admin</h2>
                    <p class="text-gray-600 mb-6">Mengatur kebijakan induk organisasi dan memantau seluruh jaringan komunitas dari satu tempat.</p>
                    <ul class="space-y-3">
                        @foreach (['Kebijakan induk organisasi & iuran default', 'Struktur cabang & paguyuban turunan', 'Analitik pembayaran lintas komunitas', 'Kelola peran Bendahara & Anggota'] as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-teal-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8">
                    <div class="space-y-3">
                        @foreach ([['Cabang Jakarta Selatan', '128 anggota', '98%'], ['Cabang Bandung', '86 anggota', '94%'], ['Cabang Surabaya', '210 anggota', '91%']] as [$cabang, $anggota, $persen])
                            <div class="flex items-center justify-between bg-white rounded-lg p-4 border border-gray-100">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">{{ $cabang }}</p>
                                    <p class="text-xs text-gray-500">{{ $anggota }}</p>
                                </div>
                                <span class="font-mono text-sm font-semibold text-teal-700">{{ $persen }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center lg:[&>*:first-child]:order-2">
                <div>
                    <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h2 class="font-display text-2xl font-bold text-gray-900 mb-3">Bendahara</h2>
                    <p class="text-gray-600 mb-6">Pusat operasional kas harian: menerbitkan, memverifikasi, dan melaporkan.</p>
                    <ul class="space-y-3">
                        @foreach (['Terbitkan tagihan rutin massal', 'Verifikasi bukti transfer anggota', 'Catat pengeluaran & rekapitulasi', 'Unduh laporan keuangan instan'] as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-teal-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8">
                    <div class="space-y-3">
                        @foreach ([['Tagihan Agustus terkirim', '324 anggota', 'Menunggu 12'], ['Transfer diverifikasi', 'Hari ini', 'Rp 4.250.000'], ['Laporan Juli', 'Siap unduh', 'PDF']] as [$judul, $sub, $nilai])
                            <div class="flex items-center justify-between bg-white rounded-lg p-4 border border-gray-100">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">{{ $judul }}</p>
                                    <p class="text-xs text-gray-500">{{ $sub }}</p>
                                </div>
                                <span class="font-mono text-sm font-semibold text-teal-700">{{ $nilai }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h2 class="font-display text-2xl font-bold text-gray-900 mb-3">Anggota</h2>
                    <p class="text-gray-600 mb-6">Cukup bayar dan pantau — semua kewajiban iuran jelas di satu halaman.</p>
                    <ul class="space-y-3">
                        @foreach (['Lihat rincian tagihan berkala', 'Unggah bukti pembayaran mandiri', 'Terima kuitansi resmi otomatis', 'Pantau kas komunitas real-time'] as $item)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-teal-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8">
                    <div class="bg-white rounded-lg border border-gray-100 p-5">
                        <p class="font-mono text-[10px] uppercase tracking-[0.3em] text-gray-400">Tagihan Aktif</p>
                        <p class="font-display text-lg font-bold text-gray-900 mt-1">Iuran September 2026</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="font-mono text-2xl font-semibold text-gray-900">Rp 90.000</span>
                            <span class="inline-flex items-center px-2.5 py-1 bg-amber-100 text-amber-700 text-xs font-semibold rounded-full">Menunggu bayar</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="font-display text-2xl font-bold text-gray-900 mb-3">Siap atur peran komunitas kamu?</h2>
            <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition shadow-lg shadow-teal-600/25">
                Mulai Gratis
            </a>
        </div>
    </section>

    <x-layouts::footer />

</x-layouts::app>
