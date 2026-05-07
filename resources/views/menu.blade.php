<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu - UMKM Mart</title>
    <meta name="description" content="Menu lengkap UMKM Mart: Beranda, Produk, Kategori, Promo, tentang kami, dan cara bergabung sebagai seller.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --umkm-primary: #c96b18;
            --umkm-secondary: #1f5c4c;
            --umkm-accent: #f6c453;
            --umkm-dark: #1b1b1b;
            --umkm-soft: #fff8ef;
            --umkm-border: rgba(31, 92, 76, 0.12);
            --umkm-shadow: 0 16px 40px rgba(27, 27, 27, 0.08);
        }
        html { scroll-behavior: smooth; }
        body {
            font-family: "Poppins", sans-serif;
            color: var(--umkm-dark);
            background: linear-gradient(180deg, #fffaf3 0%, #fff 40%, #f9fcfb 100%);
            padding-top: 80px;
        }

        /* ── Navbar ── */
        .navbar {
            backdrop-filter: blur(14px);
            background-color: rgba(255,255,255,.92);
            border-bottom: 1px solid rgba(201,107,24,.08);
        }
        .navbar-brand-badge {
            width:42px; height:42px; border-radius:12px;
            background: linear-gradient(135deg, var(--umkm-primary), #f0a84e);
            color:#fff; display:inline-flex; align-items:center; justify-content:center;
            box-shadow: 0 10px 20px rgba(201,107,24,.25);
        }
        .btn-umkm-primary {
            background: linear-gradient(135deg, var(--umkm-primary), #e39334);
            border:none; color:#fff;
            box-shadow: 0 10px 22px rgba(201,107,24,.22);
        }
        .btn-umkm-primary:hover { color:#fff; background: linear-gradient(135deg,#b55e12,#d98322); }
        .btn-umkm-outline { border:1px solid rgba(31,92,76,.2); color:var(--umkm-secondary); background:#fff; }
        .btn-umkm-outline:hover { background:var(--umkm-secondary); color:#fff; border-color:var(--umkm-secondary); }

        /* ── Hero ── */
        .page-hero {
            background: linear-gradient(135deg, #1b1b1b 0%, #1f5c4c 100%);
            color:#fff; padding:56px 0 48px;
            position:relative; overflow:hidden;
        }
        .page-hero::before {
            content:""; position:absolute;
            width:400px; height:400px; border-radius:50%;
            background:rgba(201,107,24,.18);
            top:-120px; right:-100px;
        }
        .page-hero::after {
            content:""; position:absolute;
            width:220px; height:220px; border-radius:50%;
            background:rgba(246,196,83,.08);
            bottom:-70px; left:-50px;
        }

        /* ── Menu cards ── */
        .menu-grid { display:grid; gap:1.5rem; }
        @media(min-width:576px)  { .menu-grid { grid-template-columns: repeat(2,1fr); } }
        @media(min-width:992px)  { .menu-grid { grid-template-columns: repeat(3,1fr); } }
        @media(min-width:1200px) { .menu-grid { grid-template-columns: repeat(4,1fr); } }

        .menu-card {
            background:#fff;
            border:1px solid var(--umkm-border);
            border-radius:24px;
            box-shadow: var(--umkm-shadow);
            padding:2rem 1.5rem;
            text-decoration:none; color:var(--umkm-dark);
            transition: transform .28s ease, box-shadow .28s ease;
            display:flex; flex-direction:column; align-items:flex-start; gap:.75rem;
            position:relative; overflow:hidden;
        }
        .menu-card::after {
            content:"";
            position:absolute; bottom:0; left:0; right:0;
            height:4px;
            background: linear-gradient(90deg, var(--umkm-primary), var(--umkm-accent));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .3s ease;
        }
        .menu-card:hover { transform:translateY(-8px); box-shadow:0 28px 50px rgba(27,27,27,.13); color:var(--umkm-dark); }
        .menu-card:hover::after { transform:scaleX(1); }

        .menu-icon {
            width:60px; height:60px; border-radius:18px;
            display:flex; align-items:center; justify-content:center;
            font-size:1.6rem;
        }
        .icon-orange { background:rgba(201,107,24,.12); color:var(--umkm-primary); }
        .icon-green  { background:rgba(31,92,76,.10);    color:var(--umkm-secondary); }
        .icon-yellow { background:rgba(246,196,83,.25);  color:#8b5a00; }
        .icon-blue   { background:rgba(13,110,253,.10);  color:#0d6efd; }
        .icon-pink   { background:rgba(220,53,69,.10);   color:#dc3545; }
        .icon-purple { background:rgba(111,66,193,.10);  color:#6f42c1; }
        .icon-teal   { background:rgba(32,201,151,.15);  color:#198754; }
        .icon-dark   { background:rgba(27,27,27,.08);    color:var(--umkm-dark); }

        .menu-badge {
            font-size:.72rem; font-weight:600;
            border-radius:999px; padding:.25rem .7rem;
        }
        .menu-arrow { margin-left:auto; opacity:.4; transition:opacity .25s, transform .25s; }
        .menu-card:hover .menu-arrow { opacity:1; transform:translateX(4px); }

        /* ── Quick actions ── */
        .quick-card {
            background: linear-gradient(135deg, var(--umkm-primary) 0%, #e39334 100%);
            border-radius:24px; color:#fff; padding:2rem;
            box-shadow:0 20px 40px rgba(201,107,24,.28);
        }
        .quick-card.green {
            background: linear-gradient(135deg, #1f5c4c 0%, #1b7f67 100%);
            box-shadow:0 20px 40px rgba(31,92,76,.28);
        }

        /* ── Section title ── */
        .section-label {
            font-size:.78rem; font-weight:700;
            text-transform:uppercase; letter-spacing:.08em;
            color:var(--umkm-primary);
        }

        footer { background:#11251f; color:rgba(255,255,255,.78); }
        footer a { color:rgba(255,255,255,.78); text-decoration:none; }
        footer a:hover { color:#fff; }
    </style>
</head>
<body>

    <!-- ══ NAVBAR ══ -->
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3 fw-bold" href="{{ url('/beranda') }}">
                <span class="navbar-brand-badge"><i class="bi bi-shop"></i></span>
                <span>UMKM Mart <small class="d-block fw-normal text-muted" style="font-size:.75rem">Pasar Produk Lokal Nusantara</small></span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-3 mb-lg-0 align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/beranda') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/produk') }}">Produk</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold active" href="{{ url('/menu') }}">Menu</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/beranda') }}#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/beranda') }}#testimoni">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/beranda') }}#kontak">Kontak</a></li>
                </ul>
                <div class="d-flex flex-column flex-lg-row gap-2 ms-lg-3">
                    <a href="#" class="btn btn-umkm-outline rounded-pill px-4">Masuk</a>
                    <a href="#" class="btn btn-umkm-primary rounded-pill px-4">Daftar Seller</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ══ HERO ══ -->
    <section class="page-hero">
        <div class="container position-relative" style="z-index:1">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/beranda') }}" class="text-white-50 text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item active text-white">Menu</li>
                </ol>
            </nav>
            <h1 class="fw-bold mb-2" style="font-size:2.2rem">Semua Menu & Fitur</h1>
            <p class="text-white-50 mb-0">Pilih menu yang ingin kamu kunjungi — dari produk, kategori, promo, hingga cara bergabung sebagai seller.</p>
        </div>
    </section>

    <!-- ══ MENU UTAMA ══ -->
    <section class="py-5">
        <div class="container">
            <p class="section-label mb-1">Menu Utama</p>
            <h2 class="fw-bold mb-4">Navigasi Halaman</h2>

            <div class="menu-grid">

                <a href="{{ url('/beranda') }}" class="menu-card" id="menuBeranda">
                    <div class="menu-icon icon-orange"><i class="bi bi-house-door"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Beranda</h6>
                        <p class="small text-muted mb-0">Halaman utama dengan hero, produk unggulan, promo, dan testimoni.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="{{ url('/produk') }}" class="menu-card" id="menuProduk">
                    <div class="menu-icon icon-green"><i class="bi bi-bag-heart"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Produk</h6>
                        <p class="small text-muted mb-0">Katalog lengkap 2.500+ produk UMKM dengan filter dan pencarian.</p>
                    </div>
                    <span class="badge menu-badge text-bg-success me-auto">2.500+</span>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuKategori">
                    <div class="menu-icon icon-yellow"><i class="bi bi-grid"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Kategori</h6>
                        <p class="small text-muted mb-0">Jelajahi produk berdasarkan kategori: makanan, fashion, kerajinan, dll.</p>
                    </div>
                    <span class="badge menu-badge text-bg-warning me-auto">8 Kategori</span>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuPromo">
                    <div class="menu-icon icon-pink"><i class="bi bi-megaphone"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Promo & Diskon</h6>
                        <p class="small text-muted mb-0">Kumpulan penawaran flash sale, voucher, dan bundling produk.</p>
                    </div>
                    <span class="badge menu-badge text-bg-danger me-auto">Hot 🔥</span>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuSeller">
                    <div class="menu-icon icon-purple"><i class="bi bi-shop"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Seller UMKM</h6>
                        <p class="small text-muted mb-0">Daftar seller terpercaya dengan produk lokal berkualitas tinggi.</p>
                    </div>
                    <span class="badge menu-badge text-bg-secondary me-auto">580+ Seller</span>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuPesanan">
                    <div class="menu-icon icon-teal"><i class="bi bi-box-seam"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Lacak Pesanan</h6>
                        <p class="small text-muted mb-0">Cek status pengiriman pesanan kamu secara real-time.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuKeranjang">
                    <div class="menu-icon icon-blue"><i class="bi bi-cart3"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Keranjang Belanja</h6>
                        <p class="small text-muted mb-0">Lihat produk yang sudah kamu tambahkan ke keranjang.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuWishlist">
                    <div class="menu-icon icon-pink"><i class="bi bi-heart"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Wishlist</h6>
                        <p class="small text-muted mb-0">Produk simpanan favorit yang ingin kamu beli nanti.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

            </div>
        </div>
    </section>

    <!-- ══ MENU AKUN ══ -->
    <section class="pb-5">
        <div class="container">
            <p class="section-label mb-1">Akun & Pengaturan</p>
            <h2 class="fw-bold mb-4">Kelola Akun Kamu</h2>

            <div class="menu-grid">

                <a href="#" class="menu-card" id="menuProfil">
                    <div class="menu-icon icon-dark"><i class="bi bi-person-circle"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Profil Saya</h6>
                        <p class="small text-muted mb-0">Lihat dan edit data diri, foto profil, dan alamat pengiriman.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuTransaksi">
                    <div class="menu-icon icon-green"><i class="bi bi-receipt"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Riwayat Transaksi</h6>
                        <p class="small text-muted mb-0">Seluruh riwayat pembelian dan status pembayaran kamu.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuUlasan">
                    <div class="menu-icon icon-yellow"><i class="bi bi-star"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Ulasan Saya</h6>
                        <p class="small text-muted mb-0">Beri penilaian dan komentar pada produk yang sudah kamu beli.</p>
                    </div>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

                <a href="#" class="menu-card" id="menuNotifikasi">
                    <div class="menu-icon icon-blue"><i class="bi bi-bell"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Notifikasi</h6>
                        <p class="small text-muted mb-0">Pemberitahuan pesanan, promosi, dan update dari seller.</p>
                    </div>
                    <span class="badge menu-badge text-bg-danger me-auto">3 Baru</span>
                    <i class="bi bi-arrow-right menu-arrow fs-5"></i>
                </a>

            </div>
        </div>
    </section>

    <!-- ══ QUICK ACTIONS ══ -->
    <section class="pb-5">
        <div class="container">
            <p class="section-label mb-1">Aksi Cepat</p>
            <h2 class="fw-bold mb-4">Mulai Dari Sini</h2>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="quick-card h-100">
                        <i class="bi bi-shop fs-1 mb-3 d-block opacity-75"></i>
                        <h4 class="fw-bold mb-2">Daftar Jadi Seller UMKM</h4>
                        <p class="opacity-75 mb-4">Pasarkan produkmu ke ribuan pembeli. Gratis daftar, mudah kelola, langsung jualan!</p>
                        <a href="#" class="btn btn-light fw-semibold rounded-pill px-4">Mulai Sekarang <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quick-card green h-100">
                        <i class="bi bi-headset fs-1 mb-3 d-block opacity-75"></i>
                        <h4 class="fw-bold mb-2">Butuh Bantuan?</h4>
                        <p class="opacity-75 mb-4">Tim kami siap membantu kamu 24/7. Chat langsung atau lihat FAQ untuk jawaban cepat.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-light fw-semibold rounded-pill px-4">Live Chat</a>
                            <a href="#" class="btn btn-outline-light fw-semibold rounded-pill px-4">Lihat FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ FOOTER ══ -->
    <footer class="pt-5 pb-4">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-4">
                    <h4 class="text-white fw-bold">UMKM Mart</h4>
                    <p class="mb-3">Platform penjualan produk UMKM yang responsif, lengkap, dan siap dikembangkan.</p>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="text-white fw-bold mb-3">Navigasi</h6>
                    <div class="d-grid gap-2">
                        <a href="{{ url('/beranda') }}">Beranda</a>
                        <a href="{{ url('/produk') }}">Produk</a>
                        <a href="{{ url('/menu') }}">Menu</a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <h6 class="text-white fw-bold mb-3">Layanan</h6>
                    <div class="d-grid gap-2">
                        <a href="#">Pusat Bantuan</a>
                        <a href="#">Cara Belanja</a>
                        <a href="#">Metode Pembayaran</a>
                        <a href="#">Pelacakan Pesanan</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h6 class="text-white fw-bold mb-3">Kontak</h6>
                    <div class="d-grid gap-2">
                        <span><i class="bi bi-geo-alt me-2"></i>Jakarta, Indonesia</span>
                        <span><i class="bi bi-envelope me-2"></i>halo@umkmmart.id</span>
                        <span><i class="bi bi-telephone me-2"></i>+62 812 3456 7890</span>
                    </div>
                </div>
            </div>
            <div class="border-top border-light border-opacity-10 pt-3 d-flex flex-column flex-md-row justify-content-between gap-2">
                <small>&copy; 2026 UMKM Mart. Semua hak dilindungi.</small>
                <small>Dibuat dengan Bootstrap 5 untuk tampilan UMKM yang modern.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>