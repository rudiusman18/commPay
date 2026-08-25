<x-layouts::dashboard>

    <div class="mb-6">
        <h1 class="font-display text-2xl font-bold text-[#0F2A25]">Direktori Anggota</h1>
        <p class="mt-1 text-sm text-gray-500">Kelola profil, peran pengurus, dan status keaktifan anggota komunitas.</p>
    </div>

    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <div class="flex flex-wrap gap-2">
            <div class="relative">
                <svg class="pointer-events-none absolute left-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input
                    type="search"
                    placeholder="Cari nama anggota..."
                    class="w-full min-w-56 rounded-lg border-gray-300 bg-white py-2.5 pl-10 text-sm placeholder:text-gray-400 focus:border-teal-600 focus:ring-teal-600"
                >
            </div>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                Status: Aktif
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-wrap gap-2">
            <button type="button" class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Ekspor Data
            </button>
            <button type="button" class="inline-flex items-center gap-2 rounded-lg bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-teal-600/25 transition hover:bg-teal-700 active:translate-y-px">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                </svg>
                Tambah Anggota
            </button>
        </div>
    </div>

    <div class="rounded-xl border border-gray-100 bg-white p-6">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[860px] text-left text-sm">
                <thead>
                    <tr class="border-b border-gray-100 text-xs uppercase tracking-wide text-gray-400">
                        <th class="py-3 pr-3 font-semibold">Nama Lengkap</th>
                        <th class="py-3 pr-3 font-semibold">Email</th>
                        <th class="py-3 pr-3 font-semibold">WhatsApp</th>
                        <th class="py-3 pr-3 font-semibold">Hak Akses</th>
                        <th class="py-3 pr-3 font-semibold">Status</th>
                        <th class="py-3 pr-3 font-semibold">Tanggal Gabung</th>
                        <th class="py-3 text-right font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['Budi Santoso', 'budi.s@gmail.com', '+62 812-3456-7890', 'Anggota', 'Aktif', 'bg-teal-600', '12 Des 2024'],
                        ['Siti Rahmawati', 'siti.rahma@gmail.com', '+62 821-4567-8901', 'Anggota', 'Aktif', 'bg-emerald-600', '05 Jan 2025'],
                        ['Slamat Rahardjo', 'slamat.r@gmail.com', '+62 813-5678-9012', 'Anggota', 'Non-Aktif', 'bg-slate-500', '18 Feb 2025'],
                        ['Dewi Lestari', 'dewi.lestari@gmail.com', '+62 878-6789-0123', 'Anggota', 'Aktif', 'bg-cyan-600', '22 Feb 2025'],
                        ['Hendra Prasetya', 'hendra.p@gmail.com', '+62 856-7890-1234', 'Super Admin', 'Aktif', 'bg-teal-700', '01 Mar 2025'],
                        ['Rian Aditya', 'rian.adit@gmail.com', '+62 899-8901-2345', 'Anggota', 'Ditangguhkan', 'bg-slate-400', '10 Mar 2025'],
                    ] as [$nama, $email, $wa, $akses, $status, $avatarColor, $gabung])
                        <tr class="border-b border-gray-50 last:border-0 transition hover:bg-gray-50/50">
                            <td class="py-3 pr-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full {{ $avatarColor }} font-display text-xs font-bold text-white">
                                        {{ collect(explode(' ', $nama))->map(fn ($word) => mb_substr($word, 0, 1))->take(2)->implode('') }}
                                    </div>
                                    <span class="font-medium text-[#0F2A25]">{{ $nama }}</span>
                                </div>
                            </td>
                            <td class="py-3 pr-3 text-gray-500">{{ $email }}</td>
                            <td class="py-3 pr-3 font-mono text-gray-500">{{ $wa }}</td>
                            <td class="py-3 pr-3 text-gray-600">{{ $akses }}</td>
                            <td class="py-3 pr-3">
                                <span class="inline-flex items-center px-2.5 py-1 text-xs font-semibold rounded-full {{ match ($status) {
                                    'Aktif' => 'bg-green-50 text-green-700',
                                    'Non-Aktif' => 'bg-red-50 text-red-700',
                                    default => 'bg-gray-100 text-gray-500',
                                } }}">{{ $status }}</span>
                            </td>
                            <td class="py-3 pr-3 font-mono text-gray-500">{{ $gabung }}</td>
                            <td class="py-3">
                                <div class="flex items-center justify-end gap-1">
                                    <button type="button" class="rounded-lg p-2 text-teal-600 transition hover:bg-teal-50" title="Ubah">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="rounded-lg p-2 text-red-500 transition hover:bg-red-50" title="Hapus">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex flex-wrap items-center justify-between gap-3">
            <p class="text-sm text-gray-500">Menampilkan 1-6 dari 148 anggota</p>
            <div class="flex items-center gap-1">
                <button type="button" class="rounded-lg border border-gray-200 px-3.5 py-2 text-sm font-medium text-gray-400">Sebelumnya</button>
                <button type="button" class="rounded-lg bg-teal-600 px-3.5 py-2 text-sm font-semibold text-white" aria-current="page">1</button>
                <button type="button" class="rounded-lg border border-gray-200 px-3.5 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">2</button>
                <button type="button" class="rounded-lg border border-gray-200 px-3.5 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">Selanjutnya</button>
            </div>
        </div>
    </div>

</x-layouts::dashboard>
