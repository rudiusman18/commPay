<x-layouts::auth title="Masuk - {{ config('app.name', 'CommPay') }}" tilt="rotate-[-2.5deg]">

    <x-slot:receipt>
        <p class="text-center font-mono text-[10px] uppercase tracking-[0.35em] text-gray-400">Kuitansi Kas</p>
        <p class="mt-1 text-center font-display text-lg font-bold text-[#0F2A25]">Komunitas Harmoni Sejahtera</p>

        <div class="mt-5 border-t border-dashed border-gray-300">
            <div class="flex items-center justify-between border-b border-dashed border-gray-300 py-3">
                <span class="text-sm text-gray-600">Iuran Bulanan</span>
                <span class="font-mono text-sm font-medium text-[#0F2A25]">Rp 50.000</span>
            </div>
            <div class="flex items-center justify-between border-b border-dashed border-gray-300 py-3">
                <span class="text-sm text-gray-600">Kegiatan</span>
                <span class="font-mono text-sm font-medium text-[#0F2A25]">Rp 25.000</span>
            </div>
            <div class="flex items-center justify-between py-3">
                <span class="text-sm text-gray-600">Sumbangan</span>
                <span class="font-mono text-sm font-medium text-[#0F2A25]">Rp 15.000</span>
            </div>
            <div class="flex items-center justify-between border-t-2 border-solid border-[#0F2A25] pt-3">
                <span class="text-sm font-semibold text-[#0F2A25]">Total</span>
                <span class="font-mono text-base font-semibold text-[#0F2A25]">Rp 90.000</span>
            </div>
        </div>

        <div class="mt-5 flex justify-end">
            <div class="rotate-[-8deg] rounded-full border-[3px] border-red-700/70 p-1.5">
                <div class="rounded-full border border-red-700/70 px-4 py-1.5">
                    <span class="font-mono text-sm font-semibold tracking-[0.3em] text-red-700/80">LUNAS</span>
                </div>
            </div>
        </div>

        <p class="mt-4 text-center font-mono text-[10px] text-gray-400">No. 0042/KOM/VIII/2026</p>
    </x-slot:receipt>

    <x-slot:note>
        <h2 class="font-display text-3xl font-bold leading-tight text-white">Kas rapi, komunitas tenang.</h2>
        <p class="mt-2 max-w-sm text-teal-100/90">Setiap rupiah masuk dan keluar tercatat — dan setiap pembayaran dapat kuitansinya.</p>
    </x-slot:note>

    <h1 class="font-display text-3xl font-bold tracking-tight text-[#0F2A25]">Selamat datang kembali</h1>
    <p class="mt-2 text-gray-600">Masuk untuk melanjutkan pencatatan kas komunitas kamu.</p>

    <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-5">
        @csrf

        <div>
            <label for="email" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Email</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="email"
                placeholder="nama@contoh.com"
                class="w-full rounded-lg border-gray-300 bg-white text-sm placeholder:text-gray-400 focus:border-teal-700 focus:ring-teal-700"
            >
            @error('email')
                <p role="alert" class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="mb-1.5 flex items-center justify-between">
                <label for="password" class="block text-sm font-semibold text-[#0F2A25]">Password</label>
                <a href="#" class="text-sm font-medium text-teal-700 hover:text-teal-900">Lupa password?</a>
            </div>
            <input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="current-password"
                placeholder="Masukkan password"
                class="w-full rounded-lg border-gray-300 bg-white text-sm placeholder:text-gray-400 focus:border-teal-700 focus:ring-teal-700"
            >
            @error('password')
                <p role="alert" class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-2">
            <input
                id="remember"
                name="remember"
                type="checkbox"
                class="rounded border-gray-300 text-teal-700 focus:ring-teal-700"
            >
            <label for="remember" class="text-sm text-gray-600">Tetap masuk di perangkat ini</label>
        </div>

        <button
            type="submit"
            class="w-full rounded-lg bg-teal-700 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-teal-700/25 transition hover:bg-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-700 focus:ring-offset-2 active:translate-y-px"
        >
            Masuk
        </button>
    </form>

    <p class="mt-8 text-center text-sm text-gray-600">
        Belum punya akun?
        <a href="{{ route('register') }}" class="font-semibold text-teal-700 hover:text-teal-900">Mulai gratis</a>
    </p>

</x-layouts::auth>
