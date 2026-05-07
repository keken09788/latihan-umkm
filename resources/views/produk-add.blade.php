<!DOCTYPE html>

<html lang="id"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .form-input-shadow {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-surface flex min-h-screen">
<!-- SideNavBar Shell -->
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
        <a class="flex items-center gap-3 px-3 py-2 text-slate-500 hover:bg-slate-100 font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('kelolauser') }}">
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
<!-- Main Content Canvas -->
<main class="flex-1 overflow-y-auto bg-background">
    <!-- Top Header Anchor -->
    <header class="sticky top-0 z-10 bg-white/80 backdrop-blur-md px-xl py-lg flex justify-between items-center">
        <div>
            <h1 class="font-h2 text-h2 text-primary">Tambah Produk Baru</h1>
            <p class="font-body-sm text-body-sm text-outline">Lengkapi detail produk Anda untuk mulai berjualan di UMKM Digital.</p>
        </div>
        <div class="flex items-center gap-md">
            <button class="px-xl py-sm font-button text-button border border-outline text-outline rounded-full hover:bg-slate-50 active:scale-95 transition-all">Batal</button>
            <button class="px-xl py-sm font-button text-button bg-primary text-on-primary rounded-full hover:opacity-90 active:scale-95 transition-all shadow-sm">Simpan Produk</button>
        </div>
    </header>
    <div class="max-w-[1000px] mx-auto px-xl py-xl">
        <div class="grid grid-cols-12 gap-gutter">
            <!-- Left Column: Form Details -->
            <div class="col-span-12 lg:col-span-7 space-y-lg">
                <!-- General Info Card -->
                <section class="bg-white p-xl rounded-xl shadow-[0_8px_24px_rgba(0,0,0,0.05)] space-y-lg">
                    <h3 class="font-h3 text-h3 text-on-surface">Informasi Produk</h3>
                    <div class="space-y-md">
                        <div>
                            <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Nama Produk</label>
                            <input class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400" placeholder="Contoh: Keripik Tempe Organik 200g" type="text"/>
                            <p class="mt-xs text-[12px] text-outline">Gunakan nama yang jelas dan menarik pelanggan.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-md">
                            <div>
                                <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Kategori</label>
                                <div class="relative">
                                    <select class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none appearance-none bg-white transition-all">
                                        <option>Pilih Kategori</option>
                                        <option>Makanan &amp; Minuman</option>
                                        <option>Kerajinan Tangan</option>
                                        <option>Fashion Lokal</option>
                                        <option>Pertanian</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">expand_more</span>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Harga (Rp)</label>
                                <input class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400" placeholder="0" type="number"/>
                            </div>
                        </div>
                        <div>
                            <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Deskripsi Produk</label>
                            <textarea class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all placeholder:text-slate-400 resize-none" placeholder="Ceritakan keunggulan produk Anda..." rows="6"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Inventory Section -->
                <section class="bg-white p-xl rounded-xl shadow-[0_8px_24px_rgba(0,0,0,0.05)] space-y-lg">
                    <h3 class="font-h3 text-h3 text-on-surface">Stok &amp; Inventaris</h3>
                    <div class="grid grid-cols-2 gap-md">
                        <div>
                            <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">Jumlah Stok</label>
                            <input class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" type="number" value="0"/>
                        </div>
                        <div>
                            <label class="block font-label-bold text-label-bold text-on-surface-variant mb-xs">SKU (Opsional)</label>
                            <input class="w-full p-md border border-slate-300 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none" placeholder="PROD-001" type="text"/>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right Column: Media Upload -->
            <div class="col-span-12 lg:col-span-5 space-y-lg">
                <section class="bg-white p-xl rounded-xl shadow-[0_8px_24px_rgba(0,0,0,0.05)] space-y-lg sticky top-xl">
                    <div class="flex justify-between items-center">
                        <h3 class="font-h3 text-h3 text-on-surface">Foto Produk</h3>
                        <span class="text-body-sm font-label-bold text-primary bg-primary/10 px-sm py-xs rounded">Wajib</span>
                    </div>
                    <!-- Drag and Drop Area -->
                    <div class="group relative border-2 border-dashed border-slate-200 hover:border-primary rounded-xl p-xl flex flex-col items-center justify-center text-center cursor-pointer transition-all bg-slate-50 hover:bg-emerald-50/30">
                        <input class="absolute inset-0 opacity-0 cursor-pointer" multiple="" type="file"/>
                        <div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">cloud_upload</span>
                        </div>
                        <p class="font-label-bold text-on-surface mb-xs">Tarik &amp; Lepas Foto di Sini</p>
                        <p class="text-body-sm text-outline">Atau klik untuk pilih file (PNG, JPG maks 5MB)</p>
                    </div>
                    <!-- Thumbnails Preview Grid -->
                    <div class="grid grid-cols-3 gap-md">
                        <div class="relative group aspect-square rounded-lg overflow-hidden border border-slate-200">
                            <img class="w-full h-full object-cover" data-alt="close up shot of handcrafted ceramic bowl with earth tone glaze on a wooden table" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3zDcbmGbtUfon80rr7ZrSHyWt3hWbbLGL7kCtDHWhaBB5grWQ3gOAmyUxJEs0uiwI6XbbM1bCFrnutgez_JS8GmgB41bftDmXbTx5Vis8WykPmv-7gG0Q25FyCVLiZ5yrwTGO0HZM_HGKtWi7K26mWZsGqd9U5huG9Low9EOqEFIbFzgggisyf-a_8ZL00og9wGeYc1eGpRKMCXEG96bHrlimRooDw4WPQpsSAE_6WWS88FXq5s-JDwtIrqizjV25FgqmZZmGJ-XU"/>
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <button class="bg-red-500 text-white p-xs rounded-full hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-sm">delete</span>
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 bg-primary/90 text-white text-[10px] py-1 text-center font-label-bold">UTAMA</div>
                        </div>
                        <div class="relative group aspect-square rounded-lg overflow-hidden border border-slate-200">
                            <img class="w-full h-full object-cover" data-alt="artisanal woven basket showing intricate texture and natural fibers" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQMg8kRJaEWbAtC3ibrdP5vd0X7n-stqaR9R6gyACa_QIawu8PqCnxWRxhvlYDOwjosRk8N1SEoyHQ-NaYjv9q5s1hL3tDGlvSqeI89T0TUVyEEydbVAckR4zsS5ROELb4438thmoS4Qsuhe9dn8OHQF3TJhy9zbm6Ah_n6uTuPYdBikSlySwDFur574jpziLyTY0tfdlhOL_ZiEbGv9kSdgGUegNvpGufuvucNajrlMm-hPhykov9h2yCu6IxxuacdkXHl7_6KYrY"/>
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <button class="bg-red-500 text-white p-xs rounded-full hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-sm">delete</span>
                                </button>
                            </div>
                        </div>
                        <div class="aspect-square rounded-lg border border-dashed border-slate-300 flex items-center justify-center text-slate-400 hover:text-primary hover:border-primary transition-colors cursor-pointer">
                            <span class="material-symbols-outlined text-2xl">add</span>
                        </div>
                    </div>
                    <!-- Guidelines -->
                    <div class="p-md bg-secondary-fixed rounded-xl flex gap-md">
                        <span class="material-symbols-outlined text-on-secondary-container" style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                        <div>
                            <p class="font-label-bold text-on-secondary-container text-body-sm">Tips Foto Bagus</p>
                            <p class="text-[12px] text-on-secondary-fixed-variant leading-tight mt-xs">Gunakan pencahayaan alami dan latar belakang polos untuk menonjolkan detail produk Anda.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<!-- Footer Mobile Suppressed due to SideNavBar context -->
<footer class="md:hidden fixed bottom-0 w-full bg-white border-t border-slate-200 p-md flex justify-between items-center z-50">
    <button class="px-lg py-sm font-button text-body-sm border border-outline rounded-full">Batal</button>
    <button class="px-xl py-sm font-button text-body-sm bg-primary text-on-primary rounded-full shadow-md">Simpan</button>
</footer>
</body></html>
