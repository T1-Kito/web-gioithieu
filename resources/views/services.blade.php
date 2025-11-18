@extends('layouts.app')

@section('title', 'Services - Corporate and Finance Solutions')

@section('content')
<section class="page-content">
    <div class="container">
        <span class="section-tag">SERVICES</span>
        <h1 class="page-title">Our Services</h1>
        <p class="page-description">
            We offer comprehensive financial and strategic services tailored to meet your unique business needs.
        </p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Corporate Finance</h3>
                <p>Strategic financial planning, capital structure optimization, and M&A advisory services.</p>
                <ul class="service-features">
                    <li>Financial Modeling</li>
                    <li>Valuation Services</li>
                    <li>Capital Raising</li>
                    <li>M&A Advisory</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3>Investment Advisory</h3>
                <p>Expert guidance on investment strategies, portfolio management, and risk assessment.</p>
                <ul class="service-features">
                    <li>Portfolio Analysis</li>
                    <li>Risk Assessment</li>
                    <li>Investment Strategy</li>
                    <li>Performance Monitoring</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Strategic Consulting</h3>
                <p>Transform your business with data-driven insights and innovative solutions.</p>
                <ul class="service-features">
                    <li>Business Strategy</li>
                    <li>Market Analysis</li>
                    <li>Competitive Intelligence</li>
                    <li>Growth Planning</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Digital Solutions</h3>
                <p>Leverage technology to streamline operations and drive digital transformation.</p>
                <ul class="service-features">
                    <li>Digital Strategy</li>
                    <li>Process Automation</li>
                    <li>Technology Implementation</li>
                    <li>Data Analytics</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection



