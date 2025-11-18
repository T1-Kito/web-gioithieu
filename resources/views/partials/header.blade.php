<header class="header">
    <nav class="navbar">
        <div class="container navbar-content">
            <a href="{{ route('home') }}" class="navbar-logo">
                <img src="{{ asset('logo.png') }}" alt="Vigilance Việt Nam logo">
            </a>

            <button id="menuToggle" class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="navbar-menu" id="navbarMenu">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}">Giới thiệu</a>
                </li>
                <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                    <a href="{{ route('services') }}">Dịch vụ</a>
                </li>
                <li class="nav-item {{ request()->routeIs('products') ? 'active' : '' }}">
                    <a href="{{ route('products') }}">Sản phẩm</a>
                </li>
                <li class="nav-item {{ request()->routeIs('blogs') ? 'active' : '' }}">
                    <a href="{{ route('blogs') }}">Blog</a>
                </li>
                <li class="nav-item {{ request()->routeIs('portfolios') ? 'active' : '' }}">
                    <a href="{{ route('portfolios') }}">Dự án</a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">Liên hệ</a>
                </li>
            </ul>

            <div class="navbar-actions">
                <a href="mailto:contact@vigilance.vn" class="newsletter-link">
                    <i class="fas fa-envelope"></i>
                    contact@vigilance.vn
                </a>
                <a href="tel:+84888888888" class="btn btn-small btn-primary">
                    <i class="fas fa-phone"></i>
                    0888 888 888
                </a>
            </div>
        </div>
    </nav>
</header>
