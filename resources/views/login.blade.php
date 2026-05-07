<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Masuk Mitra - UMKM Juara</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
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
                        "on-secondary-fixed-variant": "#6e3900",
                        "tertiary-fixed-dim": "#6bd8cb",
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
                        "h3": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "button": ["16px", {
                            "lineHeight": "1",
                            "fontWeight": "600"
                        }],
                        "h2": ["36px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "h1": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "label-bold": ["14px", {
                            "lineHeight": "1.2",
                            "fontWeight": "600"
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

        .tonal-layer-1 {
            box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.05), 0 2px 8px -2px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-background font-body-md text-on-background min-h-screen flex flex-col">
    <!-- Login Content Canvas -->
    <main class="flex-grow flex items-center justify-center px-gutter py-xxl">
        <div class="w-full max-w-[440px] flex flex-col gap-lg">
            <!-- Brand Anchor -->
            <div class="text-center flex flex-col items-center gap-base">
                <div class="w-16 h-16 bg-primary-container rounded-full flex items-center justify-center mb-md">
                    <span class="material-symbols-outlined text-white text-3xl" data-icon="storefront">storefront</span>
                </div>
                <h1 class="font-h2 text-primary tracking-tight">UMKM Juara</h1>
                <p class="font-body-md text-outline">Selamat datang kembali, Mitra Terbaik Indonesia.</p>
            </div>
            <!-- Login Card -->
            <div class="bg-surface-container-lowest p-xl rounded-xl border border-outline-variant tonal-layer-1">
                <form method="post" action="{{ route('login.post') }}" class="flex flex-col gap-lg">
                    <!-- Email Field -->
                    @csrf
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-bold text-on-surface-variant" for="email">Alamat Email</label>
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors"
                                data-icon="mail">mail</span>
                            <input
                                class="w-full pl-12 pr-md py-3 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-surface-container-lowest transition-all duration-200 outline-none"
                                id="email" name="email" value="{{ old('email') }}"
                                placeholder="nama@perusahaan.com" required="" type="email" </div>
                        </div>
                        <!-- Password Field -->
                        <div class="flex flex-col gap-xs">
                            <div class="flex justify-between items-center">
                                <label class="font-label-bold text-on-surface-variant" for="password">Kata Sandi</label>
                                <a class="text-body-sm font-label-bold text-primary hover:underline" href="#">Lupa
                                    password?</a>
                            </div>
                            <div class="relative group">
                                <span
                                    class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors"
                                    data-icon="lock">lock</span>
                                <input
                                    class="w-full pl-12 pr-12 py-3 rounded-lg border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 bg-surface-container-lowest transition-all duration-200 outline-none"
                                    id="password" name="password" placeholder="••••••••" required=""
                                    type="password" />
                                <button
                                    class="absolute right-md top-1/2 -translate-y-1/2 text-outline hover:text-on-surface-variant"
                                    type="button">
                                    <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                                </button>
                            </div>
                        </div>
                        <!-- CTA Button -->
                        <button
                            class="w-full bg-primary text-on-primary font-button py-4 rounded-xl shadow-lg shadow-primary/20 hover:bg-primary-container active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-sm"
                            type="submit">
                            Masuk sebagai Mitra
                            <span class="material-symbols-outlined text-lg"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                </form>
                <!-- Divider -->
                <div class="flex items-center gap-md my-xl">
                    <div class="h-[1px] flex-grow bg-outline-variant"></div>
                    <span class="text-body-sm text-outline font-medium">Atau masuk dengan</span>
                    <div class="h-[1px] flex-grow bg-outline-variant"></div>
                </div>
                <!-- Social Login -->
                <button
                    class="w-full border border-outline-variant bg-white py-3 rounded-xl font-label-bold text-on-surface hover:bg-surface-container-low transition-colors flex items-center justify-center gap-sm">
                    <img alt="Google Logo" class="w-5 h-5"
                        data-alt="Official Google logo with signature multi-color G icon on white background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2oFRsgfaAH-CmO-Y07cFtE8l9YKX-JjIWIs1Xhzw19JjjBmsN0PLjTYtvqxpL5D2mwDafnp4vZlouPue9e3eThgyZXgn1wqw3ImFlbdTY3RcM2nlrE5T1t3ALdZLIEV8xnCI1UQXJM_bxuED17Sf6-lpEWxb86X9VsdT-Cac83cm_Cx2kS6ivV9ZMWi7hkxN77LWN-WpS-eW2vEIeoLG2i8pgp0o7n-999JRxL_n6IOw3Rci6TG2gsW2k5NUzbgg1O1GqBt4a1G_K" />
                    Google
                </button>
            </div>
            <!-- Footer Link -->
            <p class="text-center font-body-md text-on-surface-variant">
                Belum bergabung?
                <a class="text-primary font-label-bold hover:underline" href="{{ route('daftar') }}">Daftar sebagai
                    Mitra Baru</a>
            </p>
        </div>
    </main>
    <!-- Contextual Footer (Non-Navigation) -->
    <footer class="w-full border-t border-outline-variant py-lg bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-gutter flex flex-col md:flex-row justify-between items-center gap-md">
            <div class="flex items-center gap-sm">
                <span class="font-label-bold text-primary">UMKM Juara Ecosystem</span>
                <span class="text-outline">|</span>
                <p class="text-body-sm text-outline">Memberdayakan ekonomi lokal melalui digitalisasi.</p>
            </div>
            <div class="flex gap-lg">
                <a class="text-body-sm text-outline hover:text-primary transition-colors" href="#">Syarat &amp;
                    Ketentuan</a>
                <a class="text-body-sm text-outline hover:text-primary transition-colors" href="#">Kebijakan
                    Privasi</a>
                <a class="text-body-sm text-outline hover:text-primary transition-colors" href="#">Bantuan</a>
            </div>
        </div>
    </footer>
    <!-- Decorative Elements -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none -z-10 overflow-hidden">
        <div class="absolute -top-[10%] -left-[5%] w-[40%] h-[40%] bg-primary-fixed/10 blur-[120px] rounded-full"></div>
        <div
            class="absolute -bottom-[10%] -right-[5%] w-[40%] h-[40%] bg-secondary-container/5 blur-[120px] rounded-full">
        </div>
    </div>
</body>

</html>
