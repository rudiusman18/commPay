<x-layouts::app :title="$title" body-class="bg-[#F6F8F7] font-sans text-[#0F2A25] antialiased">
    <main class="min-h-screen lg:grid lg:grid-cols-[1.1fr_1fr]">

        <section class="relative hidden overflow-hidden bg-gradient-to-br from-teal-700 via-teal-800 to-emerald-900 lg:flex lg:flex-col lg:justify-between lg:p-14">
            <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-white/5" aria-hidden="true"></div>
            <div class="absolute -bottom-40 -left-24 h-80 w-80 rounded-full bg-emerald-400/10" aria-hidden="true"></div>

            <a href="{{ route('home') }}" class="relative flex items-center gap-2.5">
                <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/15 ring-1 ring-white/25">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="font-display text-xl font-bold text-white">CommPay</span>
            </a>

            <div class="relative mx-auto w-full max-w-sm">
                <div class="motion-safe:animate-[kuitansi-in_0.7s_ease-out_both] relative {{ $tilt }}">
                    <div class="relative rounded-t-xl bg-white p-7 shadow-2xl shadow-emerald-950/40">
                        {{ $receipt }}
                    </div>
                    <div class="receipt-teeth" aria-hidden="true"></div>
                </div>
            </div>

            <div class="relative">
                {{ $note }}
            </div>
        </section>

        <section class="flex items-center justify-center p-6 sm:p-12">
            <div class="w-full max-w-md">
                <a href="{{ route('home') }}" class="mb-10 flex items-center gap-2 lg:hidden">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-teal-700">
                        <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="font-display text-xl font-bold text-[#0F2A25]">CommPay</span>
                </a>

                @if (session('status'))
                    <p role="status" class="mb-5 rounded-lg bg-teal-50 px-4 py-3 text-sm text-teal-800 ring-1 ring-teal-600/20">{{ session('status') }}</p>
                @endif

                {{ $slot }}
            </div>
        </section>

    </main>
</x-layouts::app>
