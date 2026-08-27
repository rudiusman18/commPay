<x-layouts::app body-class="bg-white text-gray-900 antialiased">

    <x-layouts::header />

        <section class="relative overflow-hidden bg-gradient-to-br from-teal-50 via-white to-emerald-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="animate-fade-in-up inline-block px-3 py-1 bg-teal-100 text-teal-700 text-xs font-semibold rounded-full mb-4" style="--fade-delay: 100ms;">
                            No. #1 Solusi Finansial Komunitas di Indonesia
                        </span>
                        <h1 class="animate-fade-in-up text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6" style="--fade-delay: 200ms;">
                            Kelola Komunitas &<br>Iuran Tanpa Ribet
                        </h1>
                        <p class="animate-fade-in-up text-lg text-gray-600 mb-8 max-w-lg" style="--fade-delay: 300ms;">
                            CommPay membantu paguyuban warga, klub olahraga, dan asosiasi alumni mengotomatisasi siklus penagihan, memverifikasi transaksi, serta menyusun pembukuan keuangan secara transparan.
                        </p>
                        <div class="animate-fade-in-up flex flex-wrap gap-3" style="--fade-delay: 400ms;">
                            <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition shadow-lg shadow-teal-600/25">
                                Mulai Sekarang
                            </a>
                            <a href="{{ route('help') }}" class="inline-flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-gray-400 transition">
                                Hubungi Sales
                            </a>
                        </div>
                    </div>

                    <div class="relative animate-slide-in-right" style="--fade-delay: 300ms;">
                        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 overflow-hidden">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-6">
                                <div class="flex items-center justify-between mb-6">
                                    <div>
                                        <p class="text-xs text-gray-500 uppercase tracking-wide">Total Saldo</p>
                                        <p class="text-2xl font-bold text-gray-900">€12.500</p>
                                    </div>
                                    <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">Iuran Warga</p>
                                                <p class="text-xs text-gray-500">12 Januari 2026</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-green-600">+€2.500</span>
                                    </div>
                                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                                <svg class="w-4 h-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">Biaya Operasional</p>
                                                <p class="text-xs text-gray-500">10 Januari 2026</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-red-600">-€800</span>
                                    </div>
                                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">Iuran Klub</p>
                                                <p class="text-xs text-gray-500">8 Januari 2026</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-green-600">+€1.200</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -z-10 -top-6 -right-6 w-72 h-72 bg-teal-200/30 rounded-full blur-3xl"></div>
                        <div class="absolute -z-10 -bottom-6 -left-6 w-56 h-56 bg-emerald-200/30 rounded-full blur-3xl"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fitur" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <h2 data-reveal class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4">Mengapa Memilih CommPay?</h2>
                    <p data-reveal style="--reveal-delay: 100ms;" class="text-gray-600 max-w-2xl mx-auto">Kami merancang solusi digital tangguh khusus untuk kebutuhan pengelolaan komunitas modern.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div data-reveal style="--reveal-delay: 150ms;" class="p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Efisiensi Operasional</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Kirim tagihan iuran bulanan massal otomatis lewat email atau WhatsApp dengan satu klik mudah.</p>
                    </div>
                    <div data-reveal style="--reveal-delay: 300ms;" class="p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Transparansi Finansial</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Seluruh anggota bisa memantau kas masuk dan keluar secara real-time demi menjaga kepercayaan bersama.</p>
                    </div>
                    <div data-reveal style="--reveal-delay: 450ms;" class="p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Akurasi Data</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Data pembayaran otomatis tercatat rapi di pembukuan kas digital tanpa risiko selisih hitung manual.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="peran" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <h2 data-reveal class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4">Satu Platform, Tiga Akses Sempurna</h2>
                    <p data-reveal style="--reveal-delay: 100ms;" class="text-gray-600 max-w-2xl mx-auto">Hak akses yang dirancang intuitif sesuai tanggung jawab masing-masing bagian.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div data-reveal style="--reveal-delay: 150ms;" class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Super Admin</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Mengatur kebijakan induk organisasi, mengelola data struktur cabang utama, dan memantau analitik pembayaran makro secara nasional.</p>
                    </div>
                    <div data-reveal style="--reveal-delay: 300ms;" class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Bendahara</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Menerbitkan tagihan rutin, mengunggah rekapitulasi pengeluaran, memverifikasi transfer dari anggota, dan mengunduh laporan keuangan instan.</p>
                    </div>
                    <div data-reveal style="--reveal-delay: 450ms;" class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Anggota</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Mendapatkan rincian tagihan berkala secara terjadwal, mengunggah bukti pembayaran mandiri, serta menerima kuitansi pembayaran resmi.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div data-reveal="slide-left" class="relative rounded-2xl overflow-hidden shadow-xl">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=600&h=400&fit=crop" alt="Komunitas" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                    <div>
                        <svg class="w-10 h-10 text-teal-600 mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <blockquote data-reveal style="--reveal-delay: 150ms;" class="text-xl lg:text-2xl font-bold text-gray-900 leading-relaxed mb-6">
                            "Semenjak menggunakan CommPay, penagihan iuran warga di RT kami menjadi 100% transparan. Tidak ada lagi keluhan warga lupa bayar atau rekap yang selisih. Dashboard bendahara sangat membantu kerja saya sehari-hari."
                        </blockquote>
                        <div data-reveal style="--reveal-delay: 300ms;">
                            <p class="font-bold text-gray-900">Hendra Prasetya</p>
                            <p class="text-sm text-gray-500">Ketua RT 05 Paguyuban Warga Harmoni, Jakarta Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-900">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 data-reveal class="text-3xl lg:text-4xl font-extrabold text-white mb-4">Siap Mengelola Iuran Tanpa Kendala?</h2>
                <p data-reveal style="--reveal-delay: 100ms;" class="text-gray-400 mb-8 max-w-2xl mx-auto">Dapatkan kemudahan otomatisasi tagihan dan transparansi kas digital dari sekarang. Daftar gratis untuk 30 hari pertama, tanpa komitmen kartu kredit.</p>
                <a data-reveal="scale" style="--reveal-delay: 200ms;" href="{{ route('register') }}" class="btn-shine inline-flex items-center px-8 py-4 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition shadow-lg shadow-teal-60/25 text-lg">
                    Mulai Sekarang - Gratis
                </a>
            </div>
        </section>

    <x-layouts::footer />

</x-layouts::app>
