<header class="header">
    <nav class="navbar">
        <div class="container navbar-content">
            <a href="<?php echo e(route('home')); ?>" class="navbar-logo">
                <img src="<?php echo e(asset('logo.png')); ?>" alt="Vigilance Việt Nam logo">
            </a>

            <button id="menuToggle" class="menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="navbar-menu" id="navbarMenu">
                <li class="nav-item <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('home')); ?>">Trang chủ</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('about')); ?>">Giới thiệu</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('services') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('services')); ?>">Dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a href="https://vigilancevn.com.vn/" target="_blank" rel="noopener">Sản phẩm</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('blogs') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('blogs')); ?>">Blog</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('portfolios') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('portfolios')); ?>">Dự án</a>
                </li>
                <li class="nav-item <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('contact')); ?>">Liên hệ</a>
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
<?php /**PATH C:\xampp\web-gioithieu\resources\views/partials/header.blade.php ENDPATH**/ ?>