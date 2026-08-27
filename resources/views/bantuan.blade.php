<x-layouts::app body-class="bg-white text-gray-900 antialiased">

    <x-layouts::header />

    <section class="bg-gradient-to-br from-teal-50 via-white to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
            <span class="animate-fade-in-up inline-block px-3 py-1 bg-teal-100 text-teal-700 text-xs font-semibold rounded-full mb-4" style="--fade-delay: 100ms;">Bantuan</span>
            <h1 class="animate-fade-in-up font-display text-4xl font-extrabold text-gray-900 mb-4" style="--fade-delay: 200ms;">Ada yang Bisa Kami Bantu?</h1>
            <p class="animate-fade-in-up text-gray-600 max-w-2xl mx-auto" style="--fade-delay: 300ms;">Cari jawaban cepat di pertanyaan umum, atau hubungi tim kami langsung.</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <h2 data-reveal class="font-display text-2xl font-bold text-gray-900 mb-6">Pertanyaan Umum</h2>
            <div class="space-y-3">
                @foreach ([
                    'Bagaimana cara mengirim tagihan ke seluruh anggota?' => 'Buka menu Tagihan, pilih anggota atau grup, lalu klik Kirim Massal. Tagihan terkirim via email dan WhatsApp sekaligus dengan satu klik.',
                    'Apakah anggota wajib install aplikasi?' => 'Tidak. Anggota menerima tagihan dan kuitansi lewat link — bisa dibuka dari browser mana pun, tanpa install apa pun.',
                    'Bagaimana verifikasi pembayaran bekerja?' => 'Anggota mengunggah bukti transfer. Bendahara memverifikasi satu per satu, dan kuitansi resmi terbit otomatis setelah disetujui.',
                    'Apakah data kas komunitas aman?' => 'Semua data tersimpan terenkripsi. Hanya Bendahara dan Super Admin yang bisa melihat rekap lengkap; anggota hanya melihat kas yang relevan.',
                    'Bisakah saya memindahkan data dari Excel?' => 'Bisa. Impor daftar anggota dan riwayat iuran dari file Excel atau CSV lewat menu Impor Data.',
                    'Bagaimana cara membatalkan langganan?' => 'Buka Pengaturan, pilih Langganan, lalu klik Batalkan. Tidak ada penalti, data tetap bisa diekspor 30 hari setelah pembatalan.',
                ] as $question => $answer)
                    <details data-reveal class="group border border-gray-200 rounded-xl open:shadow-sm">
                        <summary class="flex items-center justify-between cursor-pointer list-none px-5 py-4 font-semibold text-gray-900 text-sm select-none">
                            {{ $question }}
                            <svg class="w-4 h-4 text-gray-400 transition group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <p class="px-5 pb-4 text-sm text-gray-600 leading-relaxed">{{ $answer }}</p>
                    </details>
                @endforeach
            </div>

            <h2 data-reveal class="font-display text-2xl font-bold text-gray-900 mt-16 mb-6">Masih Butuh Bantuan?</h2>
            <div class="grid sm:grid-cols-2 gap-4">
                <a data-reveal="slide-right" href="mailto:sales@commpay.id" class="p-6 rounded-2xl border border-gray-200 hover:border-teal-600 hover:shadow-lg transition">
                    <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm mb-1">Email Sales</h3>
                    <p class="text-sm text-gray-500">Untuk pertanyaan paket & harga organisasi.</p>
                    <p class="mt-3 text-sm font-semibold text-teal-700">sales@commpay.id</p>
                </a>
                <a data-reveal="slide-left" style="--reveal-delay: 100ms;" href="https://wa.me/6281234567890" class="p-6 rounded-2xl border border-gray-200 hover:border-teal-600 hover:shadow-lg transition">
                    <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm mb-1">WhatsApp Support</h3>
                    <p class="text-sm text-gray-500">Bantuan teknis Senin–Jumat, 09.00–17.00 WIB.</p>
                    <p class="mt-3 text-sm font-semibold text-teal-700">+62 812-3456-7890</p>
                </a>
            </div>

        </div>
    </section>

    <x-layouts::footer />

</x-layouts::app>
