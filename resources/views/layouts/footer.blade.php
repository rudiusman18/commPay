<footer class="bg-gray-900 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-teal-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white">CommPay</span>
                </div>
                <p class="text-gray-400 text-sm max-w-sm">Automated community billing and verification platform built for Indonesian neighborhood & club ecosystems.</p>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-white mb-4">Fitur Utama</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}#fitur" class="text-sm text-gray-400 hover:text-white transition">Kirim Tagihan</a></li>
                    <li><a href="{{ route('home') }}#fitur" class="text-sm text-gray-400 hover:text-white transition">Verifikasi Cepat</a></li>
                    <li><a href="{{ route('home') }}#fitur" class="text-sm text-gray-400 hover:text-white transition">Arsip Laporan</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-white mb-4">Perusahaan</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('roles') }}" class="text-sm text-gray-400 hover:text-white transition">Peran Pengguna</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-sm text-gray-400 hover:text-white transition">Harga</a></li>
                    <li><a href="{{ route('help') }}" class="text-sm text-gray-400 hover:text-white transition">Bantuan</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} CommPay Indonesia. Hak Cipta Dilindungi.</p>
            <div class="flex gap-6">
                <a href="#" class="text-sm text-gray-500 hover:text-white transition">Syarat & Ketentuan</a>
                <a href="#" class="text-sm text-gray-500 hover:text-white transition">Kebijakan Privasi</a>
            </div>
        </div>
    </div>
</footer>
