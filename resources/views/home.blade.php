@extends('layouts.app')

@section('title', 'Home - Corporate and Finance Solutions')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slider" id="heroSlider">
            @forelse($banners as $index => $banner)
                <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}">
                    <div class="hero-image" style="background-image: url('{{ Storage::url($banner->image) }}');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title">Chào mừng đến với</h1>
                            <p class="hero-description hero-subtitle">CÔNG TY CỔ PHẦN VIGILANCE VIỆT NAM</p>
                            <div class="hero-buttons">
                                @if($banner->button_text_1 && $banner->button_link_1)
                                    <a href="{{ $banner->button_link_1 }}" class="btn btn-primary">{{ $banner->button_text_1 }}</a>
                                @endif
                                @if($banner->button_text_2 && $banner->button_link_2)
                                    <a href="{{ $banner->button_link_2 }}" class="btn btn-outline">{{ $banner->button_text_2 }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="hero-slide active">
                    <div class="hero-image" style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1920&amp;q=80');"></div>
                    <div class="hero-overlay"></div>
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title">Chào mừng đến với</h1>
                            <p class="hero-description hero-subtitle">CÔNG TY CỔ PHẦN VIGILANCE VIỆT NAM</p>
                            <div class="hero-buttons">
                                <a href="{{ route('portfolios') }}" class="btn btn-primary">EXPLORE MORE</a>
                                <a href="{{ route('contact') }}" class="btn btn-outline">GET IN TOUCH</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        @if($banners->count() > 1)
            <div class="hero-indicators">
                @foreach($banners as $index => $banner)
                    <span class="indicator {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></span>
                @endforeach
            </div>
        @endif
    </section>

    <!-- Hero Feature Boxes -->
    <section class="hero-feature-section">
        <div class="container">
            <div class="hero-feature-grid">
                <div class="hero-feature-card">
                    <div class="hero-feature-icon">
                        <img src="{{ asset('images/icon01.jpg') }}" alt="Advanced Analytic icon">
                    </div>
                    <h3 class="hero-feature-title">Advanced Analytic</h3>
                    <p class="hero-feature-text">Growth, focus &amp; analysis for high-performing teams.</p>
                </div>
                <div class="hero-feature-card">
                    <div class="hero-feature-icon">
                        <img src="{{ asset('images/icon02.jpg') }}" alt="Corporate Finance icon">
                    </div>
                    <h3 class="hero-feature-title">Corporate Finance</h3>
                    <p class="hero-feature-text">Strategy is the foundation for sustainable value.</p>
                </div>
                <div class="hero-feature-card">
                    <div class="hero-feature-icon">
                        <img src="{{ asset('images/icon03.jpg') }}" alt="Business Consultation icon">
                    </div>
                    <h3 class="hero-feature-title">Business Consultation</h3>
                    <p class="hero-feature-text">Professional, skilled team ready to support you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Company Section -->
    <section class="business-highlight-section">
        <div class="container business-highlight-grid">
            <div class="business-media-stack">
                <div class="media-blob"></div>
                <div class="media-card primary">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=900&amp;q=80" alt="Hệ thống điều hành kiểm soát ra vào thông minh">
                </div>
                <div class="media-card secondary">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&amp;q=80" alt="Thiết bị chấm công công nghệ cao">
                </div>
                <div class="media-mini-card">
                    <span>Advanced Analytic</span>
                    <p>Growth, focus & analysis.</p>
                </div>
            </div>
            <div class="business-highlight-content">
                <span class="section-tag">About Company</span>
                <h2 class="business-highlight-title">Giải pháp chấm công &amp; kiểm soát ra vào cho doanh nghiệp của bạn</h2>
                <div class="business-highlight-text">
                    <p>
                        Nhu cầu về quản lý nhân sự và an ninh của doanh nghiệp không ngừng thay đổi, vì thế Vigilance Việt Nam luôn tiên phong cập nhật công nghệ mới và cải tiến dịch vụ.
                    </p>
                    <p>
                        Chúng tôi không ngừng mở rộng sản phẩm, nâng cấp hệ thống và đào tạo đội ngũ kỹ thuật chuyên sâu nhằm mang đến giải pháp chính xác – hiệu quả – dễ sử dụng.
                    </p>
                    <p>
                        Chúng tôi đồng hành cùng khách hàng ở mọi quy mô — từ doanh nghiệp vừa và nhỏ đến tập đoàn lớn, không chỉ là nhà cung cấp thiết bị, mà còn là đối tác tư vấn giải pháp và hỗ trợ kỹ thuật trọn đời.
                    </p>
                </div>
                <div class="business-cta">
                    <a href="{{ route('about') }}" class="btn btn-primary">EXPLORE NOW</a>
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

    <!-- Benefits Inline Section -->
    <section class="benefits-inline-section">
        <div class="container">
            <div class="benefits-inline-media">
                <img src="{{ asset('images/anhghep.jpg') }}" alt="Nhân sự vận hành hệ thống Vigilance">
            </div>
            <div class="benefits-inline-header">
                <span class="section-tag">OUR BENEFITS</span>
            </div>
            <div class="benefits-inline-grid">
                <div class="benefits-inline-card">
                    <div class="benefit-inline-icon">
                        <img src="{{ asset('images/icon-01.jpg') }}" alt="Cam kết hiệu quả">
                    </div>
                    <h3>Cam kết hiệu quả</h3>
                    <p>Thiết bị hiện đại giúp quản lý minh bạch, chính xác và tiết kiệm thời gian.</p>
                </div>
                <div class="benefits-inline-card">
                    <div class="benefit-inline-icon">
                        <img src="{{ asset('images/icon-02.jpg') }}" alt="Công nghệ tiên tiến">
                    </div>
                    <h3>Ứng dụng công nghệ tiên tiến</h3>
                    <p>Nhận diện khuôn mặt, vân tay, thẻ từ – đáp ứng mọi quy mô doanh nghiệp.</p>
                </div>
                <div class="benefits-inline-card">
                    <div class="benefit-inline-icon">
                        <img src="{{ asset('images/icon-03.jpg') }}" alt="Hỗ trợ kỹ thuật">
                    </div>
                    <h3>Hỗ trợ kỹ thuật tận tâm</h3>
                    <p>Đội ngũ kỹ sư túc trực 24/7, đồng hành trong suốt vòng đời dự án.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Journey Section -->
    <section class="products-journey-section">
        <div class="container">
            <div class="products-journey-header">
                <h2 class="products-journey-title">Bắt đầu hành trình sử dụng giải pháp của bạn</h2>
                <p class="products-journey-subtitle">Nhận trợ giúp bạn cần để chuyển sang hệ thống quản lý hiện đại một cách đơn giản và bắt đầu tận hưởng mọi tính năng mà giải pháp của chúng tôi mang lại.</p>
            </div>
            <div class="products-journey-grid">
                <div class="products-journey-card">
                    <div class="products-journey-image">
                        <img src="{{ asset('images/maychamcong.webp') }}" alt="Máy chấm công">
                    </div>
                    <div class="products-journey-overlay">
                        <h3 class="products-journey-card-title">Máy chấm công</h3>
                        <p class="products-journey-card-subtitle">Hệ thống chấm công hiện đại</p>
                        <a href="#" class="products-journey-link">Tìm hiểu thêm ></a>
                    </div>
                </div>
                <div class="products-journey-card">
                    <div class="products-journey-image">
                        <img src="{{ asset('images/congphanlang.jpeg') }}" alt="Cổng phân làng">
                    </div>
                    <div class="products-journey-overlay">
                        <h3 class="products-journey-card-title">Cổng phân làng</h3>
                        <p class="products-journey-card-subtitle">Giải pháp kiểm soát ra vào thông minh</p>
                        <a href="#" class="products-journey-link">Tìm hiểu thêm ></a>
                    </div>
                </div>
                <div class="products-journey-card">
                    <div class="products-journey-image">
                        <img src="{{ asset('images/khoa.jpg') }}" alt="Khóa ZKTeko">
                    </div>
                    <div class="products-journey-overlay">
                        <h3 class="products-journey-card-title">Khóa ZKTeko</h3>
                        <p class="products-journey-card-subtitle">Hệ thống khóa thông minh</p>
                        <a href="#" class="products-journey-link">Tìm hiểu thêm ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section (removed as requested) -->
@endsection