@php
    $navLinks = [
        ['label' => 'Fitur', 'href' => route('home').'#fitur', 'active' => request()->routeIs('home')],
        ['label' => 'Peran Pengguna', 'href' => route('roles'), 'active' => request()->routeIs('roles')],
        ['label' => 'Harga', 'href' => route('pricing'), 'active' => request()->routeIs('pricing')],
        ['label' => 'Bantuan', 'href' => route('help'), 'active' => request()->routeIs('help')],
    ];
@endphp

<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="w-8 h-8 bg-teal-600 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-900">CommPay</span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                @foreach ($navLinks as $link)
                    <a
                        href="{{ $link['href'] }}"
                        @if ($link['active']) aria-current="page" @endif
                        class="text-sm font-medium transition {{ $link['active'] ? 'text-teal-700 font-semibold' : 'text-gray-600 hover:text-gray-900' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="hidden sm:inline-block text-sm font-medium text-gray-700 hover:text-gray-900 transition">Masuk</a>
                <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 bg-teal-600 text-white text-sm font-semibold rounded-lg hover:bg-teal-700 transition">
                    Mulai Gratis
                </a>
                <button
                    data-collapse-toggle="mobile-menu"
                    type="button"
                    class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-teal-600"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <span class="sr-only">Buka menu</span>
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden pb-4 md:hidden">
            <ul class="space-y-1">
                @foreach ($navLinks as $link)
                    <li>
                        <a
                            href="{{ $link['href'] }}"
                            @if ($link['active']) aria-current="page" @endif
                            class="block px-3 py-2 rounded-lg text-sm transition {{ $link['active'] ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
                        >
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
                <li class="sm:hidden pt-2 border-t border-gray-100">
                    <a href="{{ route('login') }}" class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                        Masuk
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
