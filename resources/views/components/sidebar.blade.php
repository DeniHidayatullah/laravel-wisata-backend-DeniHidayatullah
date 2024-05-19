<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Tiketin Aja</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu Dashboard</li>
            <li class="nav-item ">
                <a href="{{ route('home') }}" class="nav-link "><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            
            <li class="menu-header">Menu Master</li>
            <li class="nav-item ">
                <a href="{{ route('users.index') }}" class="nav-link "><i class="fas fa-users"></i>
                    <span>User</span></a>
            </li>
            
            <li class="nav-item ">
                <a href="{{ route('categories.index') }}" class="nav-link "><i class="fas fa-columns"></i>
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('products.index') }}" class="nav-link "><i class="fas fa-ticket"></i>
                    <span>Ticket</span></a>
            </li>

            
            <li class="menu-header">Menu Transaksi</li>
            <li class="nav-item ">
                <a href="{{ route('users.index') }}" class="nav-link "><i class="fas fa-ticket-alt"></i>
                    <span>Transaksi</span></a>
            </li>

            <li class="menu-header">Menu Lainnya</li>
            <li class="nav-item ">
                <a href="{{ route('logout') }}" class="nav-link "><i class="fas fa-arrow-alt-circle-left"></i>
                    <span>Keluar</span></a>
            </li>

        </ul>
    </aside>
</div>
