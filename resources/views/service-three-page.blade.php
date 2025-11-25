@extends('layouts.app')

@section('title', 'Our Services')

@section('content')


    <div class="banner-strip d-flex justify-content-between align-items-center text-white px-4 py-2">
        <span>Check Out Our Services</span>
        <span>Best Offers Available!</span>
    </div>


    <section class="py-5">
        <div class="px-4">
            <h2 class="fw-bold mb-4">
                Our <span style="color:#2F70B9;">Services</span>
            </h2>

            <div class="row g-4">


                <div class="col-md-4">
                    <div class="service-box p-4 rounded border h-100 d-flex flex-column justify-content-between">
                        <h3 class="fw-bold">Service One</h3>
                        <p>High-quality rug cleaning using eco-friendly solutions for a healthy home environment.</p>
                        <a href="#" class="btn btn-primary mt-2">Learn More</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="service-box p-4 rounded border h-100 d-flex flex-column justify-content-between">
                        <h3 class="fw-bold">Service Two</h3>
                        <p>Professional carpet and upholstery cleaning to remove deep-seated dirt and allergens.</p>
                        <a href="#" class="btn btn-primary mt-2">Learn More</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="service-box p-4 rounded border h-100 d-flex flex-column justify-content-between">
                        <h3 class="fw-bold">Service Three</h3>
                        <p>Commercial and office cleaning services for a fresh and productive work environment.</p>
                        <a href="#" class="btn btn-primary mt-2">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
