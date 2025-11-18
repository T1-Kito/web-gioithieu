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
                <li class="nav-item">
                    <a href="https://vigilancevn.com.vn/" target="_blank" rel="noopener">Sản phẩm</a>
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
                <a href="https://zalo.me/0982751075" target="_blank" rel="noopener" class="btn btn-small btn-zalo">
                    <i class="fas fa-comments"></i>
                    <span>Liên hệ nhanh</span>
                </a>
            </div>
        </div>
    </nav>
</header>
