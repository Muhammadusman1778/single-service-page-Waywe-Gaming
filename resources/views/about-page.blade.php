@extends('layouts.layout')

@section('title', 'About Us')

@section('content')

    <!-- Banner -->
    <div class="banner-strip d-flex justify-content-between align-items-center text-white px-4 py-2">
        <span>Get 20% Off On Our Services</span>
        <span>Limited Time Offer!</span>
    </div>

    <!-- About Section -->
    <section class="py-5">
        <div class="px-4">
            <h2 class="fw-bold mb-4">
                About <span style="color:#2F70B9;">Our Company</span>
            </h2>
            <p class="text-secondary mb-4">
                We are a professional rug cleaning company based in Brooklyn. Our mission is to provide high-quality
                cleaning services
                for every type of rug, ensuring durability, freshness, and comfort in your home.
            </p>
            <p class="text-secondary">
                Our team is trained in the latest cleaning techniques and uses eco-friendly products to protect your rugs,
                your home,
                and the environment.
            </p>
        </div>
    </section>

    <!-- Image + About Box -->
    <section class="steps-section py-5">
        <div class="px-4">
            <div class="row g-4 align-items-stretch">

                <!-- Left Image -->
                <div class="col-lg-6">
                    <div class="image-box">
                        <img src="{{ asset('assets/images/about-img.svg') }}" class="img-fluid rounded" alt="About Image">
                    </div>
                </div>

                <!-- Right About Content -->
                <div class="col-lg-6">
                    <div class="about-box p-4 rounded h-100 d-flex flex-column justify-content-center">
                        <h5 class="about-title">Who We Are</h5>
                        <h3 class="fw-bold">Professional Rug Cleaning<br>Since 1990</h3>
                        <p>We provide top-notch area rug cleaning services in Brooklyn and beyond. Our process is safe,
                            eco-friendly, and highly effective.</p>
                        <a href="#" class="btn btn-primary mt-2">Get a Quote</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="py-5">
        <div class="px-4">
            <h2 class="section-title mb-4"><span class="highlight">Our Process</span> for Rug Cleaning</h2>
            <div class="row g-4">

                <div class="col-md-4 text-center text-md-start">
                    <h2>01</h2>
                    <h5>Inspection</h5>
                    <p>We carefully inspect each rug to determine fiber type and cleaning method.</p>
                </div>

                <div class="col-md-4 text-center text-md-start">
                    <h2>02</h2>
                    <h5>Deep Cleaning</h5>
                    <p>Our team hand-cleans the rug using the safest and most effective methods.</p>
                </div>

                <div class="col-md-4 text-center text-md-start">
                    <h2>03</h2>
                    <h5>Drying & Grooming</h5>
                    <p>Rugs are dried in controlled airflow and temperature, then groomed to perfection.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="px-4">
            <h2 class="section-title mb-4">Why <span class="highlight">Choose Us</span></h2>
            <ul>
                <li>Over 30 Years of Experience</li>
                <li>Eco-Friendly Cleaning Solutions</li>
                <li>Trusted & Skilled Team</li>
            </ul>
        </div>
    </section>

@endsection
