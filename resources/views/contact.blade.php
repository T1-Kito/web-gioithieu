@extends('layouts.app')

@section('title', 'Contact Us - Corporate and Finance Solutions')

@section('content')
<section class="page-content">
    <div class="container">
        <span class="section-tag">CONTACT US</span>
        <h1 class="page-title">Get In Touch</h1>
        <p class="page-description">
            Have a question or want to discuss how we can help your business? We'd love to hear from you.
        </p>
        
        <div class="contact-wrapper">
            <div class="contact-info-section">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>20 University St, Seattle<br>WA 98101, United States</p>
                </div>
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>+1-800-456-7890<br>Mon - Fri: 9:00 AM - 6:00 PM</p>
                </div>
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>webdemo@mail.com<br>info@maxbizz.com</p>
                </div>
            </div>
            
            <div class="contact-form-section">
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection



