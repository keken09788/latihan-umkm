<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Mitra - UMKM Digital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#89f5e7",
                        "secondary-fixed": "#ffdcc3",
                        "tertiary": "#00443e",
                        "error": "#ba1a1a",
                        "surface-container": "#e5eeff",
                        "on-secondary-fixed-variant": "#6e3900",
                        "outline": "#6f7973",
                        "inverse-surface": "#213145",
                        "inverse-on-surface": "#eaf1ff",
                        "secondary-fixed-dim": "#ffb77d",
                        "background": "#f8f9ff",
                        "on-tertiary-container": "#6cd9cb",
                        "error-container": "#ffdad6",
                        "surface": "#f8f9ff",
                        "surface-tint": "#1b6b51",
                        "secondary": "#904d00",
                        "outline-variant": "#bec9c2",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#8bd6b6",
                        "on-background": "#0b1c30",
                        "tertiary-fixed-dim": "#6bd8cb",
                        "primary": "#004532",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#00201d",
                        "on-primary-fixed": "#002116",
                        "on-surface": "#0b1c30",
                        "primary-container": "#065f46",
                        "surface-bright": "#f8f9ff",
                        "surface-container-high": "#dce9ff",
                        "surface-container-highest": "#d3e4fe",
                        "on-surface-variant": "#3f4944",
                        "on-tertiary-fixed-variant": "#005049",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#fe932c",
                        "on-primary-container": "#8bd6b7",
                        "surface-dim": "#cbdbf5",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#2f1500",
                        "on-secondary-container": "#663500",
                        "primary-fixed-dim": "#8bd6b6",
                        "primary-fixed": "#a6f2d1",
                        "on-primary-fixed-variant": "#00513b",
                        "tertiary-container": "#005e56",
                        "surface-container-low": "#eff4ff",
                        "surface-variant": "#d3e4fe"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1320px",
                        "lg": "24px",
                        "xs": "4px",
                        "base": "4px",
                        "md": "16px",
                        "xxl": "48px",
                        "xl": "32px",
                        "gutter": "24px",
                        "sm": "8px"
                    },
                    "fontFamily": {
                        "h1": ["Inter"],
                        "label-bold": ["Inter"],
                        "button": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Inter"],
                        "h3": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "h1": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-bold": ["14px", {
                            "lineHeight": "1.2",
                            "fontWeight": "600"
                        }],
                        "button": ["16px", {
                            "lineHeight": "1",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "h2": ["36px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "h3": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <div class="flex min-h-screen">
        @include('sidebar')
        <main class="flex-1 flex flex-col min-w-0">
            <header class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-40">
                <div class="max-w-[1320px] mx-auto px-6 py-4 flex items-center justify-between gap-6">
                    <div class="relative w-full max-w-md">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-full text-sm focus:ring-2 focus:ring-emerald-700 focus:border-emerald-700"
                            placeholder="Cari mitra, nama usaha, atau kota..." type="text" />
                    </div>
                    <div class="flex items-center gap-6">
                        <button class="relative p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-colors">
                            <span class="material-symbols-outlined">notifications</span>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-secondary rounded-full"></span>
                        </button>
                        <div class="h-8 w-[1px] bg-slate-200"></div>
                        <div class="text-right hidden sm:block">
                            <p class="font-label-bold text-slate-900">Budi Santoso</p>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest">Super Admin</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="p-6 lg:p-xl max-w-[1320px] mx-auto w-full space-y-gutter">
                <section class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
                    <div>
                        <h1 class="font-h2 text-h2 text-primary">Admin Mitra</h1>
                        <p class="font-body-md text-slate-500">Kelola data usaha mitra, verifikasi, produk, wilayah, dan
                            status kerja sama.</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <button
                            class="px-5 py-2.5 border border-slate-300 text-slate-700 rounded-xl font-button hover:bg-white transition-colors flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">download</span>
                            Ekspor
                        </button>
                        <a href="{{ route('daftar') }}"
                            class="px-5 py-2.5 bg-primary text-on-primary rounded-xl font-button hover:bg-primary-container transition-colors flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">person_add</span>
                            Tambah Mitra
                        </a>
                    </div>
                </section>


                <section
                    class="bg-white p-4 rounded-xl shadow-sm border border-slate-100 flex flex-col xl:flex-row gap-4 items-start xl:items-center justify-between">
                    <div class="relative w-full xl:max-w-sm">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2 bg-slate-50 border-slate-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-sm outline-none transition-all"
                            placeholder="Cari nama usaha..." type="text" />
                    </div>
                    <div class="flex flex-wrap items-center gap-md w-full xl:w-auto">
                        <select
                            class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                            <option>Semua Status</option>
                            <option>Terverifikasi</option>
                            <option>Review</option>
                            <option>Nonaktif</option>
                        </select>
                        <select
                            class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                            <option>Semua Kota</option>
                            <option>Solo</option>
                            <option>Bandung</option>
                            <option>Yogyakarta</option>
                            <option>Malang</option>
                        </select>
                        <button
                            class="flex items-center gap-xs font-button text-sm text-primary hover:bg-emerald-50 px-3 py-2 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-sm">filter_list</span>
                            Reset Filter
                        </button>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse min-w-[1040px]">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Mitra</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Pemilik</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Kategori</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Lokasi</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Produk</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Omzet</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                        Status</th>
                                    <th
                                        class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px] text-right">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @php
                                    $partners = [
                                        [
                                            'business' => 'Batik Lestari Solo',
                                            'owner' => 'Siti Aminah',
                                            'email' => 'siti@batiklestari.id',
                                            'cat' => 'Batik & Tekstil',
                                            'city' => 'Solo',
                                            'products' => 24,
                                            'revenue' => 'Rp 42,8 jt',
                                            'status' => 'Terverifikasi',
                                            'initial' => 'BL',
                                            'color' => 'bg-emerald-100 text-emerald-800',
                                        ],
                                        [
                                            'business' => 'Berkah Jaya Food',
                                            'owner' => 'Aminah Safitri',
                                            'email' => 'keripik.aminah@mitra.id',
                                            'cat' => 'Kuliner Nusantara',
                                            'city' => 'Bandung',
                                            'products' => 18,
                                            'revenue' => 'Rp 31,2 jt',
                                            'status' => 'Review',
                                            'initial' => 'BJ',
                                            'color' => 'bg-orange-100 text-orange-800',
                                        ],
                                        [
                                            'business' => 'Tanah Rupa Studio',
                                            'owner' => 'Deni Kurniawan',
                                            'email' => 'deni.furnitur@mitra.id',
                                            'cat' => 'Kerajinan Tangan',
                                            'city' => 'Yogyakarta',
                                            'products' => 31,
                                            'revenue' => 'Rp 58,6 jt',
                                            'status' => 'Terverifikasi',
                                            'initial' => 'TR',
                                            'color' => 'bg-sky-100 text-sky-800',
                                        ],
                                        [
                                            'business' => 'Natura Desa',
                                            'owner' => 'Rani Permata',
                                            'email' => 'halo@naturadesa.id',
                                            'cat' => 'Kecantikan & Herbal',
                                            'city' => 'Malang',
                                            'products' => 9,
                                            'revenue' => 'Rp 12,4 jt',
                                            'status' => 'Nonaktif',
                                            'initial' => 'ND',
                                            'color' => 'bg-violet-100 text-violet-800',
                                        ],
                                    ];
                                @endphp
                                @foreach ($partners as $partner)
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-11 h-11 rounded-xl {{ $partner['color'] }} flex items-center justify-center font-bold">
                                                    {{ $partner['initial'] }}</div>
                                                <div>
                                                    <p class="font-label-bold text-on-surface">
                                                        {{ $partner['business'] }}</p>
                                                    <p class="text-xs text-outline">{{ $partner['email'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 font-body-sm text-on-surface-variant">
                                            {{ $partner['owner'] }}</td>
                                        <td class="px-6 py-4 font-body-sm text-on-surface-variant">
                                            {{ $partner['cat'] }}</td>
                                        <td class="px-6 py-4 font-body-sm text-on-surface-variant">
                                            {{ $partner['city'] }}</td>
                                        <td class="px-6 py-4 font-label-bold text-on-surface">
                                            {{ $partner['products'] }}</td>
                                        <td class="px-6 py-4 font-label-bold text-on-surface">
                                            {{ $partner['revenue'] }}</td>
                                        <td class="px-6 py-4">
                                            @if ($partner['status'] === 'Terverifikasi')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800"><span
                                                        class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>Terverifikasi</span>
                                            @elseif ($partner['status'] === 'Review')
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800"><span
                                                        class="w-1.5 h-1.5 rounded-full bg-orange-600"></span>Review</span>
                                            @else
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600"><span
                                                        class="w-1.5 h-1.5 rounded-full bg-slate-500"></span>Nonaktif</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-end gap-1">
                                                <button
                                                    class="p-2 text-outline hover:text-primary hover:bg-emerald-50 rounded-lg transition-colors"
                                                    title="Detail">
                                                    <span
                                                        class="material-symbols-outlined text-[20px]">visibility</span>
                                                </button>
                                                <button
                                                    class="p-2 text-outline hover:text-primary hover:bg-emerald-50 rounded-lg transition-colors"
                                                    title="Verifikasi">
                                                    <span class="material-symbols-outlined text-[20px]">verified</span>
                                                </button>
                                                <button
                                                    class="p-2 text-outline hover:text-primary hover:bg-emerald-50 rounded-lg transition-colors"
                                                    title="Edit">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="px-6 py-4 border-t border-slate-100 flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                        <p class="font-body-sm text-outline">Menampilkan 4 dari 96 mitra</p>
                        <div class="flex items-center gap-2">
                            <button
                                class="px-3 py-2 rounded-lg border border-slate-200 text-slate-400 font-button text-sm">Sebelumnya</button>
                            <button
                                class="px-3 py-2 rounded-lg bg-primary text-on-primary font-button text-sm">1</button>
                            <button
                                class="px-3 py-2 rounded-lg border border-slate-200 text-slate-600 font-button text-sm">2</button>
                            <button
                                class="px-3 py-2 rounded-lg border border-slate-200 text-slate-600 font-button text-sm">Berikutnya</button>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

</html>