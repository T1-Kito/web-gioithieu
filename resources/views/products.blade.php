@extends('layouts.app')

@section('title', 'Products - Corporate and Finance Solutions')

@section('content')
<section class="page-content">
    <div class="container">
        <span class="section-tag">PRODUCTS</span>
        <h1 class="page-title">Our Products</h1>
        <p class="page-description">
            Discover our comprehensive suite of financial and strategic solutions designed to help your business thrive.
        </p>
        
        <div class="products-grid">
            <div class="product-card">
                <div class="product-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Financial Advisory</h3>
                <p>Expert guidance on mergers, acquisitions, and strategic financial planning to optimize your business value.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Private Equity Solutions</h3>
                <p>Specialized services for private equity firms, family offices, and growth-stage companies.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>Strategic Consulting</h3>
                <p>Transform your business with data-driven insights and proven methodologies for sustainable growth.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Risk Management</h3>
                <p>Comprehensive risk assessment and mitigation strategies to protect your business assets.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>Digital Transformation</h3>
                <p>Navigate the digital landscape with cutting-edge technology solutions and implementation strategies.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Organizational Development</h3>
                <p>Build high-performing teams and organizational structures that drive innovation and results.</p>
            </div>
        </div>
    </div>
</section>
@endsection



