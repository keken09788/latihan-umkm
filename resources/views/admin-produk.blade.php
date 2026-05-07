<!DOCTYPE html>

<html lang="id"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Produk - UMKM Digital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "h1": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "button": ["16px", {"lineHeight": "1", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-surface">
<div class="flex min-h-screen">
    <aside class="h-screen w-64 border-r border-slate-200 bg-slate-50 flex flex-col sticky top-0 left-0">
        <!-- Header -->
        <div class="p-6">
            <div class="text-lg font-black text-emerald-900 tracking-tighter mb-1">Admin Panel</div>
            <div class="flex items-center gap-3 mt-4">
                <img alt="Admin Avatar" class="w-10 h-10 rounded-xl object-cover" data-alt="Professional portrait of a corporate executive in a suit with a friendly expression and neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuQt_C01dHEClloUF05LZtyXXvUFdoM2M7amoR6SvfLamVNkqwE2AZLFhU5nk8iakqwiUyoWe-vkOB8kdea2HHNrY49e5_Sm3cK0vgwjwfCcW-8UCBvPTj4OE68ESFJlXbio72quGgm4cOi0NyZxXY7ZJfGwyVtvtbaIQhafeoyYc_JGpD--mJD4u5nWxr668Elbw4NNPLPx0IWVejsHdlbOzRjyw5yZgJqtF_-l4O8qmX7ulpV_l94XZ1UX9SbtABaYtOpI7H7Tla"/>
                <div>
                    <div class="font-inter text-sm font-semibold text-emerald-800">Admin Panel</div>
                    <div class="font-inter text-xs text-slate-500">SME Manager</div>
                </div>
            </div>
        </div>
        <!-- Main Nav -->
        <nav class="flex-1 px-4 space-y-1">
            <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 px-3 py-2 bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.produk') }}">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                Produk
            </a>
            <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.kategori') }}">
                <span class="material-symbols-outlined" data-icon="category">category</span>
                Kategori
            </a>
            <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.kelolauser') }}">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                Pengguna
            </a>
            <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.mitra') }}">
                <span class="material-symbols-outlined" data-icon="handshake">handshake</span>
                Mitra
            </a>
        </nav>
        <!-- Footer Nav -->
        <div class="px-4 pb-6 border-t border-slate-200 pt-4">
            <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('login') }}">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                Keluar
            </a>
        </div>
    </aside>
    <main class="flex-1 flex flex-col min-w-0">
        <header class="bg-white/95 backdrop-blur-md border-b border-slate-200 sticky top-0 z-40">
            <div class="max-w-[1320px] mx-auto px-6 py-4 flex items-center justify-between gap-6">
                <div class="relative w-full max-w-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                    <input class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-full text-sm focus:ring-2 focus:ring-emerald-700 focus:border-emerald-700" placeholder="Cari produk, SKU, atau mitra..." type="text"/>
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
                    <h1 class="font-h2 text-h2 text-primary">Admin Produk</h1>
                    <p class="font-body-md text-slate-500">Pantau katalog, stok, harga, dan status publikasi produk UMKM.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button class="px-5 py-2.5 border border-slate-300 text-slate-700 rounded-xl font-button hover:bg-white transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                        Ekspor
                    </button>
                    <a href="{{ route('produk.tambah') }}" class="px-5 py-2.5 bg-primary text-on-primary rounded-xl font-button hover:bg-primary-container transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        Tambah Produk
                    </a>
                </div>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-gutter">
                <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm">
                    <div class="flex justify-between items-start">
                        <div class="p-2 bg-emerald-50 text-emerald-700 rounded-lg"><span class="material-symbols-outlined">inventory_2</span></div>
                        <span class="text-emerald-600 text-xs font-semibold">+18 bulan ini</span>
                    </div>
                    <p class="mt-4 text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Total Produk</p>
                    <h2 class="text-h3 font-h3 text-slate-900">248</h2>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm">
                    <div class="flex justify-between items-start">
                        <div class="p-2 bg-orange-50 text-orange-700 rounded-lg"><span class="material-symbols-outlined">pending_actions</span></div>
                        <span class="text-orange-600 text-xs font-semibold">Perlu review</span>
                    </div>
                    <p class="mt-4 text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Draft & Review</p>
                    <h2 class="text-h3 font-h3 text-slate-900">14</h2>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm">
                    <div class="flex justify-between items-start">
                        <div class="p-2 bg-sky-50 text-sky-700 rounded-lg"><span class="material-symbols-outlined">storefront</span></div>
                        <span class="text-sky-600 text-xs font-semibold">96 mitra</span>
                    </div>
                    <p class="mt-4 text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Produk Aktif</p>
                    <h2 class="text-h3 font-h3 text-slate-900">221</h2>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm">
                    <div class="flex justify-between items-start">
                        <div class="p-2 bg-red-50 text-red-700 rounded-lg"><span class="material-symbols-outlined">warning</span></div>
                        <span class="text-red-600 text-xs font-semibold">Segera isi</span>
                    </div>
                    <p class="mt-4 text-slate-500 font-label-bold uppercase text-[10px] tracking-wider">Stok Menipis</p>
                    <h2 class="text-h3 font-h3 text-slate-900">9</h2>
                </div>
            </section>

            <section class="bg-white p-4 rounded-xl shadow-sm border border-slate-100 flex flex-col xl:flex-row gap-4 items-start xl:items-center justify-between">
                <div class="relative w-full xl:max-w-sm">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input class="w-full pl-10 pr-4 py-2 bg-slate-50 border-slate-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-sm outline-none transition-all" placeholder="Cari nama produk..." type="text"/>
                </div>
                <div class="flex flex-wrap items-center gap-md w-full xl:w-auto">
                    <select class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                        <option>Semua Kategori</option>
                        <option>Makanan &amp; Minuman</option>
                        <option>Fashion Lokal</option>
                        <option>Kerajinan Tangan</option>
                        <option>Kecantikan &amp; Herbal</option>
                    </select>
                    <select class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                        <option>Semua Status</option>
                        <option>Aktif</option>
                        <option>Draft</option>
                        <option>Review</option>
                        <option>Nonaktif</option>
                    </select>
                    <button class="flex items-center gap-xs font-button text-sm text-primary hover:bg-emerald-50 px-3 py-2 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-sm">filter_list</span>
                        Reset Filter
                    </button>
                </div>
            </section>

            <section class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[960px]">
                        <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">Produk</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">Kategori</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">Harga</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">Stok</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">Status</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">Performa</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px] text-right">Aksi</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                        @php
                            $products = [
                                ['name' => 'Syal Sutra Batik Tulis Solo', 'seller' => 'Batik Lestari', 'cat' => 'Fashion Lokal', 'price' => 'Rp 450.000', 'stock' => 34, 'status' => 'Aktif', 'sales' => '128 terjual', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDRDpBJa3_UZqpKuIodqcoiyQrA4TnxwGplK4syB-jHH2wIxjYnPUiU6F--swIuqHFUukdTGbK6ChnLnlsExyi0qPNK_NhYC_TfWRT0-wSbnc9wbxgeJbb-l8zmVUDATHLkp55bujAGMfSyuCRMwPWbGKKtSsaznJ602Xc8rhjoEy6eUS2vFAJNwbfOY8AW_S_Be6gZj0QVZke2Ez_KPIVoUmWSbS_CrGe8hn5-c8KDtOSCTo2dB2ssPYyB0Z8k_FDFHeGNzcGy23ZR'],
                                ['name' => 'Keripik Tempe Organik 200g', 'seller' => 'Berkah Jaya Food', 'cat' => 'Makanan & Minuman', 'price' => 'Rp 28.000', 'stock' => 8, 'status' => 'Review', 'sales' => '54 terjual', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCo-QCHE1BKmOYVwtxocU6RDivn3EgTn4MRU0uUHo4iWgyWiVeXgcAQmTS-LHMtD0CcI5ohHg1992V81ynz1vyAO7sphK4T6SDvYD8U1-N_7YKfPDkrtcyAoWtfRUsVrG4odiZzPLTY0pVvEzLYraaYrzAuJJo9LC6QOyRLtxJEJROhIon2HccCJydtoyBkIw4dZjusZyHZGCyY6w7eRHo3-z60IRF3Alh88YCKMKpsIcyFJEUSqL5018MpW9N-BvQFWCS62fq3A-1k'],
                                ['name' => 'Set Cangkir Keramik Stoneware', 'seller' => 'Tanah Rupa Studio', 'cat' => 'Kerajinan Tangan', 'price' => 'Rp 185.000', 'stock' => 19, 'status' => 'Aktif', 'sales' => '85 terjual', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDkR8iWfOwqWN4gbfROvrC6GdQFLBrrXZk8ZwtHlp1gJUQh-OtSN3GpU1k16f_UYytYqenooEOXXg9iK58kDk6ZksJsamlBDtr8ouFlmFnEsl73BDgQtmsY6X52ue1rN2VnFPOb0XEsD92R_sugBQAgsQkU9YmYmnx1Nvoc0k1DN0xkf4fgGR84qEXcbnPjOmFqJ0LO1957mWqX23TE2E9eiwLOi5QCHFN3LNe7h2WfyINwqfuiCWSGcaMamlllRxb2mOahTUkAQ9ch'],
                                ['name' => 'Sabun Herbal Serai Wangi', 'seller' => 'Natura Desa', 'cat' => 'Kecantikan & Herbal', 'price' => 'Rp 32.000', 'stock' => 0, 'status' => 'Nonaktif', 'sales' => '41 terjual', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCHBHJcLmOtbJhNiN6Kit6QeYBREiX3Qc_kgqqE0Is5KXGReXSOmblZgqegKwpujLth7M41BgkreI2muNLV-txTLXzNWf9dLRKH6Mukx2eTS3z_wvLESq319oPhSzCDBYzwUu8D2CKgARdMdVMrVgGZdSdUJ_v4QviYGgeM-nwjpNaAUUxwvkZ3X4t_hWw2WaEiFt4NOhhZTK5ePEAGkrOuZXOGOS6CR5FNlX6GokmD2AW6saABGwc3577p42nmqE-eS-cYkqwm38pn'],
                            ];
                        @endphp
                        @foreach ($products as $product)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <img class="w-12 h-12 rounded-xl object-cover bg-slate-100" alt="{{ $product['name'] }}" src="{{ $product['img'] }}"/>
                                        <div>
                                            <p class="font-label-bold text-on-surface">{{ $product['name'] }}</p>
                                            <p class="text-xs text-outline">{{ $product['seller'] }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-body-sm text-on-surface-variant">{{ $product['cat'] }}</td>
                                <td class="px-6 py-4 font-label-bold text-on-surface">{{ $product['price'] }}</td>
                                <td class="px-6 py-4">
                                    <span class="font-label-bold {{ $product['stock'] <= 8 ? 'text-red-700' : 'text-on-surface' }}">{{ $product['stock'] }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($product['status'] === 'Aktif')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800"><span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>Aktif</span>
                                    @elseif ($product['status'] === 'Review')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800"><span class="w-1.5 h-1.5 rounded-full bg-orange-600"></span>Review</span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600"><span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span>Nonaktif</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 font-body-sm text-on-surface-variant">{{ $product['sales'] }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-1">
                                        <button class="p-2 text-outline hover:text-primary hover:bg-emerald-50 rounded-lg transition-colors" title="Lihat">
                                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                                        </button>
                                        <button class="p-2 text-outline hover:text-primary hover:bg-emerald-50 rounded-lg transition-colors" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="p-2 text-outline hover:text-red-700 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-slate-100 flex flex-col sm:flex-row gap-3 sm:items-center justify-between">
                    <p class="font-body-sm text-outline">Menampilkan 4 dari 248 produk</p>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-2 rounded-lg border border-slate-200 text-slate-400 font-button text-sm">Sebelumnya</button>
                        <button class="px-3 py-2 rounded-lg bg-primary text-on-primary font-button text-sm">1</button>
                        <button class="px-3 py-2 rounded-lg border border-slate-200 text-slate-600 font-button text-sm">2</button>
                        <button class="px-3 py-2 rounded-lg border border-slate-200 text-slate-600 font-button text-sm">Berikutnya</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>
</body></html>
