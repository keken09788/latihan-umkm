<!-- SideNavBar Component -->
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
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('dashboard') ? 'bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700' : 'text-slate-500 hover:bg-slate-100' }} font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            Dashboard
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('admin.produk', 'produk-add') ? 'bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700' : 'text-slate-500 hover:bg-slate-100' }} font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.produk') }}">
            <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
            Produk
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('admin.kategori') ? 'bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700' : 'text-slate-500 hover:bg-slate-100' }} font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.kategori') }}">
            <span class="material-symbols-outlined" data-icon="category">category</span>
            Kategori
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('kelolauser') ? 'bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700' : 'text-slate-500 hover:bg-slate-100' }} font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.kelolauser') }}">
            <span class="material-symbols-outlined" data-icon="group">group</span>
            Pengguna
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('admin.mitra') ? 'bg-emerald-50 text-emerald-800 border-r-4 border-emerald-700' : 'text-slate-500 hover:bg-slate-100' }} font-inter text-sm font-semibold cursor-pointer active:opacity-80 transition-all duration-300 hover:pl-2" href="{{ route('admin.mitra') }}">
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
