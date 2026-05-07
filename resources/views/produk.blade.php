<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Produk - UMKM Digital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004532",
                        "primary-container": "#065f46",
                        "primary-fixed": "#a6f2d1",
                        "primary-fixed-dim": "#8bd6b6",
                        "on-primary": "#ffffff",
                        "on-primary-fixed": "#002116",
                        "on-primary-fixed-variant": "#00513b",
                        "secondary": "#904d00",
                        "secondary-container": "#fe932c",
                        "secondary-fixed": "#ffdcc3",
                        "secondary-fixed-dim": "#ffb77d",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#663500",
                        "tertiary": "#00443e",
                        "tertiary-container": "#005e56",
                        "tertiary-fixed": "#89f5e7",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#6cd9cb",
                        "surface": "#f8f9ff",
                        "surface-dim": "#cbdbf5",
                        "surface-bright": "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#eff4ff",
                        "surface-container": "#e5eeff",
                        "surface-container-high": "#dce9ff",
                        "surface-container-highest": "#d3e4fe",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#3f4944",
                        "outline": "#6f7973",
                        "outline-variant": "#bec9c2",
                        "background": "#f8f9ff",
                        "on-background": "#0b1c30",
                        "inverse-surface": "#213145",
                        "inverse-on-surface": "#eaf1ff",
                        "inverse-primary": "#8bd6b6",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "on-error": "#ffffff",
                        "surface-tint": "#1b6b51",
                        "surface-variant": "#d3e4fe"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"
                    },
                    spacing: {
                        "container-max": "1320px", "lg": "24px", "xs": "4px", "base": "4px",
                        "md": "16px", "xxl": "48px", "xl": "32px", "gutter": "24px", "sm": "8px"
                    },
                    fontFamily: {
                        "h1": ["Inter"], "h2": ["Inter"], "h3": ["Inter"],
                        "body-md": ["Inter"], "body-sm": ["Inter"], "body-lg": ["Inter"],
                        "button": ["Inter"], "label-bold": ["Inter"]
                    },
                    fontSize: {
                        "h1": ["48px", {lineHeight:"1.2", letterSpacing:"-0.02em", fontWeight:"700"}],
                        "h2": ["36px", {lineHeight:"1.2", letterSpacing:"-0.01em", fontWeight:"700"}],
                        "h3": ["24px", {lineHeight:"1.3", fontWeight:"600"}],
                        "body-lg": ["18px", {lineHeight:"1.6", fontWeight:"400"}],
                        "body-md": ["16px", {lineHeight:"1.5", fontWeight:"400"}],
                        "body-sm": ["14px", {lineHeight:"1.5", fontWeight:"400"}],
                        "button": ["16px", {lineHeight:"1", fontWeight:"600"}],
                        "label-bold": ["14px", {lineHeight:"1.2", fontWeight:"600"}]
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .filled { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background font-body-md text-on-background antialiased">

<!-- ══ NAVBAR ══ -->
<nav class="bg-white/95 backdrop-blur-md fixed top-0 w-full z-50 border-b border-slate-200 shadow-sm">
    <div class="max-w-[1320px] mx-auto flex items-center justify-between px-6 py-4">
        <a href="{{ route('home') }}" class="text-xl font-bold text-emerald-900 tracking-tighter">UMKM Digital</a>
        <div class="hidden md:flex flex-1 max-w-md mx-8">
            <div class="relative w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input id="searchInput" class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all font-body-sm" placeholder="Cari produk lokal..." type="text"/>
            </div>
        </div>
        <div class="hidden lg:flex items-center gap-6 font-inter text-sm font-medium">
            <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="{{ route('home') }}">Etalase</a>
            <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="{{ route('home') }}#kategori">Kategori</a>
            <a class="text-emerald-700 border-b-2 border-emerald-700 pb-1" href="{{ route('produk') }}">Produk</a>
            <a class="text-slate-600 hover:text-emerald-700 transition-colors" href="{{ route('daftar') }}">Kemitraan</a>
        </div>
        <div class="flex items-center gap-4 ml-6">
            <button class="relative p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-colors">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="absolute top-1 right-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold px-1.5 py-0.5 rounded-full">3</span>
            </button>
            <a href="{{ route('login') }}" class="bg-primary text-on-primary px-6 py-2 rounded-xl font-button active:scale-95 transition-transform">Masuk</a>
        </div>
    </div>
</nav>

<!-- ══ PAGE HERO ══ -->
<section class="pt-20 bg-primary-container relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-container via-primary-container/90 to-tertiary-container/80"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary-fixed/10 rounded-full -translate-y-1/2 translate-x-1/3 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary-container/10 rounded-full translate-y-1/2 -translate-x-1/3 blur-3xl"></div>
    </div>
    <div class="relative z-10 max-w-[1320px] mx-auto px-6 py-14">
        <nav class="flex items-center gap-2 text-white/60 text-sm mb-6">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="text-white font-semibold">Produk</span>
        </nav>
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
            <div>
                <h1 class="font-h1 text-h1 text-white mb-3">Katalog Produk UMKM</h1>
                <p class="font-body-lg text-white/80 max-w-xl">Jelajahi ribuan produk lokal pilihan dari mitra UMKM terpercaya di seluruh Indonesia.</p>
                <div class="flex flex-wrap gap-3 mt-5">
                    <span class="flex items-center gap-1.5 bg-white/10 text-white text-sm px-4 py-2 rounded-full backdrop-blur-sm">
                        <span class="material-symbols-outlined text-sm">grid_view</span>2.500+ Produk
                    </span>
                    <span class="flex items-center gap-1.5 bg-white/10 text-white text-sm px-4 py-2 rounded-full backdrop-blur-sm">
                        <span class="material-symbols-outlined text-sm">storefront</span>580+ Mitra
                    </span>
                    <span class="flex items-center gap-1.5 bg-white/10 text-white text-sm px-4 py-2 rounded-full backdrop-blur-sm">
                        <span class="material-symbols-outlined text-sm">verified</span>Terverifikasi
                    </span>
                    <span class="flex items-center gap-1.5 bg-white/10 text-white text-sm px-4 py-2 rounded-full backdrop-blur-sm">
                        <span class="material-symbols-outlined text-sm">local_shipping</span>Kirim Seluruh Indonesia
                    </span>
                </div>
            </div>
            <!-- search bar hero -->
            <div class="w-full lg:w-auto lg:min-w-[380px]">
                <div class="bg-white rounded-xl shadow-xl p-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-slate-400 ml-2">search</span>
                    <input id="searchHero" type="text" placeholder="Cari produk UMKM..." class="flex-1 py-2 px-2 outline-none text-on-surface font-body-md bg-transparent placeholder-slate-400"/>
                    <button class="bg-primary text-white px-5 py-2.5 rounded-lg font-button text-sm active:scale-95 transition-transform">Cari</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ CATEGORY QUICK FILTER ══ -->
<div class="bg-white border-b border-slate-200 sticky top-[65px] z-40 shadow-sm">
    <div class="max-w-[1320px] mx-auto px-6 py-3 flex items-center gap-3 overflow-x-auto scrollbar-none">
        @php
        $cats = [
            ['icon'=>'grid_view','label'=>'Semua','active'=>true],
            ['icon'=>'restaurant','label'=>'Makanan'],
            ['icon'=>'checkroom','label'=>'Fashion'],
            ['icon'=>'palette','label'=>'Kerajinan'],
            ['icon'=>'spa','label'=>'Herbal'],
            ['icon'=>'diamond','label'=>'Aksesoris'],
            ['icon'=>'local_grocery_store','label'=>'Sembako'],
            ['icon'=>'favorite','label'=>'Kesehatan'],
            ['icon'=>'face_retouching_natural','label'=>'Kecantikan'],
        ];
        @endphp
        @foreach($cats as $cat)
        <button class="flex items-center gap-1.5 whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all {{ isset($cat['active']) ? 'bg-primary text-white shadow-sm' : 'bg-slate-50 text-slate-600 hover:bg-primary-fixed/40 hover:text-primary border border-slate-200' }} filter-cat-btn">
            <span class="material-symbols-outlined text-sm">{{ $cat['icon'] }}</span>
            {{ $cat['label'] }}
        </button>
        @endforeach
    </div>
</div>

<!-- ══ MAIN CONTENT ══ -->
<main class="max-w-[1320px] mx-auto px-6 py-xxl">
    <div class="flex flex-col lg:flex-row gap-gutter">

        <!-- ── Sidebar Filter ── -->
        <aside class="w-full lg:w-72 shrink-0">
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-lg sticky top-32">
                <h3 class="font-h3 text-base text-on-surface mb-md">Filter Produk</h3>

                <!-- Rentang Harga -->
                <div class="mb-md">
                    <p class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider mb-sm">Rentang Harga</p>
                    <input type="range" id="priceRange" min="0" max="500000" value="500000"
                           class="w-full accent-primary mb-2"/>
                    <div class="flex justify-between text-body-sm text-on-surface-variant">
                        <span>Rp 0</span>
                        <span id="priceVal" class="font-semibold text-primary">Rp 500.000</span>
                    </div>
                </div>

                <hr class="border-slate-100 my-md"/>

                <!-- Rating -->
                <div class="mb-md">
                    <p class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider mb-sm">Rating</p>
                    <div class="space-y-2">
                        @foreach([5,4,3] as $r)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="rating" class="accent-primary" {{ $r==5?'checked':'' }}/>
                            <div class="flex gap-0.5">
                                @for($i=1;$i<=5;$i++)
                                    <span class="material-symbols-outlined text-sm {{ $i<=$r?'filled':'' }} {{ $i<=$r?'text-secondary':'text-slate-300' }}">star</span>
                                @endfor
                            </div>
                            <span class="text-body-sm text-on-surface-variant">& ke atas</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <hr class="border-slate-100 my-md"/>

                <!-- Kondisi -->
                <div class="mb-lg">
                    <p class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider mb-sm">Kondisi</p>
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="rounded accent-primary" checked/>
                            <span class="text-body-sm text-on-surface">Produk Baru</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="rounded accent-primary"/>
                            <span class="text-body-sm text-on-surface">Preloved / Bekas</span>
                        </label>
                    </div>
                </div>

                <button class="w-full py-3 bg-primary text-white rounded-xl font-button text-sm active:scale-[0.98] transition-all">
                    Terapkan Filter
                </button>
                <button class="w-full py-3 mt-2 border border-slate-200 text-on-surface-variant rounded-xl font-button text-sm hover:bg-slate-50 transition-all">
                    Reset
                </button>
            </div>
        </aside>

        <!-- ── Product Grid ── -->
        <div class="flex-1 min-w-0">

            <!-- Sort bar -->
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm px-md py-3 flex flex-wrap items-center justify-between gap-3 mb-gutter">
                <span class="text-body-sm text-on-surface-variant">Menampilkan <strong class="text-on-surface">48</strong> dari <strong class="text-on-surface">2.500+</strong> produk</span>
                <div class="flex items-center gap-3">
                    <label class="text-body-sm text-on-surface-variant">Urutkan:</label>
                    <select class="text-sm border border-slate-200 rounded-lg px-3 py-1.5 bg-slate-50 outline-none focus:ring-2 focus:ring-primary">
                        <option>Relevansi</option>
                        <option>Harga Terendah</option>
                        <option>Harga Tertinggi</option>
                        <option>Terlaris</option>
                        <option>Terbaru</option>
                        <option>Rating Tertinggi</option>
                    </select>
                    <div class="flex rounded-lg border border-slate-200 overflow-hidden">
                        <button class="p-2 bg-primary text-white transition-colors" id="btnGrid" title="Grid">
                            <span class="material-symbols-outlined text-sm">grid_view</span>
                        </button>
                        <button class="p-2 bg-white text-slate-400 hover:bg-slate-50 transition-colors" id="btnList" title="List">
                            <span class="material-symbols-outlined text-sm">view_list</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Cards -->
            @php
            $products = [
                ['name'=>'Keripik Pisang Cokelat','cat'=>'Snack Nusantara','price'=>'25.000','old'=>'32.000','badge'=>'Best Seller','icon'=>'cookie','color'=>'bg-amber-100 text-amber-700','star'=>4.8,'sold'=>320,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCo-QCHE1BKmOYVwtxocU6RDivn3EgTn4MRU0uUHo4iWgyWiVeXgcAQmTS-LHMtD0CcI5ohHg1992V81ynz1vyAO7sphK4T6SDvYD8U1-N_7YKfPDkrtcyAoWtfRUsVrG4odiZzPLTY0pVvEzLYraaYrzAuJJo9LC6QOyRLtxJEJROhIon2HccCJydtoyBkIw4dZjusZyHZGCyY6w7eRHo3-z60IRF3Alh88YCKMKpsIcyFJEUSqL5018MpW9N-BvQFWCS62fq3A-1k'],
                ['name'=>'Tas Anyaman Rotan','cat'=>'Fashion Lokal','price'=>'145.000','old'=>null,'badge'=>'Produk Baru','icon'=>'shopping_bag','color'=>'bg-emerald-100 text-emerald-700','star'=>4.9,'sold'=>87,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDYQeOuPAE9CaNQ1achmlWvn6YD05-O1N08fP24HzdKH6Ly_gfS6074g8XkCM0oAvAC3syttyYoejGNFZ856Ve4Ds3xj0AZkzeJB6yncgen-WVTQLy7r9KyukzQemVd1q8STadPGMB5hpsJvC7f99nxZDqdgAwlptOWYJ3OihiNP9Ky-gl1Wv2tijywRRpXWaSX8pJIz10rN5GHHTbJaSywEmHuXLRpWPbSSHDi2j3-J9i5R606iNv6kydSD9VHbVqQQObzgGlvyR1W'],
                ['name'=>'Kopi Arabika Sangrai','cat'=>'Minuman Lokal','price'=>'68.000','old'=>'79.000','badge'=>'Promo Minggu Ini','icon'=>'coffee','color'=>'bg-orange-100 text-orange-700','star'=>4.7,'sold'=>512,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuAi_etdLuFp250QN8e1pFOqU9J4BiN6N-cy6m0-KHghmWmwGJPXQkE2XNx5xpe8ox_EmxhtOsGOkNTnr7tZHWf_XqLVwlfq-QRi-631TnUVnUoXydTJk0Rd0VEJhE281-fswvhFy89ezLrQJJ8NZfPYaDOfLTr73LYLJgGqvS_u6PdbOJAN6MLGwsOS0YYquuIJQkzUs-LG_V-tcCpl-l-seCGv0Om2bEaFRNUjrMzoiy4qkYnu_fPn8XuVX4pgugmyAcAPuLiZVbhp'],
                ['name'=>'Sabun Herbal Organik','cat'=>'Perawatan Tubuh','price'=>'35.000','old'=>null,'badge'=>'Favorit','icon'=>'spa','color'=>'bg-teal-100 text-teal-700','star'=>4.8,'sold'=>450,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCHBHJcLmOtbJhNiN6Kit6QeYBREiX3Qc_kgqqE0Is5KXGReXSOmblZgqegKwpujLth7M41BgkreI2muNLV-txTLXzNWf9dLRKH6Mukx2eTS3z_wvLESq319oPhSzCDBYzwUu8D2CKgARdMdVMrVgGZdSdUJ_v4QviYGgeM-nwjpNaAUUxwvkZ3X4t_hWw2WaEiFt4NOhhZTK5ePEAGkrOuZXOGOS6CR5FNlX6GokmD2AW6saABGwc3577p42nmqE-eS-cYkqwm38pn'],
                ['name'=>'Temulawak Instan','cat'=>'Minuman Herbal','price'=>'22.000','old'=>'28.000','badge'=>'Diskon 20%','icon'=>'eco','color'=>'bg-lime-100 text-lime-700','star'=>4.6,'sold'=>210,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBnOiAkAqV7eZ794VpB7_6wILm5wLGcnJ--_D_jeaOGUI0KB70pjcG_C64wPFukntrZqjFPr9KB7GgLA1GDheL1fzrhRTpKxc3RUcQBMh-hbl0pOqUQwr-HrjX69x31IDSvuQ5bxApGtSOadtvW8RpfRAr-vOQ6NmMfBKBssu59cjtkJSKXLatRn_7hrTLqZf1xNhXHwvPCaQmVcr36oaZ09jQOA5T7YgbPnnRAONdAMY44BufeLywWgsr54bzICP1JOIneG9B1zsTN'],
                ['name'=>'Gelang Batok Kelapa','cat'=>'Aksesoris Lokal','price'=>'55.000','old'=>null,'badge'=>'Handmade','icon'=>'diamond','color'=>'bg-purple-100 text-purple-700','star'=>4.9,'sold'=>130,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuC6QN1ZEIkdcJAWJuTqwQruR75a6x-j9CMYb9tyLdoIrYVi2ERMOWm1UWrQRi1qTxmS3XzyFcEww4o1eD6Wg05pOPwm7auZLmzWlnxux7Nzc6nBu-EpQqLzcfiwJX-ChCRepGURuL6my3WoeJXuimAjCg5-1YIk6gs2F0p8FtaRRFFMCUhAXshjm1DHGQnyWD5Q0MtMVlUO_2lSF8pBKNqFrbmh1pTW1aNCJBEyYSdjvajs5GLTfsAaaoFgI0sOguYSUAt-ycsDAuvH'],
                ['name'=>'Beras Merah Organik','cat'=>'Sembako Sehat','price'=>'48.000','old'=>'55.000','badge'=>'Promo Paket','icon'=>'local_grocery_store','color'=>'bg-yellow-100 text-yellow-700','star'=>4.5,'sold'=>680,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDkR8iWfOwqWN4gbfROvrC6GdQFLBrrXZk8ZwtHlp1gJUQh-OtSN3GpU1k16f_UYytYqenooEOXXg9iK58kDk6ZksJsamlBDtr8ouFlmFnEsl73BDgQtmsY6X52ue1rN2VnFPOb0XEsD92R_sugBQAgsQkU9YmYmnx1Nvoc0k1DN0xkf4fgGR84qEXcbnPjOmFqJ0LO1957mWqX23TE2E9eiwLOi5QCHFN3LNe7h2WfyINwqfuiCWSGcaMamlllRxb2mOahTUkAQ9ch'],
                ['name'=>'Syal Sutra Batik Tulis','cat'=>'Kain & Pakaian','price'=>'450.000','old'=>null,'badge'=>'Eksklusif','icon'=>'style','color'=>'bg-indigo-100 text-indigo-700','star'=>4.9,'sold'=>128,'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDRDpBJa3_UZqpKuIodqcoiyQrA4TnxwGplK4syB-jHH2wIxjYnPUiU6F--swIuqHFUukdTGbK6ChnLnlsExyi0qPNK_NhYC_TfWRT0-wSbnc9wbxgeJbb-l8zmVUDATHLkp55bujAGMfSyuCRMwPWbGKKtSsaznJ602Xc8rhjoEy6eUS2vFAJNwbfOY8AW_S_Be6gZj0QVZke2Ez_KPIVoUmWSbS_CrGe8hn5-c8KDtOSCTo2dB2ssPYyB0Z8k_FDFHeGNzcGy23ZR'],
            ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-gutter" id="productGrid">
                @foreach($products as $p)
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group border border-slate-100 product-card">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <!-- badge -->
                        <span class="absolute top-3 left-3 bg-secondary-container text-on-secondary-container text-xs font-bold px-2.5 py-1 rounded-full">{{ $p['badge'] }}</span>
                        <!-- wishlist -->
                        <button class="wishlist-btn absolute top-3 right-3 bg-white/90 p-2 rounded-full text-primary hover:bg-white transition-colors active:scale-90">
                            <span class="material-symbols-outlined text-[20px]">favorite</span>
                        </button>
                    </div>
                    <div class="p-md">
                        <span class="text-xs font-label-bold text-outline uppercase tracking-wider">{{ $p['cat'] }}</span>
                        <h4 class="font-label-bold text-base mt-1 text-on-surface line-clamp-1">{{ $p['name'] }}</h4>
                        <div class="flex items-center gap-1 my-2">
                            <span class="material-symbols-outlined text-secondary text-[16px] filled">star</span>
                            <span class="text-sm font-label-bold text-on-surface">{{ $p['star'] }}</span>
                            <span class="text-xs text-outline">({{ $p['sold'] }} Terjual)</span>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div>
                                <span class="text-base font-bold text-primary">Rp {{ $p['price'] }}</span>
                                @if($p['old'])
                                <span class="text-xs text-outline line-through ml-1">Rp {{ $p['old'] }}</span>
                                @endif
                            </div>
                            <button class="bg-secondary-container text-on-secondary-container p-2 rounded-lg active:scale-90 transition-transform">
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-xl flex items-center justify-center gap-2">
                <button class="p-2 rounded-xl border border-slate-200 text-slate-400 hover:bg-slate-50 transition-colors disabled:opacity-40" disabled>
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                @foreach([1,2,3,'…',12] as $page)
                <button class="px-4 py-2 rounded-xl text-sm font-semibold transition-all {{ $page==1 ? 'bg-primary text-white shadow-sm' : 'border border-slate-200 text-on-surface-variant hover:bg-slate-50' }}">{{ $page }}</button>
                @endforeach
                <button class="p-2 rounded-xl border border-slate-200 text-on-surface hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</main>

<!-- ══ CTA BANNER ══ -->
<section class="py-xxl bg-surface-container-low">
    <div class="max-w-[1320px] mx-auto px-6">
        <div class="bg-emerald-900 rounded-[2rem] p-xl lg:p-xxl relative overflow-hidden">
            <div class="absolute right-0 top-0 w-1/3 h-full opacity-10">
                <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3erkOAFVjXQd5Qc0miSqsmRCyQ3ZG-R1VZMNMdBf9XsdxnxdlKPcpCSHULbxjz4EqZuY0KgesiwhVSNPtONnP91iZCp1WPXiFQSDDZQ8PKjaPzCHrVTbdJoNZWEN_otVjDQplmX5Lns1keagPmZMEpAyAl1bkO-VTH0LkQJ-edGzeCMpN-5FSTEPtYUJLeP0VLewJew6yP6DXBqOJHvBZ11rbBe9iCmm9988NZwrszAbVjBbdF3XvDxP3hsLR_VS7exu0rUKCUTiK" alt="pattern"/>
            </div>
            <div class="relative z-10 max-w-2xl">
                <h2 class="font-h2 text-h2 text-white mb-4">Punya Usaha Lokal?</h2>
                <p class="font-body-lg text-emerald-100/90 mb-8">Bergabunglah dengan ribuan mitra UMKM dan perluas jangkauan pasar Anda ke seluruh Indonesia.</p>
                <a href="{{ route('daftar') }}" class="inline-block bg-secondary-container text-on-secondary-container px-8 py-4 rounded-xl font-button shadow-lg active:scale-95 transition-transform">
                    Daftar Sebagai Mitra
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ══ FOOTER ══ -->
<footer class="w-full border-t border-slate-200 bg-slate-50">
    <div class="max-w-[1320px] mx-auto py-12 px-6 flex flex-col md:flex-row justify-between items-start gap-8">
        <div class="max-w-xs">
            <a href="{{ route('home') }}" class="block text-md font-bold text-emerald-900 mb-3">UMKM Digital</a>
            <p class="text-xs text-slate-500 leading-relaxed">Platform marketplace terpercaya yang menghubungkan produk unggulan UMKM Indonesia dengan konsumen global.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-10 w-full md:w-auto">
            <div class="flex flex-col gap-3">
                <span class="font-label-bold text-on-surface text-sm">Navigasi</span>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="{{ route('home') }}">Etalase</a>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="{{ route('home') }}#kategori">Kategori</a>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="{{ route('produk') }}">Produk</a>
            </div>
            <div class="flex flex-col gap-3">
                <span class="font-label-bold text-on-surface text-sm">Bantuan</span>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="#">Pusat Bantuan</a>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="#">Kontak</a>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="#">Lacak Pesanan</a>
            </div>
            <div class="flex flex-col gap-3">
                <span class="font-label-bold text-on-surface text-sm">Legal</span>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="#">Syarat &amp; Ketentuan</a>
                <a class="text-xs text-slate-500 hover:text-emerald-600 transition-colors" href="#">Kebijakan Privasi</a>
            </div>
        </div>
    </div>
    <div class="max-w-[1320px] mx-auto px-6 py-6 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-xs text-slate-500">© 2026 UMKM Digital Indonesia. Memberdayakan Ekonomi Lokal.</p>
        <div class="flex gap-4">
            <span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors">social_leaderboard</span>
            <span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors">retweet</span>
            <span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors">video_youtube</span>
        </div>
    </div>
</footer>

<script>
    // Price range
    const range = document.getElementById('priceRange');
    const priceVal = document.getElementById('priceVal');
    if (range) {
        range.addEventListener('input', () => {
            priceVal.textContent = 'Rp ' + Number(range.value).toLocaleString('id-ID');
        });
    }

    // Category filter active toggle
    document.querySelectorAll('.filter-cat-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-cat-btn').forEach(b => {
                b.classList.remove('bg-primary','text-white','shadow-sm');
                b.classList.add('bg-slate-50','text-slate-600','border','border-slate-200');
            });
            btn.classList.add('bg-primary','text-white','shadow-sm');
            btn.classList.remove('bg-slate-50','text-slate-600','border','border-slate-200');
        });
    });

    // Wishlist heart toggle
    document.querySelectorAll('.wishlist-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const icon = btn.querySelector('.material-symbols-outlined');
            icon.classList.toggle('filled');
            icon.style.color = icon.classList.contains('filled') ? '#fe932c' : '';
        });
    });

    // View toggle grid/list
    const btnGrid = document.getElementById('btnGrid');
    const btnList = document.getElementById('btnList');
    const grid = document.getElementById('productGrid');
    btnGrid && btnGrid.addEventListener('click', () => {
        grid.className = 'grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-gutter';
        btnGrid.classList.add('bg-primary','text-white'); btnGrid.classList.remove('bg-white','text-slate-400');
        btnList.classList.add('bg-white','text-slate-400'); btnList.classList.remove('bg-primary','text-white');
    });
    btnList && btnList.addEventListener('click', () => {
        grid.className = 'grid grid-cols-1 gap-4';
        btnList.classList.add('bg-primary','text-white'); btnList.classList.remove('bg-white','text-slate-400');
        btnGrid.classList.add('bg-white','text-slate-400'); btnGrid.classList.remove('bg-primary','text-white');
    });

    // Sync search bars
    const searchHero = document.getElementById('searchHero');
    const searchNav = document.getElementById('searchInput');
    if (searchHero && searchNav) {
        searchHero.addEventListener('input', () => searchNav.value = searchHero.value);
        searchNav.addEventListener('input', () => searchHero.value = searchNav.value);
    }
</script>
</body>
</html>

