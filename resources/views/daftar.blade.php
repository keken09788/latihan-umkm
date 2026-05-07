<!DOCTYPE html>

<html lang="id"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Daftar Mitra - UMKM Juara</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#904d00",
                        "primary-fixed-dim": "#8bd6b6",
                        "on-primary-container": "#8bd6b7",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "tertiary": "#00443e",
                        "on-surface-variant": "#3f4944",
                        "outline-variant": "#bec9c2",
                        "surface-bright": "#f8f9ff",
                        "on-surface": "#0b1c30",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#00201d",
                        "tertiary-fixed": "#89f5e7",
                        "primary": "#004532",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#ffb77d",
                        "on-primary-fixed": "#002116",
                        "inverse-on-surface": "#eaf1ff",
                        "error-container": "#ffdad6",
                        "surface-container": "#e5eeff",
                        "inverse-surface": "#213145",
                        "primary-container": "#065f46",
                        "on-secondary-container": "#663500",
                        "outline": "#6f7973",
                        "secondary-container": "#fe932c",
                        "surface": "#f8f9ff",
                        "on-error": "#ffffff",
                        "tertiary-container": "#005e56",
                        "background": "#f8f9ff",
                        "on-background": "#0b1c30",
                        "inverse-primary": "#8bd6b6",
                        "surface-container-low": "#eff4ff",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#a6f2d1",
                        "surface-container-highest": "#d3e4fe",
                        "on-tertiary-fixed-variant": "#005049",
                        "on-secondary-fixed": "#2f1500",
                        "on-primary-fixed-variant": "#00513b",
                        "surface-tint": "#1b6b51",
                        "surface-container-high": "#dce9ff",
                        "on-tertiary-container": "#6cd9cb",
                        "on-secondary": "#ffffff",
                        "secondary-fixed": "#ffdcc3",
                        "surface-dim": "#cbdbf5",
                        "surface-variant": "#d3e4fe"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "xxl": "48px",
                        "md": "16px",
                        "base": "4px",
                        "xs": "4px",
                        "container-max": "1320px",
                        "xl": "32px",
                        "lg": "24px",
                        "gutter": "24px",
                        "sm": "8px"
                    },
                    "fontFamily": {
                        "h3": ["Inter"],
                        "button": ["Inter"],
                        "h2": ["Inter"],
                        "h1": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "label-bold": ["Inter"]
                    },
                    "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "button": ["16px", {"lineHeight": "1", "fontWeight": "600"}],
                        "h2": ["36px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "h1": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image: radial-gradient(at 0% 0%, rgba(139, 214, 182, 0.15) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(254, 147, 44, 0.05) 0px, transparent 50%);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="bg-white/95 backdrop-blur-md fixed top-0 w-full z-50 border-b border-slate-200 shadow-sm">
    <div class="max-w-[1320px] mx-auto flex items-center justify-between px-6 py-4">
        <!-- Brand Logo -->
        <div class="text-xl font-bold text-emerald-900 tracking-tighter">
            UMKM Digital
        </div>
        <!-- Search Bar (on_left logic as per JSON) -->
        <div class="hidden md:flex flex-1 max-w-md mx-8">
            <div class="relative w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all font-body-sm" placeholder="Cari produk lokal..." type="text"/>
            </div>
        </div>
        <!-- Navigation Links -->
        <div class="hidden lg:flex items-center gap-6 font-inter text-sm font-medium tracking-tight">
            <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="{{ route('home') }}">Etalase</a>
            <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="{{ route('home') }}#kategori">Kategori</a>
            <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="{{ route('produk') }}">Produk</a>
            <a class="text-emerald-700 border-b-2 border-emerald-700 pb-1" href="{{ route('daftar') }}">Kemitraan</a>
        </div>
        <!-- Actions -->
        <div class="flex items-center gap-4 ml-6">
            <button class="relative p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-colors active:scale-95">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                <span class="absolute top-1 right-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold px-1.5 py-0.5 rounded-full">3</span>
            </button>
            <a href="{{ route('login') }}" class="bg-primary text-on-primary px-6 py-2 rounded-xl font-button active:scale-95 transition-transform">
                Masuk
            </a>
        </div>
    </div>
</nav>
<main class="flex-grow flex items-center justify-center pt-28 pb-xl bg-mesh px-6">
    <div class="max-w-[1320px] w-full grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
        <section class="order-2 lg:order-1 space-y-lg">
            <div class="max-w-xl">
                <h1 class="font-h1 text-h1 text-primary mb-md leading-tight">Mulai Perjalanan Digital Usaha Anda</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-xl">Bergabunglah dengan ekosistem UMKM Juara dan nikmati berbagai kemudahan untuk mengembangkan bisnis lokal Anda ke pasar nasional.</p>
                <div class="space-y-md">
                    <div class="flex items-start gap-md p-md bg-white rounded-xl shadow-sm border border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-primary-fixed-dim flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined">trending_up</span>
                        </div>
                        <div>
                            <h3 class="font-label-bold text-label-bold text-on-surface">Akses Pasar Lebih Luas</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jangkau jutaan pembeli aktif di seluruh Indonesia melalui satu platform terintegrasi.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-md p-md bg-white rounded-xl shadow-sm border border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary-fixed-dim shrink-0">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">inventory_2</span>
                        </div>
                        <div>
                            <h3 class="font-label-bold text-label-bold text-on-surface">Manajemen Stok Efisien</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Dashboard pintar untuk memantau stok, pesanan, dan pengiriman secara real-time.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-md p-md bg-white rounded-xl shadow-sm border border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary-container shrink-0">
                            <span class="material-symbols-outlined">payments</span>
                        </div>
                        <div>
                            <h3 class="font-label-bold text-label-bold text-on-surface">Pencairan Dana Cepat</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sistem pembayaran aman dengan proses rekonsiliasi dan pencairan dana otomatis.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-xl relative h-[240px] rounded-2xl overflow-hidden shadow-lg hidden md:block">
                    <img alt="Digital Store Dashboard" class="w-full h-full object-cover" data-alt="Modern workspace with a laptop showing a retail analytics dashboard, surrounded by local artisan products and warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFbaJ8zJtELjWwGpygA3rcrYmdqZiAdWmNg2zZgeZ7nVujk0VL1jV7vRCMcSeqYnvrf84clO3DkpFB6EeyfDHJVVreIsRvkqntGg4qnKSwvnhm-xB8cTCBVsa2iRNFVsLLe5egY5EEn13ZOakBt5tLhU8boAD7qpsqTbW5OdUgnCaHcSgaC8Pvax_88CvEg65xap0LptXiuS03SdquQpcHihoNHzEmmet9GAfs8mLCBWJHgFj9o7p5ULoDRk8ZDZojZaQg8VpeZsla"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end p-lg">
                        <p class="text-white font-medium italic">"Berkat UMKM Juara, omzet kerajinan bambu saya naik 300% dalam 6 bulan pertama." - Budi Santoso, Mitra Sejak 2023</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="order-1 lg:order-2">
            <div class="bg-white rounded-xl shadow-xl p-xl border border-slate-100">
                <div class="mb-xl">
                    <h2 class="font-h2 text-h2 text-primary mb-xs">Daftar Mitra</h2>
                    <p class="font-body-md text-on-surface-variant">Isi formulir di bawah untuk memulai akun toko Anda.</p>
                </div>
                <form class="space-y-md">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <div class="space-y-xs">
                            <label class="font-label-bold text-label-bold text-on-surface-variant block">Nama Lengkap</label>
                            <input class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" placeholder="Contoh: Budi Santoso" type="text"/>
                        </div>
                        <div class="space-y-xs">
                            <label class="font-label-bold text-label-bold text-on-surface-variant block">Nama Usaha/SME</label>
                            <input class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" placeholder="Contoh: Keripik Berkah Jaya" type="text"/>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-bold text-label-bold text-on-surface-variant block">Email</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                            <input class="w-full pl-11 pr-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" placeholder="nama@email.com" type="email"/>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-bold text-label-bold text-on-surface-variant block">Nomor WhatsApp</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">call</span>
                            <input class="w-full pl-11 pr-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" placeholder="0812XXXXXXXX" type="tel"/>
                        </div>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-bold text-label-bold text-on-surface-variant block">Password</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                            <input class="w-full pl-11 pr-12 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md" placeholder="Min. 8 karakter" type="password"/>
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400" type="button">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-md">
                        <label class="flex items-start gap-md cursor-pointer group">
                            <input class="mt-1 rounded border-slate-300 text-primary focus:ring-primary" type="checkbox"/>
                            <span class="font-body-sm text-on-surface-variant">Saya menyetujui <a class="text-primary font-semibold hover:underline" href="#">Syarat &amp; Ketentuan</a> serta <a class="text-primary font-semibold hover:underline" href="#">Kebijakan Privasi</a> UMKM Juara.</span>
                        </label>
                    </div>
                    <button class="w-full py-4 bg-secondary-container text-on-secondary-container rounded-lg font-button text-button shadow-md hover:shadow-lg active:scale-[0.99] transition-all mt-md" type="submit">
                        Daftar Sekarang
                    </button>
                    <div class="text-center pt-md">
                        <p class="font-body-sm text-on-surface-variant">Sudah punya akun? <a class="text-primary font-semibold hover:underline" href="{{ route('login') }}">Masuk di sini</a></p>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 mt-auto">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center px-6 py-8 gap-4">
        <div class="flex flex-col items-center md:items-start gap-2">
            <div class="font-bold text-emerald-900 dark:text-emerald-50 font-h3 text-xl">UMKM Juara</div>
            <p class="font-inter text-sm leading-relaxed text-slate-500 dark:text-slate-400 max-w-sm text-center md:text-left">
                © 2024 UMKM Juara Ecosystem. Memberdayakan ekonomi lokal melalui digitalisasi.
            </p>
        </div>
        <nav class="flex flex-wrap justify-center gap-6">
            <a class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hover:underline decoration-emerald-500 underline-offset-4 text-sm font-medium" href="#">Syarat &amp; Ketentuan</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hover:underline decoration-emerald-500 underline-offset-4 text-sm font-medium" href="#">Kebijakan Privasi</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hover:underline decoration-emerald-500 underline-offset-4 text-sm font-medium" href="#">Hubungi Kami</a>
            <a class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hover:underline decoration-emerald-500 underline-offset-4 text-sm font-medium" href="#">FAQ</a>
        </nav>
    </div>
</footer>
</body></html>
