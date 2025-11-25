@extends('layouts.app')

@section('content')
    <section class="quote-banner position-relative mb-0 pb-0">
        <img src="{{ asset('assets/images/banner.svg') }}" alt="Quote Banner" class="img-fluid w-100 d-block">
        <div class="banner-title position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="mb-0">Get a Quote</h1>
            <p class="mb-0">Fill out the form below and we’ll get back to you!</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Request a Quote</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter your full name">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone"
                                    placeholder="Enter your phone number">
                            </div>

                            <div class="mb-3">
                                <label for="service" class="form-label">Service Interested In</label>
                                <select class="form-select" id="service">
                                    <option selected>Select a service</option>
                                    <option value="area-rug">Area Rug Cleaning</option>
                                    <option value="carpet">Carpet Cleaning</option>
                                    <option value="commercial">Commercial Cleaning</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Additional Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Your message..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
