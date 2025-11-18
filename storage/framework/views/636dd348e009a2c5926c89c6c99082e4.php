<?php $__env->startSection('title', 'Home - Corporate and Finance Solutions'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slider" id="heroSlider">
            <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="hero-slide <?php echo e($index === 0 ? 'active' : ''); ?>" data-slide="<?php echo e($index); ?>">
                    <div class="hero-image" style="background-image: url('<?php echo e(Storage::url($banner->image)); ?>');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title">Chào mừng đến với</h1>
                            <p class="hero-description hero-subtitle">CÔNG TY CỔ PHẦN VIGILANCE VIỆT NAM</p>
                            <div class="hero-buttons">
                                <?php if($banner->button_text_1 && $banner->button_link_1): ?>
                                    <a href="<?php echo e($banner->button_link_1); ?>" class="btn btn-primary"><?php echo e($banner->button_text_1); ?></a>
                                <?php endif; ?>
                                <?php if($banner->button_text_2 && $banner->button_link_2): ?>
                                    <a href="<?php echo e($banner->button_link_2); ?>" class="btn btn-outline"><?php echo e($banner->button_text_2); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="hero-slide active">
                    <div class="hero-image" style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1920&q=80');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title">Chào mừng đến với</h1>
                            <p class="hero-description hero-subtitle">CÔNG TY CỔ PHẦN VIGILANCE VIỆT NAM</p>
                            <div class="hero-buttons">
                                <a href="<?php echo e(route('portfolios')); ?>" class="btn btn-primary">EXPLORE MORE</a>
                                <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline">GET IN TOUCH</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if($banners->count() > 1): ?>
            <div class="hero-indicators">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="indicator <?php echo e($index === 0 ? 'active' : ''); ?>" data-slide="<?php echo e($index); ?>"></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </section>

    <!-- Hero Feature Boxes -->
    <section class="hero-feature-section">
        <div class="container">
            <div class="hero-feature-grid">
                <div class="hero-feature-card">
                    <div class="hero-feature-icon">
                        <img src="<?php echo e(asset('images/icon01.jpg')); ?>" alt="Advanced Analytic icon">
                    </div>
                    <h3 class="hero-feature-title">Advanced Analytic</h3>
                    <p class="hero-feature-text">Growth, focus &amp; analysis for high-performing teams.</p>
                </div>
                <div class="hero-feature-card">
                    <div class="hero-feature-icon">
                        <img src="<?php echo e(asset('images/icon02.jpg')); ?>" alt="Corporate Finance icon">
                    </div>
                    <h3 class="hero-feature-title">Corporate Finance</h3>
                    <p class="hero-feature-text">Strategy is the foundation for sustainable value.</p>
                </div>
                <div class="hero-feature-card">
                    <div class="hero-feature-icon">
                        <img src="<?php echo e(asset('images/icon03.jpg')); ?>" alt="Business Consultation icon">
                    </div>
                    <h3 class="hero-feature-title">Business Consultation</h3>
                    <p class="hero-feature-text">Professional, skilled team ready to support you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Highlight Section -->
    <section class="business-highlight-section">
        <div class="container business-highlight-grid">
            <div class="business-highlight-image">
                <img src="<?php echo e(asset('images/business-main.png')); ?>" alt="Giải pháp Vigilance">
            </div>
            <div class="business-highlight-content">
                <span class="section-tag">Our Benefits</span>
                <h2 class="business-highlight-title">Giải pháp tối ưu cho doanh nghiệp của bạn</h2>
                <p class="business-highlight-text">
                    Chúng tôi mang đến hệ sinh thái thiết bị chấm công và kiểm soát ra vào toàn diện, giúp doanh nghiệp quản lý nhân sự hiệu quả và an toàn hơn bao giờ hết.
                </p>
                <div class="business-highlight-list">
                    <div class="business-highlight-item">
                        <div class="business-icon">
                            <img src="<?php echo e(asset('images/icon-01.jpg')); ?>" alt="Cam kết hiệu quả">
                        </div>
                        <div>
                            <h3>Cam kết hiệu quả</h3>
                            <p>Thiết bị hiện đại giúp quản lý minh bạch, chính xác và tiết kiệm thời gian.</p>
                        </div>
                    </div>
                    <div class="business-highlight-item">
                        <div class="business-icon">
                            <img src="<?php echo e(asset('images/icon-02.jpg')); ?>" alt="Công nghệ tiên tiến">
                        </div>
                        <div>
                            <h3>Ứng dụng công nghệ tiên tiến</h3>
                            <p>Nhận diện khuôn mặt, vân tay, thẻ từ – đáp ứng mọi quy mô doanh nghiệp.</p>
                        </div>
                    </div>
                    <div class="business-highlight-item">
                        <div class="business-icon">
                            <img src="<?php echo e(asset('images/icon-03.jpg')); ?>" alt="Hỗ trợ tận tâm">
                        </div>
                        <div>
                            <h3>Hỗ trợ kỹ thuật tận tâm</h3>
                            <p>Tư vấn, lắp đặt, bảo hành tận nơi – đồng hành cùng khách hàng suốt quá trình sử dụng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Case Studies Section -->
    <!-- (Removed as requested) -->

    <!-- Statistics Banner -->
    <section class="stats-banner">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number" data-count="350">0</div>
                    <div class="stat-label">TRUSTED CLIENTS</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="215">0</div>
                    <div class="stat-label">FINISHED PROJECTS</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="15">0</div>
                    <div class="stat-label">YEARS OF EXPERIENCE</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-count="36">0</div>
                    <div class="stat-label">VISITED CONFERENCES</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">OUR BLOG</span>
                <h2 class="section-title">Read Our Latest Insights</h2>
                <p class="section-description">
                    We help you see the world differently, discover opportunities you may never have imagined 
                    and achieve results that bridge what is with what can be.
                </p>
            </div>
            <div class="blog-grid">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&q=80" alt="Blog 1">
                        <span class="blog-tag">BLOG</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Digital Transformation Roadmap: Enablers</h3>
                        <span class="blog-date">04/03/2023</span>
                        <a href="<?php echo e(route('blogs')); ?>" class="blog-link">VIEW MORE</a>
                    </div>
                </article>
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=600&q=80" alt="Blog 2">
                        <span class="blog-tag">BLOG</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">The Future of Retail: Asia's Ecosystems</h3>
                        <span class="blog-date">04/03/2023</span>
                        <a href="<?php echo e(route('blogs')); ?>" class="blog-link">VIEW MORE</a>
                    </div>
                </article>
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt="Blog 3">
                        <span class="blog-tag">BLOG</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Contactless Payments' Time Has Come</h3>
                        <span class="blog-date">04/03/2023</span>
                        <a href="<?php echo e(route('blogs')); ?>" class="blog-link">VIEW MORE</a>
                    </div>
                </article>
            </div>
            <div class="section-footer">
                <a href="<?php echo e(route('blogs')); ?>" class="btn btn-primary">VIEW ALL</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\web-gioithieu\resources\views/home.blade.php ENDPATH**/ ?>