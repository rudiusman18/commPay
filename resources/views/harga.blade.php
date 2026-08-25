<x-layouts::app body-class="bg-white text-gray-900 antialiased">

    <x-layouts::header />

    <section class="bg-gradient-to-br from-teal-50 via-white to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
            <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 text-xs font-semibold rounded-full mb-4">Harga</span>
            <h1 class="font-display text-4xl font-extrabold text-gray-900 mb-4">Harga Jujur, Sesuai Skala Komunitas</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Mulai gratis, naik paket saat komunitas tumbuh. Tanpa biaya tersembunyi.</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-8 items-stretch">

            <div class="p-8 rounded-2xl border border-gray-200 flex flex-col">
                <h3 class="font-display text-lg font-bold text-gray-900">Gratis</h3>
                <p class="text-sm text-gray-500 mt-1">Untuk komunitas kecil yang baru mulai.</p>
                <p class="mt-6"><span class="font-display text-4xl font-extrabold text-gray-900">Rp 0</span><span class="text-gray-500 text-sm"> /selamanya</span></p>
                <ul class="mt-8 space-y-3 flex-1">
                    @foreach (['Hingga 30 anggota', 'Tagihan manual per bulan', 'Pembukuan kas digital', 'Kuitansi otomatis', '1 Bendahara'] as $item)
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-teal-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('register') }}" class="mt-8 inline-flex justify-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-gray-400 transition">
                    Mulai Gratis
                </a>
            </div>

            <div class="p-8 rounded-2xl border-2 border-teal-600 flex flex-col relative shadow-xl shadow-teal-600/10">
                <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-3 py-1 bg-teal-600 text-white text-xs font-semibold rounded-full">Paling Populer</span>
                <h3 class="font-display text-lg font-bold text-gray-900">Komunitas</h3>
                <p class="text-sm text-gray-500 mt-1">Untuk paguyuban & klub yang aktif menagih.</p>
                <p class="mt-6"><span class="font-display text-4xl font-extrabold text-gray-900">Rp 149rb</span><span class="text-gray-500 text-sm"> /bulan</span></p>
                <ul class="mt-8 space-y-3 flex-1">
                    @foreach (['Hingga 500 anggota', 'Tagihan massal otomatis (email & WhatsApp)', 'Verifikasi pembayaran', 'Laporan keuangan instan (PDF/Excel)', '5 Bendahara', 'Pengingat jatuh tempo otomatis'] as $item)
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-teal-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('register') }}" class="mt-8 inline-flex justify-center px-6 py-3 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition shadow-lg shadow-teal-600/25">
                    Coba 30 Hari Gratis
                </a>
            </div>

            <div class="p-8 rounded-2xl border border-gray-200 flex flex-col">
                <h3 class="font-display text-lg font-bold text-gray-900">Organisasi</h3>
                <p class="text-sm text-gray-500 mt-1">Untuk induk organisasi dengan banyak cabang.</p>
                <p class="mt-6"><span class="font-display text-4xl font-extrabold text-gray-900">Rp 399rb</span><span class="text-gray-500 text-sm"> /bulan</span></p>
                <ul class="mt-8 space-y-3 flex-1">
                    @foreach (['Anggota tanpa batas', 'Multi-cabang & multi-bendahara', 'Analitik lintas komunitas', 'Ekspor laporan konsolidasi', 'Dukungan prioritas', 'Onboarding terpandu'] as $item)
                        <li class="flex items-start gap-3 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-teal-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('help') }}" class="mt-8 inline-flex justify-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-gray-400 transition">
                    Hubungi Sales
                </a>
            </div>

        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <p class="text-sm text-gray-600">Semua paket berbayar termasuk trial gratis 30 hari. Batalkan kapan saja tanpa penalti.</p>
        </div>
    </section>

    <x-layouts::footer />

</x-layouts::app>
