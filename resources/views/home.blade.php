<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>UMKM Digital - Memberdayakan Ekonomi Lokal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background font-body-md text-on-background">
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
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all font-body-sm"
                        placeholder="Cari produk lokal..." type="text" />
                </div>
            </div>
            <!-- Navigation Links -->
            <div class="hidden lg:flex items-center gap-6 font-inter text-sm font-medium tracking-tight">
                <a class="text-emerald-700 border-b-2 border-emerald-700 pb-1" href="{{ route('home') }}">Etalase</a>
                <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="#kategori">Kategori</a>
                <a class="text-slate-600 hover:text-emerald-700 transition-colors"
                    href="{{ route('produk') }}">Produk</a>
                <a class="text-slate-600 hover:text-emerald-700 transition-colors"
                    href="{{ route('daftar') }}">Kemitraan</a>
            </div>
            <!-- Actions -->
            <div class="flex items-center gap-4 ml-6">
                <button
                    class="relative p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-colors active:scale-95">
                    <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                    <span
                        class="absolute top-1 right-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold px-1.5 py-0.5 rounded-full">3</span>
                </button>
                <a href="{{ route('login') }}"
                    class="bg-primary text-on-primary px-6 py-2 rounded-xl font-button active:scale-95 transition-transform">
                    Masuk
                </a>
            </div>
        </div>
    </nav>
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative h-[600px] flex items-center overflow-hidden bg-primary-container">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover opacity-40 mix-blend-overlay"
                    data-alt="vibrant traditional Indonesian marketplace with colorful textiles, handwoven baskets, and artisan crafts under warm natural sunlight"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVbK4LFkGafU97yl3UiwfeLfGKsbpSFhG2L-1YrAq5cB-SlT-DbarJtW8bI4YMKw-LOi3RPe0TXpxNPtgl2nTizcuteCriixlRTkr3jU_PNwF8IB6v7Iwi956B5_ORXJxi65KYFg3R63_vDW-hq2iczUeS6CAFZkz_D2t0ONL8Y0So2Kt8wmsNZpUwPqRc-SpWRDB2fdunmDr63g97ns03_b30LWhk2o3Ei_e2w-ASuikLn5N4lEOHzIrrLXM4vrl5uhE7brL8ofiu" />
                <div
                    class="absolute inset-0 bg-gradient-to-r from-primary-container via-primary-container/80 to-transparent">
                </div>
            </div>
            <div class="relative z-10 max-w-[1320px] mx-auto px-6 w-full">
                <div class="max-w-2xl">
                    <span
                        class="inline-block px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-bold text-xs mb-4">MEMBERDAYAKAN
                        EKONOMI LOKAL</span>
                    <h1 class="font-h1 text-h1 text-white mb-6">Mahakarya Nusantara dalam Genggaman Anda.</h1>
                    <p class="font-body-lg text-white/90 mb-8 max-w-lg">Temukan keunikan produk artisan lokal terbaik
                        dari seluruh penjuru Indonesia. Dari batik tulis hingga camilan tradisional premium.</p>
                    <div class="flex gap-4">
                        <button
                            class="bg-secondary-container text-on-secondary-container px-8 py-4 rounded-xl font-button shadow-lg active:scale-95 transition-all">Mulai
                            Belanja</button>
                        <a href="{{ route('produk') }}"
                            class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-xl font-button hover:bg-white/20 active:scale-95 transition-all">Jelajahi
                            Produk</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Categories (Bento Grid Style) -->
        <section id="kategori" class="py-xxl max-w-[1320px] mx-auto px-6">
            <div class="flex justify-between items-end mb-xl">
                <div>
                    <h2 class="font-h2 text-h2 text-primary">Kategori Pilihan</h2>
                    <p class="font-body-md text-outline">Pilih kategori produk yang sesuai dengan kebutuhan Anda.</p>
                </div>
                <button class="text-primary font-label-bold flex items-center gap-2 hover:gap-3 transition-all">Lihat
                    Semua <span class="material-symbols-outlined">arrow_forward</span></button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-gutter h-[500px]">
                <div class="md:col-span-2 md:row-span-2 relative rounded-full overflow-hidden group cursor-pointer">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="meticulous close-up of a hand painting intricate batik patterns with hot wax on white fabric, artistic craftsmanship"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBu0Cn0p10-CQJLK6x1xjfl3KDCI2lPYBm_Ga3TwK3IZPqt4Hji_cQvuPKZ-hrf54g3uVN4dik4zQh3Z6_3KzzF7KjX7ikSLQzSNW1OvQxp41uU4Xbb5sr6akH6h2TmtwLoH4CmdVzjhV4XbsjPt_QMCQ9qImB55gPGaYKQUl1W2ZemCDUS-RZm4sVaUhFXorEgtT1_h08SCtyGSw4kqPPmax32H5ty7UUlzNgwMHvis4c0rVd8AFhsJmntwnk-ZlfeeuSaWKWS90Oo" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-xl">
                        <h3 class="font-h3 text-h3 text-white">Batik &amp; Tekstil</h3>
                        <p class="text-white/80 font-body-sm">Warisan budaya autentik</p>
                    </div>
                </div>
                <div class="md:col-span-2 relative rounded-full overflow-hidden group cursor-pointer">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="assorted premium Indonesian traditional snacks and crackers arranged elegantly on a wooden platter, rustic food photography"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo-QCHE1BKmOYVwtxocU6RDivn3EgTn4MRU0uUHo4iWgyWiVeXgcAQmTS-LHMtD0CcI5ohHg1992V81ynz1vyAO7sphK4T6SDvYD8U1-N_7YKfPDkrtcyAoWtfRUsVrG4odiZzPLTY0pVvEzLYraaYrzAuJJo9LC6QOyRLtxJEJROhIon2HccCJydtoyBkIw4dZjusZyHZGCyY6w7eRHo3-z60IRF3Alh88YCKMKpsIcyFJEUSqL5018MpW9N-BvQFWCS62fq3A-1k" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-xl">
                        <h3 class="font-h3 text-h3 text-white">Kuliner Nusantara</h3>
                        <p class="text-white/80 font-body-sm">Cita rasa asli daerah</p>
                    </div>
                </div>
                <div class="relative rounded-full overflow-hidden group cursor-pointer">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="exquisite hand-carved wooden bowl and home decor items made by local artisans, organic textures and warm wood tones"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYQeOuPAE9CaNQ1achmlWvn6YD05-O1N08fP24HzdKH6Ly_gfS6074g8XkCM0oAvAC3syttyYoejGNFZ856Ve4Ds3xj0AZkzeJB6yncgen-WVTQLy7r9KyukzQemVd1q8STadPGMB5hpsJvC7f99nxZDqdgAwlptOWYJ3OihiNP9Ky-gl1Wv2tijywRRpXWaSX8pJIz10rN5GHHTbJaSywEmHuXLRpWPbSSHDi2j3-J9i5R606iNv6kydSD9VHbVqQQObzgGlvyR1W" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-lg">
                        <h3 class="text-lg font-bold text-white leading-tight">Kerajinan Tangan</h3>
                    </div>
                </div>
                <div class="relative rounded-full overflow-hidden group cursor-pointer">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="natural organic skincare products in minimalist packaging with tropical ingredients like coconut and aloe vera"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHBHJcLmOtbJhNiN6Kit6QeYBREiX3Qc_kgqqE0Is5KXGReXSOmblZgqegKwpujLth7M41BgkreI2muNLV-txTLXzNWf9dLRKH6Mukx2eTS3z_wvLESq319oPhSzCDBYzwUu8D2CKgARdMdVMrVgGZdSdUJ_v4QviYGgeM-nwjpNaAUUxwvkZ3X4t_hWw2WaEiFt4NOhhZTK5ePEAGkrOuZXOGOS6CR5FNlX6GokmD2AW6saABGwc3577p42nmqE-eS-cYkqwm38pn" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-lg">
                        <h3 class="text-lg font-bold text-white leading-tight">Kecantikan &amp; Herbal</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Grid -->
        <section class="bg-surface-container-low py-xxl">
            <div class="max-w-[1320px] mx-auto px-6">
                <div class="mb-xl">
                    <h2 class="font-h2 text-h2 text-primary">Produk Terbaru</h2>
                    <p class="font-body-md text-outline">Dukung UMKM dengan membeli produk-produk berkualitas terbaru
                        kami.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                    <!-- Product Card 1 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
                        <div class="relative h-64">
                            <img class="w-full h-full object-cover"
                                data-alt="high-quality silk batik scarf with elegant floral patterns in deep indigo and gold colors"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRDpBJa3_UZqpKuIodqcoiyQrA4TnxwGplK4syB-jHH2wIxjYnPUiU6F--swIuqHFUukdTGbK6ChnLnlsExyi0qPNK_NhYC_TfWRT0-wSbnc9wbxgeJbb-l8zmVUDATHLkp55bujAGMfSyuCRMwPWbGKKtSsaznJ602Xc8rhjoEy6eUS2vFAJNwbfOY8AW_S_Be6gZj0QVZke2Ez_KPIVoUmWSbS_CrGe8hn5-c8KDtOSCTo2dB2ssPYyB0Z8k_FDFHeGNzcGy23ZR" />
                            <button
                                class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-primary hover:bg-white transition-colors">
                                <span class="material-symbols-outlined text-[20px]" data-icon="favorite">favorite</span>
                            </button>
                        </div>
                        <div class="p-md">
                            <span class="text-xs font-label-bold text-outline uppercase tracking-wider">Kain &amp;
                                Pakaian</span>
                            <h4 class="font-label-bold text-lg mt-1 text-on-surface line-clamp-1">Syal Sutra Batik
                                Tulis Solo</h4>
                            <div class="flex items-center gap-1 my-2">
                                <span class="material-symbols-outlined text-secondary text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-sm font-label-bold text-on-surface">4.9</span>
                                <span class="text-xs text-outline">(128 Terjual)</span>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg font-bold text-primary">Rp 450.000</span>
                                <button
                                    class="bg-secondary-container text-on-secondary-container p-2 rounded-lg active:scale-90 transition-transform">
                                    <span class="material-symbols-outlined"
                                        data-icon="shopping_cart">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
                        <div class="relative h-64">
                            <img class="w-full h-full object-cover"
                                data-alt="artisanal ceramic coffee mug set with a reactive glaze finish in earthy clay tones"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkR8iWfOwqWN4gbfROvrC6GdQFLBrrXZk8ZwtHlp1gJUQh-OtSN3GpU1k16f_UYytYqenooEOXXg9iK58kDk6ZksJsamlBDtr8ouFlmFnEsl73BDgQtmsY6X52ue1rN2VnFPOb0XEsD92R_sugBQAgsQkU9YmYmnx1Nvoc0k1DN0xkf4fgGR84qEXcbnPjOmFqJ0LO1957mWqX23TE2E9eiwLOi5QCHFN3LNe7h2WfyINwqfuiCWSGcaMamlllRxb2mOahTUkAQ9ch" />
                            <button
                                class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-primary hover:bg-white transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="favorite">favorite</span>
                            </button>
                        </div>
                        <div class="p-md">
                            <span class="text-xs font-label-bold text-outline uppercase tracking-wider">Peralatan
                                Rumah</span>
                            <h4 class="font-label-bold text-lg mt-1 text-on-surface line-clamp-1">Set Cangkir Keramik
                                Stoneware</h4>
                            <div class="flex items-center gap-1 my-2">
                                <span class="material-symbols-outlined text-secondary text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-sm font-label-bold text-on-surface">4.8</span>
                                <span class="text-xs text-outline">(85 Terjual)</span>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg font-bold text-primary">Rp 185.000</span>
                                <button
                                    class="bg-secondary-container text-on-secondary-container p-2 rounded-lg active:scale-90 transition-transform">
                                    <span class="material-symbols-outlined"
                                        data-icon="shopping_cart">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
                        <div class="relative h-64">
                            <img class="w-full h-full object-cover"
                                data-alt="bag of premium roasted Indonesian Gayo coffee beans with minimalist craft paper packaging"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAi_etdLuFp250QN8e1pFOqU9J4BiN6N-cy6m0-KHghmWmwGJPXQkE2XNx5xpe8ox_EmxhtOsGOkNTnr7tZHWf_XqLVwlfq-QRi-631TnUVnUoXydTJk0Rd0VEJhE281-fswvhFy89ezLrQJJ8NZfPYaDOfLTr73LYLJgGqvS_u6PdbOJAN6MLGwsOS0YYquuIJQkzUs-LG_V-tcCpl-l-seCGv0Om2bEaFRNUjrMzoiy4qkYnu_fPn8XuVX4pgugmyAcAPuLiZVbhp" />
                            <button
                                class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-primary hover:bg-white transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="favorite">favorite</span>
                            </button>
                        </div>
                        <div class="p-md">
                            <span class="text-xs font-label-bold text-outline uppercase tracking-wider">Minuman</span>
                            <h4 class="font-label-bold text-lg mt-1 text-on-surface line-clamp-1">Kopi Gayo Arabica
                                Premium 250g</h4>
                            <div class="flex items-center gap-1 my-2">
                                <span class="material-symbols-outlined text-secondary text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-sm font-label-bold text-on-surface">5.0</span>
                                <span class="text-xs text-outline">(342 Terjual)</span>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg font-bold text-primary">Rp 95.000</span>
                                <button
                                    class="bg-secondary-container text-on-secondary-container p-2 rounded-lg active:scale-90 transition-transform">
                                    <span class="material-symbols-outlined"
                                        data-icon="shopping_cart">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 4 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
                        <div class="relative h-64">
                            <img class="w-full h-full object-cover"
                                data-alt="stack of hand-loomed tenun ikat fabrics with traditional geometric patterns in earth tones"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXmerABn0tAtI_a5s3ldveoqSS7QMG1pOQOSxnS1YI7XcVuzySSQwg6rNFNQtLIBwOKSobbRlHdPkg1IsfZ1Da5ANxgWbo84bQ9Z7EgWKI86QijNub7BSn37wG4oEijQsEM2365LULhYCcx2UPq3l-oCV9LDODxlLAlgfe3ez5t2Qw5r-9ZXRMdVAm9_X1f6ZmzBgmTHmvWapDn8PP5cqjv_vvq6MyeMtfjhKLe02Buh5KCUWI5XRJNaRFWLx0p-hXRnZrizRUYerW" />
                            <button
                                class="absolute top-4 right-4 bg-white/90 p-2 rounded-full text-primary hover:bg-white transition-colors">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="favorite">favorite</span>
                            </button>
                        </div>
                        <div class="p-md">
                            <span class="text-xs font-label-bold text-outline uppercase tracking-wider">Kain</span>
                            <h4 class="font-label-bold text-lg mt-1 text-on-surface line-clamp-1">Kain Tenun Ikat Sumba
                                Timur</h4>
                            <div class="flex items-center gap-1 my-2">
                                <span class="material-symbols-outlined text-secondary text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-sm font-label-bold text-on-surface">4.7</span>
                                <span class="text-xs text-outline">(56 Terjual)</span>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg font-bold text-primary">Rp 1.200.000</span>
                                <button
                                    class="bg-secondary-container text-on-secondary-container p-2 rounded-lg active:scale-90 transition-transform">
                                    <span class="material-symbols-outlined"
                                        data-icon="shopping_cart">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-xl text-center">
                    <button
                        class="border-2 border-primary text-primary px-8 py-3 rounded-xl font-button hover:bg-primary hover:text-white transition-all active:scale-95">Lihat
                        Koleksi Lengkap</button>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-xxl">
            <div class="max-w-[1320px] mx-auto px-6">
                <div class="bg-emerald-900 rounded-[2rem] p-xxl relative overflow-hidden">
                    <div class="absolute right-0 top-0 w-1/3 h-full opacity-10 pointer-events-none">
                        <img class="w-full h-full object-cover"
                            data-alt="close-up details of Indonesian embroidery and craft patterns"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3erkOAFVjXQd5Qc0miSqsmRCyQ3ZG-R1VZMNMdBf9XsdxnxdlKPcpCSHULbxjz4EqZuY0KgesiwhVSNPtONnP91iZCp1WPXiFQSDDZQ8PKjaPzCHrVTbdJoNZWEN_otVjDQplmX5Lns1keagPmZMEpAyAl1bkO-VTH0LkQJ-edGzeCMpN-5FSTEPtYUJLeP0VLewJew6yP6DXBqOJHvBZ11rbBe9iCmm9988NZwrszAbVjBbdF3XvDxP3hsLR_VS7exu0rUKCUTiK" />
                    </div>
                    <div class="relative z-10 max-w-2xl">
                        <h2 class="font-h2 text-h2 text-white mb-6">Punya Usaha Lokal?</h2>
                        <p class="font-body-lg text-emerald-100/90 mb-8">Bergabunglah dengan ribuan mitra UMKM lainnya
                            dan perluas jangkauan pasar Anda ke seluruh Indonesia dengan platform digital kami.</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('daftar') }}"
                                class="bg-secondary-container text-on-secondary-container px-8 py-4 rounded-xl font-button shadow-lg active:scale-95 transition-transform">Daftar
                                Sebagai Penjual</a>
                            <button
                                class="bg-transparent border border-emerald-500 text-emerald-400 px-8 py-4 rounded-xl font-button hover:bg-emerald-800 transition-all active:scale-95">Pelajari
                                Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="w-full border-t border-slate-200 mt-auto bg-slate-50">
        <div class="max-w-[1320px] mx-auto py-12 px-6 flex flex-col md:flex-row justify-between items-start gap-8">
            <div class="max-w-xs">
                <div class="text-md font-bold text-emerald-900 mb-4">UMKM Digital</div>
                <p class="font-inter text-xs text-slate-500 leading-relaxed">Platform marketplace terpercaya yang
                    menghubungkan produk unggulan UMKM Indonesia dengan konsumen global.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 w-full md:w-auto">
                <div class="flex flex-col gap-3">
                    <span class="font-label-bold text-on-surface text-sm">Navigasi</span>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="{{ route('home') }}">Etalase</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="{{ route('kategori') }}">Kategori</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="#">Promo</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="font-label-bold text-on-surface text-sm">Bantuan</span>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="#">Pusat Bantuan</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="#">Kontak</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="#">Lacak Pesanan</a>
                </div>
                <div class="flex flex-col gap-3">
                    <span class="font-label-bold text-on-surface text-sm">Legal</span>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="#">Syarat &amp; Ketentuan</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-colors"
                        href="#">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
        <div
            class="max-w-[1320px] mx-auto px-6 py-8 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="font-inter text-xs text-slate-500">© 2024 UMKM Digital Indonesia. Memberdayakan Ekonomi Lokal.
            </p>
            <div class="flex gap-4">
                <span
                    class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors"
                    data-icon="facebook">social_leaderboard</span>
                <span
                    class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors"
                    data-icon="instagram">retweet</span>
                <span
                    class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors"
                    data-icon="youtube">video_youtube</span>
            </div>
        </div>
    </footer>
</body>

</html>
