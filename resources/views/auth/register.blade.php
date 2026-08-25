<x-layouts::auth title="Daftar - {{ config('app.name', 'CommPay') }}" tilt="rotate-[2deg]">

    <x-slot:receipt>
        <p class="text-center font-mono text-[10px] uppercase tracking-[0.35em] text-gray-400">Struk Pendaftaran</p>
        <p class="mt-1 text-center font-display text-lg font-bold text-[#0F2A25]">Komunitas Kamu</p>

        <div class="mt-5 border-t border-dashed border-gray-300">
            <div class="flex items-center justify-between border-b border-dashed border-gray-300 py-3">
                <span class="text-sm text-gray-600">Coba 30 hari</span>
                <span class="font-mono text-sm font-medium text-[#0F2A25]">Gratis</span>
            </div>
            <div class="flex items-center justify-between border-b border-dashed border-gray-300 py-3">
                <span class="text-sm text-gray-600">Kartu kredit</span>
                <span class="font-mono text-sm font-medium text-[#0F2A25]">Tidak perlu</span>
            </div>
            <div class="flex items-center justify-between py-3">
                <span class="text-sm text-gray-600">Anggota pertama</span>
                <span class="font-mono text-sm font-medium text-[#0F2A25]">Tanpa batas</span>
            </div>
            <div class="flex items-center justify-between border-t-2 border-solid border-[#0F2A25] pt-3">
                <span class="text-sm font-semibold text-[#0F2A25]">Total hari ini</span>
                <span class="font-mono text-base font-semibold text-[#0F2A25]">Rp 0</span>
            </div>
        </div>

        <div class="mt-5 flex justify-end">
            <div class="rotate-[-8deg] rounded-full border-[3px] border-red-700/70 p-1.5">
                <div class="rounded-full border border-red-700/70 px-4 py-1.5">
                    <span class="font-mono text-sm font-semibold tracking-[0.3em] text-red-700/80">GRATIS</span>
                </div>
            </div>
        </div>

        <p class="mt-4 text-center font-mono text-[10px] text-gray-400">No. 0001/PND/{{ date('m') }}/{{ date('Y') }}</p>
    </x-slot:receipt>

    <x-slot:note>
        <h2 class="font-display text-3xl font-bold leading-tight text-white">Mulai catat kas dengan tertib.</h2>
        <p class="mt-2 max-w-sm text-teal-100/90">Tagihan terkirim otomatis, pembayaran terverifikasi, kuitansi siap cetak.</p>
    </x-slot:note>

    <h1 class="font-display text-3xl font-bold tracking-tight text-[#0F2A25]">Buat akun baru</h1>
    <p class="mt-2 text-gray-600">Daftar gratis — 30 hari pertama tanpa biaya.</p>

    <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-5">
        @csrf

        <div>
            <label for="name" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Nama lengkap</label>
            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                placeholder="Nama kamu"
                class="w-full rounded-lg border-gray-300 bg-white text-sm placeholder:text-gray-400 focus:border-teal-700 focus:ring-teal-700"
            >
            @error('name')
                <p role="alert" class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Email</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                placeholder="nama@contoh.com"
                class="w-full rounded-lg border-gray-300 bg-white text-sm placeholder:text-gray-400 focus:border-teal-700 focus:ring-teal-700"
            >
            @error('email')
                <p role="alert" class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Password</label>
            <input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="new-password"
                placeholder="Minimal 8 karakter"
                class="w-full rounded-lg border-gray-300 bg-white text-sm placeholder:text-gray-400 focus:border-teal-700 focus:ring-teal-700"
            >
            @error('password')
                <p role="alert" class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Ulangi password</label>
            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                autocomplete="new-password"
                placeholder="Ketik ulang password"
                class="w-full rounded-lg border-gray-300 bg-white text-sm placeholder:text-gray-400 focus:border-teal-700 focus:ring-teal-700"
            >
        </div>

        <button
            type="submit"
            class="w-full rounded-lg bg-teal-700 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-teal-700/25 transition hover:bg-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-700 focus:ring-offset-2 active:translate-y-px"
        >
            Mulai gratis
        </button>
    </form>

    <p class="mt-8 text-center text-sm text-gray-600">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="font-semibold text-teal-700 hover:text-teal-900">Masuk</a>
    </p>

</x-layouts::auth>
