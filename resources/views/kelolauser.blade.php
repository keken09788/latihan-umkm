<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
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
</head>

<body class="bg-background text-on-background min-h-screen flex">
    <!-- SideNavBar Component -->
    @include('sidebar')
    <!-- Main Content Canvas -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Header / Top Bar Area -->
        <header class="bg-white border-b border-slate-200 px-lg py-md flex items-center justify-between">
            <div>
                <h2 class="font-h3 text-on-surface">Manajemen Pengguna</h2>
                <p class="font-body-sm text-outline">Kelola akun admin dan customer. Data mitra tersedia di menu Mitra.
                </p>
            </div>
            <div class="flex items-center gap-md">
                <button class="p-2 text-outline hover:bg-slate-50 rounded-full transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-secondary rounded-full"></span>
                </button>
                <div class="h-8 w-[1px] bg-slate-200"></div>
                <button
                    class="px-md py-2 border border-primary text-primary font-button rounded-xl hover:bg-emerald-50 transition-colors">
                    Ekspor Data
                </button>
            </div>
        </header>
        <!-- Search & Filter Bar -->
        <section class="p-lg bg-surface">
            <div
                class="bg-white p-4 rounded-xl shadow-sm border border-slate-100 flex flex-col lg:flex-row gap-gutter items-center justify-between">
                <div class="relative w-full lg:w-1/3">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline"
                        data-icon="search">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-slate-50 border-slate-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-sm outline-none transition-all"
                        placeholder="Cari nama, email, atau ID..." type="text" />
                </div>
                <div class="flex flex-wrap items-center gap-md w-full lg:w-auto">
                    <div class="flex items-center gap-sm">
                        <label class="font-label-bold text-outline whitespace-nowrap">Filter Peran:</label>
                        <select
                            class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                            <option>Semua Peran</option>
                            <option>Admin</option>
                            <option>Customer</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-sm">
                        <label class="font-label-bold text-outline whitespace-nowrap">Status:</label>
                        <select
                            class="bg-slate-50 border-slate-200 rounded-lg py-2 pl-3 pr-8 font-body-sm focus:ring-primary">
                            <option>Semua Status</option>
                            <option>Aktif</option>
                            <option>Non-aktif</option>
                        </select>
                    </div>
                    <button
                        class="flex items-center gap-xs font-button text-sm text-primary hover:bg-emerald-50 px-3 py-2 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-sm" data-icon="filter_list">filter_list</span>
                        Reset Filter
                    </button>
                </div>
            </div>
        </section>
        <!-- Table Content Section -->
        <section class="flex-1 overflow-auto px-lg pb-lg">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                Pengguna</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                Peran</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                Tanggal Daftar</th>
                            <th class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px]">
                                Status</th>
                            <th
                                class="px-6 py-4 font-label-bold text-outline uppercase tracking-wider text-[11px] text-right">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-800 font-bold font-h3 text-sm">
                                        BS</div>
                                    <div>
                                        <p class="font-label-bold text-on-surface">Budi Santoso</p>
                                        <p class="text-xs text-outline">budi.santoso@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-surface-container-high text-on-surface-variant font-label-bold text-[11px] rounded-full uppercase">Admin</span>
                            </td>
                            <td class="px-6 py-4 font-body-sm text-on-surface">12 Mar 2024</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 text-outline hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="Professional profile photo of a female entrepreneur in business casual attire with bright office lighting"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBoTEC2UOfbI_uOx_h9LRQ4BixoUXH_ijsZkdVlD4LW2miTcnN-4CCeHScxgfPzjoGleDk2QXGUSB-h0y5UXfSPv6Ee5ls0Z8Ic-TM20bbhmXgBbVovSJjLlbaiBCE8vDhJxRP-aLSf4i1Ea2IUiwKmfEdQcT0zPMW6S_P5LXLhu_UZUIeC6lcdcj0UzcWbGs46Los2sHH_pYQ8StxA6kNClDjqqdHEKgWa74Dq27tiqXvajPp4-oS_v6mo6gHuHu5dMN0YnyPheMtZ" />
                                    <div>
                                        <p class="font-label-bold text-on-surface">Maya Putri</p>
                                        <p class="text-xs text-outline">maya.putri@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-surface-variant text-on-surface-variant font-label-bold text-[11px] rounded-full uppercase">Customer</span>
                            </td>
                            <td class="px-6 py-4 font-body-sm text-on-surface">05 Feb 2024</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 text-outline hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-bold font-h3 text-sm">
                                        AH</div>
                                    <div>
                                        <p class="font-label-bold text-on-surface">Agus Hidayat</p>
                                        <p class="text-xs text-outline">agus.h@provider.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-surface-variant text-on-surface-variant font-label-bold text-[11px] rounded-full uppercase">Customer</span>
                            </td>
                            <td class="px-6 py-4 font-body-sm text-on-surface">20 Jan 2024</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    Non-aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 text-outline hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="Friendly male small business owner smiling with warm natural lighting in an indoor workshop setting"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9h5cIA_MC9REmPLKMJ6igYd1Tdt_pjVUTGx6oGz9oOziGhCdytUSUz71fFO_Sb4r2qiyHRoiWOouPJunb-DYUfG-ARTA_Az3LTBkgYmMGoGM_tfn4setjZw1DX1S81fTTRmCBXJ07iREC9FEkoQprtDLnMQHad5TB_Vinj7V4OcnPJtShXn2v9pGNtnBKJLVQKN4alpZDuCsw12GnmZJyelxESbhuu-NVHjvVdSupv4fxGhD3wiN5NzAW9GfFjopB739c5LXTQQ-x" />
                                    <div>
                                        <p class="font-label-bold text-on-surface">Fajar Pratama</p>
                                        <p class="text-xs text-outline">fajar.pratama@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-surface-container-high text-on-surface-variant font-label-bold text-[11px] rounded-full uppercase">Admin</span>
                            </td>
                            <td class="px-6 py-4 font-body-sm text-on-surface">15 Jan 2024</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 text-outline hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-800 font-bold font-h3 text-sm">
                                        RM</div>
                                    <div>
                                        <p class="font-label-bold text-on-surface">Rina Marlina</p>
                                        <p class="text-xs text-outline">rina.m@email.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-3 py-1 bg-surface-variant text-on-surface-variant font-label-bold text-[11px] rounded-full uppercase">Customer</span>
                            </td>
                            <td class="px-6 py-4 font-body-sm text-on-surface">02 Jan 2024</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 text-outline hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Pagination Footer -->
                <div class="bg-white px-6 py-4 border-t border-slate-200 flex items-center justify-between">
                    <p class="font-body-sm text-outline">Menampilkan <span class="font-semibold text-on-surface">1 -
                            5</span> dari <span class="font-semibold text-on-surface">120</span> pengguna</p>
                    <div class="flex items-center gap-2">
                        <button
                            class="p-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined text-sm"
                                data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-primary text-on-primary rounded-lg font-label-bold text-xs">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center border border-slate-200 text-on-surface rounded-lg font-label-bold text-xs hover:bg-slate-50 transition-colors">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center border border-slate-200 text-on-surface rounded-lg font-label-bold text-xs hover:bg-slate-50 transition-colors">3</button>
                        <button class="p-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
                            <span class="material-symbols-outlined text-sm"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Component -->
        <footer class="w-full border-t mt-auto bg-slate-50 border-slate-200">
            <div class="max-w-[1320px] mx-auto py-6 px-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex flex-col md:flex-row items-center gap-4">
                    <span class="text-md font-bold text-emerald-900">UMKM Digital</span>
                    <span class="font-inter text-xs text-slate-500">© 2024 UMKM Digital Indonesia. Memberdayakan
                        Ekonomi Lokal.</span>
                </div>
                <div class="flex gap-6">
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                        href="#">Syarat &amp; Ketentuan</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                        href="#">Kebijakan Privasi</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                        href="#">Bantuan</a>
                    <a class="font-inter text-xs text-slate-500 hover:text-emerald-600 transition-opacity duration-200"
                        href="#">Kontak</a>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
