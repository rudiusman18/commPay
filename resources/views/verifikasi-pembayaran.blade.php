<x-layouts::dashboard>

    <div class="mb-6">
        <h1 class="font-display text-2xl font-bold text-[#0F2A25]">Verifikasi Pembayaran</h1>
        <p class="mt-1 text-sm text-gray-500">Konfirmasi keabsahan transfer bukti pembayaran manual anggota.</p>
    </div>

    <div class="grid gap-6 lg:grid-cols-[1.6fr_1fr]">

        <div class="rounded-xl border border-gray-100 bg-white p-5 sm:p-6">

            <div class="flex flex-wrap gap-2" role="tablist">
                <button type="button" role="tab" aria-selected="true" class="rounded-lg bg-teal-600 px-4 py-2 text-sm font-semibold text-white shadow-sm">
                    Transfer Online
                </button>
                <button type="button" role="tab" aria-selected="false" class="rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200">
                    Tunai / Cash
                </button>
            </div>

            <div class="mt-5 space-y-4">
                @foreach ([
                    ['Hendra Prasetya', 'INV/202603/018', '12 Mar 2026, 14:22', 'Rp 150.000'],
                    ['Dewi Lestari', 'INV/202603/024', '12 Mar 2026, 10:15', 'Rp 100.000'],
                ] as [$nama, $invoice, $waktu, $nominal])
                    <div class="flex flex-col gap-4 rounded-xl border border-gray-200 bg-white p-4 sm:flex-row sm:p-5">
                        <div class="flex aspect-[3/4] w-20 shrink-0 flex-col items-center justify-center gap-2 self-start rounded-lg bg-gray-50 text-gray-400 ring-1 ring-gray-200/70 sm:w-24">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="px-1.5 text-center text-[10px] leading-tight">Bukti transfer</span>
                        </div>

                        <div class="min-w-0 flex-1">
                            <h3 class="font-display text-base font-bold text-[#0F2A25]">{{ $nama }}</h3>
                            <p class="mt-0.5 font-mono text-xs text-gray-400">{{ $invoice }} &bull; {{ $waktu }}</p>
                            <p class="mt-2 text-sm text-gray-500">
                                Jumlah transfer:
                                <span class="font-mono text-base font-bold text-[#0F2A25]">{{ $nominal }}</span>
                            </p>

                            <div class="mt-4 flex flex-wrap gap-2">
                                <button type="button" class="rounded-lg bg-teal-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-teal-700 active:translate-y-px">
                                    Setujui
                                </button>
                                <button type="button" class="rounded-lg border border-red-200 bg-white px-4 py-2 text-sm font-semibold text-red-600 transition hover:border-red-300 hover:bg-red-50 active:translate-y-px">
                                    Tolak - Bukti Salah
                                </button>
                                <button type="button" class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 active:translate-y-px">
                                    Kurang Bayar
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <p class="mt-4 text-center text-xs text-gray-400">Slot gambar menunggu file bukti transfer asli dari anggota.</p>
        </div>

        <div class="rounded-xl border border-gray-100 bg-white p-5 sm:p-6">
            <h3 class="font-display text-base font-bold text-[#0F2A25]">Input Pembayaran Tunai</h3>

            <form class="mt-5 space-y-4" action="#" method="POST">
                @csrf

                <div>
                    <label for="payer" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Cari & Pilih Anggota</label>
                    <div class="relative">
                        <select
                            id="payer"
                            name="payer"
                            class="w-full appearance-none rounded-lg border-gray-300 bg-white py-2.5 pl-4 pr-10 text-sm text-gray-400 focus:border-teal-600 focus:ring-teal-600"
                        >
                            <option value="">Pilih nama pembayar...</option>
                        </select>
                        <svg class="pointer-events-none absolute right-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>

                <div>
                    <label for="invoice" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Tagihan Tersedia</label>
                    <input
                        id="invoice"
                        type="text"
                        disabled
                        placeholder="Harap pilih anggota dahulu"
                        class="w-full rounded-lg border-gray-200 bg-gray-50 text-sm placeholder:text-gray-400"
                    >
                </div>

                <div>
                    <label for="amount" class="mb-1.5 block text-sm font-semibold text-[#0F2A25]">Nominal Diterima</label>
                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center font-mono text-sm font-semibold text-[#0F2A25]">Rp</span>
                        <input
                            id="amount"
                            type="number"
                            min="0"
                            step="500"
                            placeholder="Masukan angka..."
                            class="w-full rounded-lg border-gray-300 bg-white py-2.5 pl-11 pr-4 text-sm placeholder:text-gray-400 focus:border-teal-600 focus:ring-teal-600"
                        >
                    </div>
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-teal-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-teal-600/25 transition hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:ring-offset-2 active:translate-y-px"
                >
                    Tandai Lunas Tunai
                </button>
            </form>
        </div>

    </div>

</x-layouts::dashboard>
