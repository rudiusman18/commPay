@props([
    'title' => 'Dashboard - ' . config('app.name', 'CommPay'),
    'orgName' => 'Komunitas Harmoni Sejahtera',
])

@php
    $navItems = [
        ['label' => 'Dashboard', 'route' => 'dashboard', 'active' => request()->routeIs('dashboard'), 'icon' => 'M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z'],
        ['label' => 'Direktori Anggota', 'route' => 'members', 'active' => request()->routeIs('members'), 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
        ['label' => 'Manajemen Tagihan', 'route' => 'invoices', 'active' => request()->routeIs('invoices'), 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
        ['label' => 'Verifikasi Pembayaran', 'route' => 'verification', 'active' => request()->routeIs('verification'), 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
        ['label' => 'Laporan Keuangan', 'route' => 'reports', 'active' => request()->routeIs('reports'), 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
    ];
@endphp

<x-layouts::app :title="$title" body-class="bg-gray-50 font-sans text-[#0F2A25] antialiased">
    @vite('resources/js/charts.js')

    <div class="min-h-screen lg:pl-64">

        <aside class="hidden lg:fixed lg:inset-y-0 lg:left-0 lg:z-40 lg:flex lg:w-64 lg:flex-col bg-[#0F1729]">
            <div class="flex items-center gap-2.5 px-6 pt-7 pb-8">
                <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-teal-600">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-display text-lg font-bold leading-none text-white">CommPay</p>
                    <p class="mt-1 font-mono text-[9px] uppercase tracking-[0.25em] text-teal-400">Community Fintech</p>
                </div>
            </div>

            <nav class="flex-1 space-y-1 px-3">
                @foreach ($navItems as $item)
                    @if ($item['route'])
                        <a
                            href="{{ route($item['route']) }}"
                            @if ($item['active']) aria-current="page" @endif
                            class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm transition {{ $item['active'] ? 'bg-teal-600 font-semibold text-white' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}"
                        >
                            <svg class="h-4.5 w-4.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                            </svg>
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="flex cursor-not-allowed items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-slate-500" title="Segera hadir">
                            <svg class="h-4.5 w-4.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                            </svg>
                            {{ $item['label'] }}
                        </span>
                    @endif
                @endforeach
            </nav>

            <div class="flex items-center gap-3 border-t border-white/10 px-6 py-5">
                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-teal-600 font-display text-sm font-bold text-white">
                    AW
                </div>
                <div class="flex-1 min-w-0">
                    <p class="truncate text-sm font-semibold text-white">Adi Wijaya</p>
                    <p class="text-xs text-slate-400">Bendahara Utama</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="rounded-lg p-2 text-slate-400 transition hover:bg-white/5 hover:text-white" title="Keluar">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </button>
                </form>
            </div>
        </aside>

        <header class="sticky top-0 z-30 border-b border-gray-100 bg-white/90 backdrop-blur">
            <div class="flex items-center justify-between px-4 py-3 sm:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2 lg:hidden">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-teal-600">
                        <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="font-display text-lg font-bold text-[#0F2A25]">CommPay</span>
                </a>

                <div class="hidden lg:block"></div>

                <div class="flex items-center gap-3">
                    <button type="button" class="relative rounded-lg p-2 text-gray-500 transition hover:bg-gray-100" title="Notifikasi">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-gray-900">{{ $orgName }}</span>
                        <span class="inline-flex items-center px-2 py-0.5 bg-teal-50 text-teal-700 text-xs font-semibold rounded-md">Utama</span>
                    </div>
                </div>
            </div>

            <nav class="flex gap-1 overflow-x-auto px-4 pb-3 lg:hidden" aria-label="Menu dashboard">
                @foreach ($navItems as $item)
                    @if ($item['route'])
                        <a
                            href="{{ route($item['route']) }}"
                            class="whitespace-nowrap rounded-full px-3.5 py-1.5 text-xs font-semibold transition {{ $item['active'] ? 'bg-teal-600 text-white' : 'bg-gray-100 text-gray-600' }}"
                        >
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="whitespace-nowrap rounded-full bg-gray-100 px-3.5 py-1.5 text-xs text-gray-400">{{ $item['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        </header>

        <main class="mx-auto w-full max-w-6xl px-4 py-8 sm:px-8">
            {{ $slot }}
        </main>

    </div>
</x-layouts::app>
